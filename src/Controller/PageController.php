<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use App\Entity\Animal;
use App\Entity\CompteRendu;
use App\Form\UserType;
use App\Form\AnimalType;
use App\Form\CompteRenduType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class PageController extends AbstractController
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/habitats', name: 'app_habitats')]
    public function habitats(): Response
    {
        return $this->render('page/habitats/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/habitats/voliere-tropicale', name: 'app_habitat_voliere_tropicale')]
    public function voliereTropicale(): Response
    {
        return $this->render('page/habitats/voliere_tropicale.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/habitats/foret-tropicale', name: 'app_habitat_foret_tropicale')]
    public function foretTropicale(): Response
    {
        return $this->render('page/habitats/foret_tropicale.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/habitats/enclos-rehabilitation', name: 'app_habitat_enclos_rehabilitation')]
    public function enclosRehabilitation(): Response
    {
        return $this->render('page/habitats/enclos_rehabilitation.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/services', name: 'app_services')]
    public function services(): Response
    {
        return $this->render('page/services/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/avis', name: 'app_avis')]
    public function avis(): Response
    {
        return $this->render('page/avis.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('page/contact.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('security/login.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/admin', name: 'admin_dashboard')]
    public function adminDashboard(): Response
    {
        return $this->render('admin/dashboard.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/admin/users', name: 'admin_users')]
    public function manageUsers(EntityManagerInterface $entityManager): Response
    {
        $users = $entityManager->getRepository(User::class)->findAll();
        return $this->render('admin/users/index.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/admin/users/new', name: 'admin_users_new')]
    public function newUser(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword(
                $this->passwordHasher->hashPassword(
                    $user,
                    $user->getPassword()
                )
            );
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('admin_users');
        }

        return $this->render('admin/users/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/users/{id}/edit', name: 'admin_users_edit')]
    public function editUser(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('admin_users');
        }

        return $this->render('admin/users/edit.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    #[Route('/admin/users/{id}/delete', name: 'admin_users_delete')]
    public function deleteUser(User $user, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($user);
        $entityManager->flush();

        return $this->redirectToRoute('admin_users');
    }

    #[Route('/user/profile', name: 'user_profile')]
    public function userProfile(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        $user = $this->getUser();

        return $this->render('user/profile.html.twig', [
            'user' => $user,
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/vet/reports', name: 'vet_reports')]
    public function vetReports(EntityManagerInterface $entityManager): Response
    {
        $reports = $entityManager->getRepository(CompteRendu::class)->findAll();
        return $this->render('vet/reports.html.twig', [
            'reports' => $reports,
        ]);
    }

    #[Route('/vet/reports/new', name: 'vet_reports_new')]
    public function newReport(Request $request, EntityManagerInterface $entityManager): Response
    {
        $report = new CompteRendu();
        $form = $this->createForm(CompteRenduType::class, $report);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($report);
            $entityManager->flush();

            return $this->redirectToRoute('vet_reports');
        }

        return $this->render('vet/report_form.html.twig', [
            'form' => $form->createView(),
            'button_label' => 'Créer',
        ]);
    }

    #[Route('/vet/reports/{id}/edit', name: 'vet_reports_edit')]
    public function editReport(Request $request, CompteRendu $report, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CompteRenduType::class, $report);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('vet_reports');
        }

        return $this->render('vet/report_form.html.twig', [
            'form' => $form->createView(),
            'button_label' => 'Modifier',
        ]);
    }

    #[Route('/vet/reports/{id}/delete', name: 'vet_reports_delete', methods: ['POST'])]
    public function deleteReport(Request $request, CompteRendu $report, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$report->getId(), $request->request->get('_token'))) {
            $entityManager->remove($report);
            $entityManager->flush();
        }

        return $this->redirectToRoute('vet_reports');
    }

    #[Route('/animals', name: 'animals_index')]
    public function manageAnimals(EntityManagerInterface $entityManager): Response
    {
        $animals = $entityManager->getRepository(Animal::class)->findAll();
        return $this->render('animals/index.html.twig', [
            'animals' => $animals,
        ]);
    }

    #[Route('/animals/new', name: 'animals_new')]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $animal = new Animal();
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // handle exception if something happens during file upload
                }

                $animal->setImageName($newFilename);
            }

            $entityManager->persist($animal);
            $entityManager->flush();

            return $this->redirectToRoute('animals_index');
        }

        return $this->render('animals/animal_form.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/animals/{id}/edit', name: 'animals_edit')]
    public function editAnimal(Request $request, Animal $animal, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(AnimalType::class, $animal);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            return $this->redirectToRoute('animals_index');
        }

        return $this->render('animals/animal_form.html.twig', [
            'form' => $form->createView(),
            'button_label' => 'Modifier',
        ]);
    }

    #[Route('/animals/{id}/delete', name: 'animals_delete', methods: ['POST'])]
    public function deleteAnimal(Request $request, Animal $animal, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$animal->getId(), $request->request->get('_token'))) {
            $entityManager->remove($animal);
            $entityManager->flush();
        }

        return $this->redirectToRoute('animals_index');
    }
}

<?php

namespace App\Controller;

use App\Entity\CompteRendu;
use App\Entity\Avis;
use App\Form\CompteRenduType;
use App\Form\AvisType;
use App\Repository\UserRepository;
use App\Repository\HabitatRepository;
use App\Repository\AnimalRepository;
use App\Repository\CompteRenduRepository;
use App\Repository\AvisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
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

    #[Route('/habitats', name: 'app_habitats')]
    public function habitats(): Response
    {
        return $this->render('page/habitats/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/avis', name: 'app_avis')]
    public function avis(Request $request, EntityManagerInterface $entityManager): Response
    {
        $avis = new Avis();
        $form = $this->createForm(AvisType::class, $avis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $avis->setValide(false); // L'avis est créé mais non validé
            $entityManager->persist($avis);
            $entityManager->flush();

            $this->addFlash('success', 'Votre avis a été soumis et est en attente de validation.');

            return $this->redirectToRoute('app_avis');
        }

        if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Le formulaire contient des erreurs.');
            foreach ($form->getErrors(true) as $error) {
                $this->addFlash('error', $error->getMessage());
            }
        }

        return $this->render('page/avis/avis.html.twig', [
            'form' => $form->createView(),
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
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastEmail = $authenticationUtils->getLastUsername();

        return $this->render('page/login.html.twig', [
            'last_email' => $lastEmail,
            'error' => $error,
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(AuthenticationUtils $authenticationUtils): Response
    {
        throw new \Exception('Ne sera jamais atteinte car la déconnexion est gérée par Symfony.');
    }

    #[Route('/profile', name: 'app_profile')]
    public function profile(
        UserRepository $userRepository,
        HabitatRepository $habitatRepository,
        AnimalRepository $animalRepository,
        CompteRenduRepository $compteRenduRepository,
        AvisRepository $avisRepository,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        // Récupération des utilisateurs, habitats, animaux, et comptes rendus existants
        $users = $userRepository->findAll();
        $habitats = $habitatRepository->findAll();
        $animals = $animalRepository->findAll();
        
        // Récupération des comptes rendus triés par date décroissante
        $compteRendus = $compteRenduRepository->findBy([], ['date' => 'DESC']);

        // Création d'un nouveau compte rendu
        $compteRendu = new CompteRendu();
        $form = $this->createForm(CompteRenduType::class, $compteRendu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $compteRendu->setUtilisateur($this->getUser());
            $entityManager->persist($compteRendu);
            $entityManager->flush();
            return $this->redirectToRoute('app_profile');
        }

        // Récupération des avis validés et non validés
        $avisValides = $avisRepository->findBy(['valide' => true]);
        $avisNonValides = $avisRepository->findBy(['valide' => false]);

        // Envoi des données au template Twig
        return $this->render('page/profile.html.twig', [
            'users' => $users,
            'habitats' => $habitats,
            'animals' => $animals,
            'compteRendus' => $compteRendus,
            'form' => $form->createView(),
            'avisValides' => $avisValides,
            'avisNonValides' => $avisNonValides,
        ]);
    }
}

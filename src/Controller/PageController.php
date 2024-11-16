<?php

namespace App\Controller;

use App\Entity\CompteRendu;
use App\Entity\Avis;
use App\Form\CompteRenduType;
use App\Form\AvisType;
use App\Repository\UserRepository;
use App\Repository\HabitatRepository;
use App\Repository\ServiceRepository;
use App\Repository\AnimalRepository;
use App\Repository\CompteRenduRepository;
use App\Repository\AvisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Knp\Component\Pager\PaginatorInterface;

class PageController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    // ROUTES PUBLIQUES

    #[Route('/', name: 'app_home')]
    public function index(AvisRepository $avisRepository): Response
    {
        $avisList = $avisRepository->findBy(['valide' => true], ['dateVisite' => 'DESC'], 3);

        return $this->render('page/index.html.twig', [
            'avisList' => $avisList,
        ]);
    }

    #[Route('/services', name: 'app_services')]
    public function services(ServiceRepository $serviceRepository): Response
    {
        $services = $serviceRepository->findAll();

        return $this->render('page/services/index.html.twig', [
            'services' => $services,
        ]);
    }

    #[Route('/habitats', name: 'app_habitats', methods: ['GET'])]
    public function habitatsShow(HabitatRepository $habitatRepository): Response
    {
        $habitats = $habitatRepository->findAll();

        return $this->render('page/habitats/index.html.twig', [
            'habitats' => $habitats,
        ]);
    }

    #[Route('/avis', name: 'app_avis')]
    public function avis(
        Request $request,
        AvisRepository $avisRepository,
        PaginatorInterface $paginator
    ): Response {
        $query = $avisRepository->createQueryBuilder('a')
            ->where('a.valide = :valide')
            ->setParameter('valide', true)
            ->orderBy('a.dateVisite', 'DESC')
            ->getQuery();

        $avisValides = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            6
        );

        $avis = new Avis();
        $form = $this->createForm(AvisType::class, $avis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $avis->setValide(false);
            $this->entityManager->persist($avis);
            $this->entityManager->flush();

            $this->addFlash('success', 'Votre avis a été soumis et est en attente de validation.');
            return $this->redirectToRoute('app_avis');
        }

        if ($form->isSubmitted() && !$form->isValid()) {
            $this->addFlash('error', 'Veuillez corriger les erreurs dans le formulaire.');
        }

        return $this->render('page/avis/avis.html.twig', [
            'avisValides' => $avisValides,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('page/contact.html.twig');
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
    public function logout(): void
    {
        throw new \LogicException('Cette méthode peut rester vide - elle sera interceptée par le firewall.');
    }

    // ROUTES RESTREINTES AU PERSONNEL

    #[Route('/avis/{id}/valider', name: 'app_avis_valider', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN', message: 'Seuls les administrateurs peuvent valider les avis.')]
    public function validerAvis(Request $request, Avis $avis): Response
    {
        if (!$this->isCsrfTokenValid('valider'.$avis->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_profile');
        }

        $avis->setValide(true);
        $this->entityManager->flush();
        $this->addFlash('success', 'L\'avis a été validé avec succès.');

        return $this->redirectToRoute('app_profile');
    }

    #[Route('/avis/{id}/supprimer', name: 'app_avis_supprimer', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN', message: 'Seuls les administrateurs peuvent supprimer les avis.')]
    public function supprimerAvis(Request $request, Avis $avis): Response
    {
        if (!$this->isCsrfTokenValid('supprimer'.$avis->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_profile');
        }

        $this->entityManager->remove($avis);
        $this->entityManager->flush();
        $this->addFlash('success', 'L\'avis a été supprimé avec succès.');

        return $this->redirectToRoute('app_profile');
    }

    #[Route('/profile', name: 'app_profile')]
    #[IsGranted('ROLE_USER', message: 'Accès réservé au personnel.')]
    public function profile(
        UserRepository $userRepository,
        HabitatRepository $habitatRepository,
        AnimalRepository $animalRepository,
        ServiceRepository $serviceRepository,
        CompteRenduRepository $compteRenduRepository,
        AvisRepository $avisRepository,
        Request $request,
        PaginatorInterface $paginator
    ): Response {
        $users = $userRepository->findAll();
        $habitats = $habitatRepository->findAll();
        $animals = $animalRepository->findAll();
        $services = $serviceRepository->findAll();

        $compteRendusQuery = $compteRenduRepository->createQueryBuilder('cr')
            ->orderBy('cr.date', 'DESC')
            ->getQuery();

        $compteRendus = $paginator->paginate(
            $compteRendusQuery,
            $request->query->getInt('page_cr', 1),
            5
        );

        $compteRendu = new CompteRendu();
        $formCompteRendu = $this->createForm(CompteRenduType::class, $compteRendu);
        $formCompteRendu->handleRequest($request);

        if ($formCompteRendu->isSubmitted() && $formCompteRendu->isValid()) {
            $compteRendu->setUtilisateur($this->getUser());
            $this->entityManager->persist($compteRendu);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le compte rendu a été créé avec succès.');
            return $this->redirectToRoute('app_profile');
        }

        $avisNonValidesQuery = $avisRepository->createQueryBuilder('a')
            ->where('a.valide = :valide')
            ->setParameter('valide', false)
            ->orderBy('a.dateVisite', 'DESC')
            ->getQuery();

        $avisNonValides = $paginator->paginate(
            $avisNonValidesQuery,
            $request->query->getInt('page_avis', 1),
            5
        );

        return $this->render('page/profile.html.twig', [
            'users' => $users,
            'habitats' => $habitats,
            'animals' => $animals,
            'services' => $services,
            'compteRendus' => $compteRendus,
            'formCompteRendu' => $formCompteRendu->createView(),
            'avisNonValides' => $avisNonValides,
        ]);
    }
}

<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Form\AvisType;
use App\Service\AvisService;
use App\Service\ProfileService;
use App\Repository\AvisRepository;
use App\Repository\ServiceRepository;
use App\Repository\HabitatRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Csrf\CsrfToken;
use Symfony\Component\Security\Csrf\CsrfTokenValidator;
use Symfony\Component\Security\Csrf\CsrfTokenValidatorInterface;
use Symfony\Bundle\SecurityBundle\Security;

class PageController extends AbstractController
{
    public function __construct(private AvisService $avisService) {}

    #[Route('/', name: 'app_home')]
    public function index(AvisRepository $avisRepository): Response
    {
        $avisList = $avisRepository->findBy(['valide' => true], ['dateVisite' => 'DESC'], 3);

        return $this->render('page/index.html.twig', [
            'avisList' => $avisList,
        ]);
    }
    
    #[Route('/delete-endpoint', name: 'delete_endpoint', methods: ['POST'])]
    public function delete(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $id = $data['id'] ?? null;
        $csrfToken = $data['csrf_token'] ?? null;

        if (!$this->isCsrfTokenValid('delete' . $id, $csrfToken)) {
            return new JsonResponse(['error' => 'Invalid CSRF token'], Response::HTTP_FORBIDDEN);
        }

        // Supprimez l'élément correspondant à $id...
        return new JsonResponse(['message' => 'Element deleted successfully']);
    }

    #[Route('/services', name: 'app_services')]
    public function services(ServiceRepository $serviceRepository): Response
    {
        $services = $serviceRepository->findAll();

        return $this->render('page/services/index.html.twig', [
            'services' => $services,
        ]);
    }

    #[Route('/habitats', name: 'app_habitats')]
    public function habitatsShow(HabitatRepository $habitatRepository): Response
    {
        $habitats = $habitatRepository->findAll();

        return $this->render('page/habitats/index.html.twig', [
            'habitats' => $habitats,
        ]);
    }

    #[Route('/avis', name: 'app_avis')]
    public function avis(Request $request, AvisRepository $avisRepository, PaginatorInterface $paginator): Response
    {
        $query = $avisRepository->createQueryBuilder('a')
            ->where('a.valide = :valide')
            ->setParameter('valide', true)
            ->orderBy('a.dateVisite', 'DESC')
            ->getQuery();

        $avisValides = $paginator->paginate($query, $request->query->getInt('page', 1), 6);

        $avis = new Avis();
        $form = $this->createForm(AvisType::class, $avis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->avisService->creerAvis($avis);

            $this->addFlash('success', 'Votre avis a été soumis et est en attente de validation.');
            return $this->redirectToRoute('app_avis');
        }

        return $this->render('page/avis/avis.html.twig', [
            'avisValides' => $avisValides,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/profile', name: 'app_profile')]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function profile(Request $request, ProfileService $profileService): Response
    {
    // Gère le formulaire dans le service
    $formCompteRendu = $profileService->handleCompteRenduForm($request);

    // Si le formulaire a été soumis avec succès, redirige
    if ($formCompteRendu === null) {
        return $this->redirectToRoute('app_profile');
    }

    // Récupère les données de profil
    $profileData = $profileService->getProfileData();

    // Ajoute la vue du formulaire aux données
    return $this->render('page/profile.html.twig', array_merge($profileData, [
        'formCompteRendu' => $formCompteRendu->createView(),
    ]));
    }

    #[Route('/avis/{id}/valider', name: 'app_avis_valider', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function validerAvis(Request $request, Avis $avis): Response
    {
        if (!$this->isCsrfTokenValid('valider' . $avis->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_profile');
        }

        $this->avisService->validerAvis($avis);
        $this->addFlash('success', 'L\'avis a été validé avec succès.');

        return $this->redirectToRoute('app_profile');
    }

    #[Route('/avis/{id}/supprimer', name: 'app_avis_supprimer', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function supprimerAvis(Request $request, Avis $avis): Response
    {
        if (!$this->isCsrfTokenValid('supprimer' . $avis->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('app_profile');
        }

        $this->avisService->supprimerAvis($avis);
        $this->addFlash('success', 'L\'avis a été supprimé avec succès.');

        return $this->redirectToRoute('app_profile');
    }
}

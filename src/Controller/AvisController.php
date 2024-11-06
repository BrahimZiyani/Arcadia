<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Form\AvisType;
use App\Repository\AvisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/avis')]
class AvisController extends AbstractController
{
    #[Route('/', name: 'avis_index', methods: ['GET', 'POST'])]
    public function index(Request $request, AvisRepository $avisRepository, EntityManagerInterface $entityManager): Response
    {
        // Récupère les avis validés pour affichage
        $avisValides = $avisRepository->findBy(['valide' => true]);

        // Formulaire de création d'un avis
        $avis = new Avis();
        $form = $this->createForm(AvisType::class, $avis);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $avis->setValide(false); // L'avis est créé mais non validé
            $entityManager->persist($avis);
            $entityManager->flush();

            $this->addFlash('success', 'Votre avis a été soumis et est en attente de validation.');
            return $this->redirectToRoute('avis_index');
        }

        return $this->render('page/avis/index.html.twig', [
            'avisValides' => $avisValides,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/non-valides', name: 'avis_non_valides', methods: ['GET'])]
    public function avisNonValides(AvisRepository $avisRepository): Response
    {
        // Récupération des avis non validés
        $avisNonValides = $avisRepository->findBy(['valide' => false]);

        return $this->render('page/profile.html.twig', [
            'avisNonValides' => $avisNonValides,
            // D'autres variables peuvent être ajoutées ici selon le besoin de la vue profile.html.twig
        ]);
    }

    #[Route('/{id}/valider', name: 'avis_valider', methods: ['POST'])]
    public function validerAvis(Request $request, Avis $avis, EntityManagerInterface $entityManager): Response
    {
        // Vérifie le rôle
        if (!$this->isGranted('ROLE_USER')) {
            throw $this->createAccessDeniedException("Vous n'avez pas l'autorisation pour valider les avis.");
        }

        if ($this->isCsrfTokenValid('valider' . $avis->getId(), $request->request->get('_token'))) {
            $avis->setValide(true);
            $entityManager->flush();

            $this->addFlash('success', 'L\'avis a été validé.');
        }

        return $this->redirectToRoute('app_profile');
    }
}

<?php

namespace App\Controller;

use App\Entity\CompteRendu;
use App\Form\CompteRenduType;
use App\Repository\CompteRenduRepository;
use App\Service\CompteRenduService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\SecurityBundle\Security;

#[Route('/admin/comptes-rendus')]
class CompteRenduController extends AbstractController
{
    #[Route('/', name: 'compte_rendu_index', methods: ['GET'])]
    public function index(CompteRenduRepository $compteRenduRepository): Response
    {
        return $this->render('compte_rendu/index.html.twig', [
            'compte_rendus' => $compteRenduRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'compte_rendu_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CompteRenduService $compteRenduService): Response
    {
        $compteRendu = new CompteRendu();

        // Récupération de l'utilisateur connecté
        $utilisateur = $this->getUser();
        dump($utilisateur);
        if (!$utilisateur) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour créer un compte-rendu.');
        }

        $compteRendu->setUtilisateur($utilisateur); // Association de l'utilisateur connecté

        $form = $this->createForm(CompteRenduType::class, $compteRendu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $compteRenduService->creerCompteRendu($compteRendu);

            return $this->redirectToRoute('compte_rendu_index');
        }

        return $this->render('compte_rendu/new.html.twig', [
            'compte_rendu' => $compteRendu,
            'form' => $form->createView(),
        ]);
    }


    #[Route('/{id}/edit', name: 'compte_rendu_edit', methods: ['GET', 'POST'])]
        public function edit(Request $request, CompteRendu $compteRendu, CompteRenduService $compteRenduService): Response
        {
            $form = $this->createForm(CompteRenduType::class, $compteRendu);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $compteRenduService->modifierCompteRendu();

                return $this->redirectToRoute('app_profile'); // Redirige vers le profil après modification
            }

            return $this->render('page/compte_rendu/compte_rendu_edit.html.twig', [
                'compte_rendu' => $compteRendu,
                'form' => $form->createView(),
            ]);
        }

    #[Route('/{id}', name: 'compte_rendu_delete', methods: ['POST'])]
public function delete(Request $request, ?CompteRendu $compteRendu, CompteRenduService $compteRenduService): Response
{
    // Vérifie si le CompteRendu existe
    if (!$compteRendu) {
        $this->addFlash('error', 'Le compte-rendu demandé n\'existe pas.');
        return $this->redirectToRoute('app_profile');
    }

    // Vérifie le token CSRF pour plus de sécurité
    if (!$this->isCsrfTokenValid('delete' . $compteRendu->getId(), $request->request->get('_token'))) {
        $this->addFlash('error', 'Token CSRF invalide.');
        return $this->redirectToRoute('app_profile');
    }

    try {
        // Supprime le compte-rendu via le service
        $compteRenduService->supprimerCompteRendu($compteRendu);

        // Ajoute un message de succès
        $this->addFlash('success', 'Le compte-rendu a été supprimé avec succès.');
    } catch (\Exception $e) {
        // Ajoute un message d'erreur en cas de problème
        $this->addFlash('error', 'Une erreur est survenue lors de la suppression du compte-rendu.');
    }

    // Redirige vers app_profile
    return $this->redirectToRoute('app_profile');
}

}


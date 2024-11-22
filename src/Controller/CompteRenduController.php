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

            return $this->redirectToRoute('compte_rendu_index');
        }

        return $this->render('compte_rendu/edit.html.twig', [
            'compte_rendu' => $compteRendu,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'compte_rendu_delete', methods: ['POST'])]
    public function delete(Request $request, CompteRendu $compteRendu, CompteRenduService $compteRenduService): Response
    {
        if ($this->isCsrfTokenValid('delete' . $compteRendu->getId(), $request->request->get('_token'))) {
            $compteRenduService->supprimerCompteRendu($compteRendu);
        }

        return $this->redirectToRoute('compte_rendu_index');
    }
}


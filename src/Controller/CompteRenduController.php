<?php

namespace App\Controller;

use App\Entity\CompteRendu;
use App\Form\CompteRenduType;
use App\Repository\CompteRenduRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/comptes-rendus')]
class CompteRenduController extends AbstractController
{
    #[Route('/', name: 'compte_rendu_index', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function index(CompteRenduRepository $compteRenduRepository): Response
    {
        return $this->render('compte_rendu/index.html.twig', [
            'compte_rendus' => $compteRenduRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'compte_rendu_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $compteRendu = new CompteRendu();
        $form = $this->createForm(CompteRenduType::class, $compteRendu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($compteRendu);
            $entityManager->flush();

            return $this->redirectToRoute('compte_rendu_index');
        }

        return $this->render('compte_rendu/new.html.twig', [
            'compte_rendu' => $compteRendu,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'compte_rendu_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_USER')]
    public function edit(Request $request, CompteRendu $compteRendu, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CompteRenduType::class, $compteRendu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('compte_rendu_index');
        }

        return $this->render('compte_rendu/edit.html.twig', [
            'compte_rendu' => $compteRendu,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'compte_rendu_delete', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function delete(Request $request, CompteRendu $compteRendu, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$compteRendu->getId(), $request->request->get('_token'))) {
            $entityManager->remove($compteRendu);
            $entityManager->flush();
        }

        return $this->redirectToRoute('compte_rendu_index');
    }
}

<?php

namespace App\Controller;

use App\Entity\Habitat;
use App\Form\HabitatType;
use App\Repository\HabitatRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/habitats')]
class HabitatController extends AbstractController
{
    #[Route('/', name: 'habitat_index', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function index(HabitatRepository $habitatRepository): Response
    {
        return $this->render('habitat/index.html.twig', [
            'habitats' => $habitatRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'habitat_new', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $habitat = new Habitat();
        $form = $this->createForm(HabitatType::class, $habitat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($habitat);
            $entityManager->flush();

            return $this->redirectToRoute('habitat_index');
        }

        return $this->render('habitat/new.html.twig', [
            'habitat' => $habitat,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'habitat_edit', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function edit(Request $request, Habitat $habitat, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HabitatType::class, $habitat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('habitat_index');
        }

        return $this->render('habitat/edit.html.twig', [
            'habitat' => $habitat,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'habitat_delete', methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function delete(Request $request, Habitat $habitat, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$habitat->getId(), $request->request->get('_token'))) {
            $entityManager->remove($habitat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('habitat_index');
    }
}

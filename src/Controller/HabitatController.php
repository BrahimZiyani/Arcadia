<?php

namespace App\Controller;

use App\Entity\Habitat;
use App\Form\HabitatType;
use App\Entity\Animal;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/habitat')]
class HabitatController extends AbstractController
{
    // Création d'un nouvel habitat
    #[Route('/new', name: 'habitat_new', methods: ['GET', 'POST'])]
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

        return $this->render('page/habitats/habitat_new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // Liste des habitats
    #[Route('/', name: 'habitat_index', methods: ['GET'])]
    public function index(EntityManagerInterface $entityManager): Response
    {
        $habitats = $entityManager->getRepository(Habitat::class)->findAll();

        return $this->render('page/habitats/index.html.twig', [
            'habitats' => $habitats,
        ]);
    }

    // Détails d'un habitat avec la liste des animaux
    #[Route('/{id}', name: 'habitat_show', methods: ['GET'])]
    public function show(Habitat $habitat, EntityManagerInterface $entityManager): Response
    {
        // Récupérer les animaux associés à cet habitat
        $animals = $entityManager->getRepository(Animal::class)->findBy(['habitat' => $habitat]);

        return $this->render('page/habitats/show.html.twig', [
            'habitat' => $habitat,
            'animals' => $animals,
        ]);
    }

    // Édition d'un habitat
    #[Route('/{id}/edit', name: 'habitat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Habitat $habitat, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HabitatType::class, $habitat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('habitat_index');
        }

        return $this->render('page/habitats/habitat_edit.html.twig', [
            'form' => $form->createView(),
            'habitat' => $habitat,
        ]);
    }

    // Suppression d'un habitat
    #[Route('/{id}/delete', name: 'habitat_delete', methods: ['POST'])]
    public function delete(Request $request, Habitat $habitat, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$habitat->getId(), $request->request->get('_token'))) {
            $entityManager->remove($habitat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('habitat_index');
    }
}

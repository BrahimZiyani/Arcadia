<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Entity\Habitat;
use App\Form\AnimalType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/animal')]
class AnimalController extends AbstractController
{
    #[Route('/new', name: 'animal_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $animal = new Animal();

        // Récupérer tous les habitats
        $habitats = $entityManager->getRepository(Habitat::class)->findAll();

        // On passe les habitats au formulaire
        $form = $this->createForm(AnimalType::class, $animal, [
            'habitats' => $habitats,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($animal);
            $entityManager->flush();

            return $this->redirectToRoute('app_profile');  // Redirige vers le profil après l'ajout
        }

        return $this->render('animal/new.html.twig', [
            'form' => $form->createView(),
            'habitats' => $habitats,
        ]);
    }

    #[Route('/{id}/edit', name: 'animal_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Animal $animal, EntityManagerInterface $entityManager): Response
    {
        // Récupérer tous les habitats
        $habitats = $entityManager->getRepository(Habitat::class)->findAll();

        // On passe les habitats au formulaire
        $form = $this->createForm(AnimalType::class, $animal, [
            'habitats' => $habitats,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_profile');  // Redirige vers le profil après modification
        }

        return $this->render('animal/edit.html.twig', [
            'form' => $form->createView(),
            'habitats' => $habitats,
        ]);
    }

    #[Route('/{id}/delete', name: 'animal_delete', methods: ['POST'])]
    public function delete(Request $request, Animal $animal, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$animal->getId(), $request->request->get('_token'))) {
            $entityManager->remove($animal);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_profile');  // Redirige vers le profil après suppression
    }
}

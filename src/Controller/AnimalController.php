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

        // Création du formulaire
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($animal);
            $entityManager->flush();

            return $this->redirectToRoute('app_profile');  // Redirection vers le profil après l'ajout
        }

        // Rendu du formulaire avec la liste des habitats pour le template
        $habitats = $entityManager->getRepository(Habitat::class)->findAll();

        return $this->render('page/animal/animal_new.html.twig', [
            'form' => $form->createView(),
            'habitats' => $habitats,
            'animal' => $animal, // Ajout de la variable animal pour le template
        ]);
    }

    #[Route('/{id}/edit', name: 'animal_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Animal $animal, EntityManagerInterface $entityManager): Response
    {
        // Création du formulaire
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_profile');  // Redirection vers le profil après modification
        }

        // Rendu du formulaire avec la liste des habitats pour le template
        $habitats = $entityManager->getRepository(Habitat::class)->findAll();

        return $this->render('page/animal/animal_edit.html.twig', [
            'form' => $form->createView(),
            'habitats' => $habitats,
            'animal' => $animal, // Ajout de la variable animal pour le template
        ]);
    }

    #[Route('/{id}/delete', name: 'animal_delete', methods: ['POST'])]
    public function delete(Request $request, Animal $animal, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$animal->getId(), $request->request->get('_token'))) {
            $entityManager->remove($animal);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_profile');  // Redirection vers le profil après suppression
    }
}

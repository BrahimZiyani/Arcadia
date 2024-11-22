<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Form\AnimalType;
use App\Service\AnimalService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



#[Route('/admin/animals')]
class AnimalController extends AbstractController
{
    #[Route('/new', name: 'animal_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AnimalService $animalService): Response
    {
        $animal = new Animal();
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $animalService->creerAnimal($animal);

            return $this->redirectToRoute('app_animals');
        }

        return $this->render('animal/new.html.twig', [
            'animal' => $animal,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'animal_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Animal $animal, AnimalService $animalService): Response
    {
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $animalService->modifierAnimal();

            return $this->redirectToRoute('app_animals');
        }

        return $this->render('animal/edit.html.twig', [
            'animal' => $animal,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'animal_delete', methods: ['POST'])]
    public function delete(Request $request, Animal $animal, AnimalService $animalService): Response
    {
        if ($this->isCsrfTokenValid('delete' . $animal->getId(), $request->request->get('_token'))) {
            $animalService->supprimerAnimal($animal);
        }

        return $this->redirectToRoute('app_animals');
    }
}

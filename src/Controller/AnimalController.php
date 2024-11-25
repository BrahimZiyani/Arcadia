<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Form\AnimalType;
use App\Service\AnimalService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnimalController extends AbstractController
{
    #[Route('/animal/new', name: 'animal_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, AnimalService $animalService): Response
    {
        $animal = new Animal();
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedImages = $form->get('uploadImages')->getData();
            $animalService->handleUploadedImages($uploadedImages, $animal);

            $animalService->creerAnimal($animal);

            $this->addFlash('success', 'L\'animal a été créé avec succès.');
            return $this->redirectToRoute('animal_show', ['id' => $animal->getId()]);
        }

        return $this->render('page/animal/animal_new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/animal/{id}/edit', name: 'animal_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Animal $animal, EntityManagerInterface $entityManager, AnimalService $animalService): Response
    {
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedImages = $form->get('uploadImages')->getData();
            $animalService->handleUploadedImages($uploadedImages, $animal);

            $animalService->modifierAnimal();

            $this->addFlash('success', 'L\'animal a été modifié avec succès.');
            return $this->redirectToRoute('animal_show', ['id' => $animal->getId()]);
        }

        return $this->render('page/animal/animal_edit.html.twig', [
            'form' => $form->createView(),
            'animal' => $animal,
        ]);
    }

    #[Route('/animal/{id}/delete', name: 'animal_delete', methods: ['POST'])]
    public function delete(Request $request, Animal $animal, AnimalService $animalService): Response
    {
        if (!$this->isCsrfTokenValid('delete' . $animal->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Action non autorisée.');
            return $this->redirectToRoute('animal_list');
        }

        $animalService->supprimerAnimal($animal);

        $this->addFlash('success', 'L\'animal a été supprimé avec succès.');
        return $this->redirectToRoute('animal_list');
    }

    #[Route('/animal/{id}/delete-image/{image}', name: 'animal_remove_image', methods: ['POST'])]
    public function removeImage(Request $request, Animal $animal, string $image, AnimalService $animalService): Response
    {
        if (!$this->isCsrfTokenValid('delete_image' . $animal->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Action non autorisée.');
            return $this->redirectToRoute('animal_edit', ['id' => $animal->getId()]);
        }

        $filePath = $animalService->getUploadsDirectory() . '/' . $image;
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $animal->removeImage($image);
        $animalService->modifierAnimal();

        $this->addFlash('success', 'L\'image a été supprimée avec succès.');
        return $this->redirectToRoute('animal_edit', ['id' => $animal->getId()]);
    }

    #[Route('/animals', name: 'animal_show', methods: ['GET'])]
public function show(EntityManagerInterface $entityManager): Response
{
    // Récupérer tous les animaux depuis la base de données
    $animals = $entityManager->getRepository(Animal::class)->findAll();

    // Organiser les animaux par habitat
    $animalsByHabitat = [];
    foreach ($animals as $animal) {
        // Obtenir le nom de l'habitat ou 'Sans Habitat' si aucun habitat n'est associé
        $habitatName = $animal->getHabitat() ? $animal->getHabitat()->getNom() : 'Sans Habitat';

        // Ajouter l'animal dans le tableau correspondant à l'habitat
        $animalsByHabitat[$habitatName][] = $animal;
    }

    // Rendre le template avec la variable animalsByHabitat
    return $this->render('page/animal/show.html.twig', [
        'animalsByHabitat' => $animalsByHabitat,
    ]);
}
#[Route('/animal/{id}/details', name: 'animal_details', methods: ['GET'])]
public function details(Animal $animal): Response
{
    return $this->render('page/animal/animal_details.html.twig', [
        'animal' => $animal,
    ]);
}
}

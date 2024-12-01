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

            if ($uploadedImages) {
                $animalService->handleUploadedImages($uploadedImages, $animal);
            }

            $entityManager->persist($animal);
            $entityManager->flush();

            $this->addFlash('success', 'Animal créé avec succès.');

            return $this->redirectToRoute('animal_show');
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

            if ($uploadedImages) {
                $animalService->handleUploadedImages($uploadedImages, $animal);
            }

            $entityManager->persist($animal);
            $entityManager->flush();

            $this->addFlash('success', 'Animal modifié avec succès.');

            return $this->redirectToRoute('animal_edit', ['id' => $animal->getId()]);
        }

        return $this->render('page/animal/animal_edit.html.twig', [
            'form' => $form->createView(),
            'animal' => $animal,
        ]);
    }
    #[Route('/animal/test-remove', name: 'test_remove_image', methods: ['POST'])]
        public function testRemove(): Response
        {
            return new Response('Route atteinte');
        }
    #[Route('/animal/{id}/delete-image/{image}', name: 'animal_remove_image', methods: ['POST'])]
    public function removeImage(Request $request, Animal $animal, string $image, EntityManagerInterface $entityManager): Response
    {

        // Vérification du token CSRF
        if (!$this->isCsrfTokenValid('delete_image' . $animal->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Action non autorisée.');
            return $this->redirectToRoute('animal_edit', ['id' => $animal->getId()]);
        }

        // Chemin complet du fichier sur le serveur
        $filePath = $this->getParameter('animals_uploads_directory') . '/' . $image;

        // Debug statement
        error_log('File path: ' . $filePath);

        if (file_exists($filePath)) {
            unlink($filePath); // Suppression du fichier physique
            $this->addFlash('success', 'Image supprimée avec succès.');
        } else {
            $this->addFlash('error', 'Fichier introuvable : ' . $filePath);
        }

        // Appel à la méthode removeImage de l'entité pour mettre à jour la propriété "images"
        $animal->removeImage($image);

        // Persistez les changements dans la base de données
        $entityManager->persist($animal);
        $entityManager->flush();

        // Redirection après la suppression
        return $this->redirectToRoute('animal_edit', ['id' => $animal->getId()]);
    }

    #[Route('/animal/{id}/delete', name: 'animal_delete', methods: ['POST'])]
public function delete(Request $request, Animal $animal, EntityManagerInterface $entityManager): Response
{
    if (!$this->isCsrfTokenValid('delete_animal' . $animal->getId(), $request->request->get('_token'))) {
        $this->addFlash('error', 'Action non autorisée.');
        return $this->redirectToRoute('animal_show');
    }

    try {
        // Supprimer les fichiers associés à l'animal
        foreach ($animal->getImages() as $image) {
            $filePath = $this->getParameter('animals_uploads_directory') . '/' . $image;
            if (file_exists($filePath)) {
                unlink($filePath);
            } else {
                $this->addFlash('warning', "Fichier introuvable : $filePath");
            }
        }

        // Supprimer l'animal de la base de données
        $entityManager->remove($animal);
        $entityManager->flush();

        $this->addFlash('success', 'Animal supprimé avec succès.');
    } catch (\Exception $e) {
        $this->addFlash('error', 'Erreur lors de la suppression : ' . $e->getMessage());
        return $this->redirectToRoute('animal_show');
    }

    return $this->redirectToRoute('animal_show');
}


    #[Route('/animals', name: 'animal_show', methods: ['GET'])]
public function show(EntityManagerInterface $entityManager): Response
{
    $animals = $entityManager->getRepository(Animal::class)->findAll();

    // Trier les animaux par habitat
    $animalsByHabitat = [];
    foreach ($animals as $animal) {
        $habitatName = $animal->getHabitat() ? $animal->getHabitat()->getNom() : 'Sans Habitat';
        $animalsByHabitat[$habitatName][] = $animal;
    }

    return $this->render('page/animal/show.html.twig', [
        'animalsByHabitat' => $animalsByHabitat, // Passer la variable au template
    ]);
}

    #[Route('/animal/{id}/details', name: 'animal_details', methods: ['GET'])]
    public function details(Animal $animal, EntityManagerInterface $entityManager): Response
    {
        $animal->incrementVisites();
        $entityManager->flush();
        return $this->render('page/animal/animal_details.html.twig', [
            'animal' => $animal,
        ]);
    }

    #[Route('/test-delete', name: 'test_delete', methods: ['GET', 'POST'])]
    public function testDelete(): Response
    {
        dd('Test Delete Reached');
    }

}

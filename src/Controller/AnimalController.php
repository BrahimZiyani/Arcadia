<?php

namespace App\Controller;

use App\Entity\Animal;
use App\Form\AnimalType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class AnimalController extends AbstractController
{
    #[Route('/animal/new', name: 'animal_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $animal = new Animal();
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion des fichiers uploadés
            $this->handleUploadedImages($form, $animal, $slugger);

            $entityManager->persist($animal);
            $entityManager->flush();

            $this->addFlash('success', 'L\'animal a été créé avec succès.');
            return $this->redirectToRoute('animal_show', ['id' => $animal->getId()]);
        }

        return $this->render('page/animal/animal_new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/animal/{id}/edit', name: 'animal_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Animal $animal, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(AnimalType::class, $animal);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion des nouvelles images uploadées
            $this->handleUploadedImages($form, $animal, $slugger);

            $entityManager->flush();

            $this->addFlash('success', 'L\'animal a été modifié avec succès.');
            return $this->redirectToRoute('animal_show', ['id' => $animal->getId()]);
        }

        return $this->render('page/animal/animal_edit.html.twig', [
            'form' => $form->createView(),
            'animal' => $animal,
        ]);
    }

    #[Route('/animal/{id}/delete', name: 'animal_delete', methods: ['POST'])]
    public function delete(Request $request, Animal $animal, EntityManagerInterface $entityManager): Response
    {
        // Protection CSRF
        if (!$this->isCsrfTokenValid('delete' . $animal->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Action non autorisée.');
            return $this->redirectToRoute('animal_list');
        }

        // Suppression des fichiers physiques associés
        foreach ($animal->getImages() as $image) {
            $filePath = $this->getParameter('uploads_directory') . '/' . $image;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        // Suppression de l'entité
        $entityManager->remove($animal);
        $entityManager->flush();

        $this->addFlash('success', 'L\'animal a été supprimé avec succès.');
        return $this->redirectToRoute('animal_list');
    }

    #[Route('/animal/{id}/delete-image/{image}', name: 'animal_remove_image', methods: ['POST'])]
    public function removeImage(Request $request, Animal $animal, string $image, EntityManagerInterface $entityManager): Response
    {
        // Protection CSRF
        if (!$this->isCsrfTokenValid('delete_image' . $animal->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Action non autorisée.');
            return $this->redirectToRoute('animal_edit', ['id' => $animal->getId()]);
        }

        // Suppression du fichier physique
        $filePath = $this->getParameter('uploads_directory') . '/' . $image;
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        // Suppression de l'image dans l'entité
        $animal->removeImage($image);
        $entityManager->flush();

        $this->addFlash('success', 'L\'image a été supprimée avec succès.');
        return $this->redirectToRoute('animal_edit', ['id' => $animal->getId()]);
    }

    /**
     * Gère l'upload des fichiers depuis le formulaire.
     *
     * @param \Symfony\Component\Form\FormInterface $form
     * @param \App\Entity\Animal $animal
     * @param \Symfony\Component\String\Slugger\SluggerInterface $slugger
     */
    private function handleUploadedImages($form, Animal $animal, SluggerInterface $slugger): void
    {
        $uploadedImages = $form->get('uploadImages')->getData();

        if ($uploadedImages) {
            foreach ($uploadedImages as $image) {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

                try {
                    $image->move(
                        $this->getParameter('uploads_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    throw new \RuntimeException('Erreur lors de l\'upload de l\'image : ' . $e->getMessage());
                }

                $animal->addImage($newFilename);
            }
        }
    }
    #[Route('/animals', name: 'animal_show', methods: ['GET'])]
    public function show(EntityManagerInterface $entityManager): Response
    {
        // Récupérer tous les animaux depuis la base de données
        $animals = $entityManager->getRepository(Animal::class)->findAll();

        // Organiser les animaux par habitat
        $animalsByHabitat = [];
        foreach ($animals as $animal) {
            $habitatName = $animal->getHabitat() ? $animal->getHabitat()->getNom() : 'Sans Habitat';

            // Vérifier si l'animal a des images
            if ($animal->getImages()) {
                $animalsByHabitat[$habitatName][] = $animal;
            } else {
                // Si l'animal n'a pas d'image, on lui assigne une image par défaut
                $animal->setImages(['default-image.jpg']); // Image par défaut
                $animalsByHabitat[$habitatName][] = $animal;
            }
        }

        // Rendre le template
        return $this->render('page/animal/show.html.twig', [
            'animalsByHabitat' => $animalsByHabitat,
        ]);
    }

    #[Route('/animal/{id}/details', name: 'animal_details')]
    public function details(Animal $animal): Response
    {
        return $this->render('page/animal/animal_details.html.twig', [
            'animal' => $animal,
        ]);
    }


}

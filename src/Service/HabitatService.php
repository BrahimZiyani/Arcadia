<?php

namespace App\Service;

use App\Entity\Habitat;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class HabitatService
{
    private EntityManagerInterface $entityManager;
    private SluggerInterface $slugger;
    private string $uploadsDirectory;

    public function __construct(EntityManagerInterface $entityManager, SluggerInterface $slugger, string $uploadsDirectory)
    {
        $this->entityManager = $entityManager;
        $this->slugger = $slugger;
        $this->uploadsDirectory = $uploadsDirectory;
    }

    public function handleUploadedImages(array $uploadedImages, Habitat $habitat): void
    {
        foreach ($uploadedImages as $image) {
            $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $this->slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

            try {
                $image->move($this->uploadsDirectory, $newFilename);
                $habitat->addImage($newFilename);
            } catch (FileException $e) {
                throw new \RuntimeException('Erreur lors de l\'upload : ' . $e->getMessage());
            }
        }
    }

    public function supprimerImage(Habitat $habitat, string $image): void
{
    // Supprimer l'image du disque
    $filePath = $this->uploadsDirectory . '/' . $image;
    if (file_exists($filePath)) {
        unlink($filePath);
    }

    // Supprimer l'image de l'entité Habitat
    $images = $habitat->getImages();
    $images = array_filter($images, fn($img) => $img !== $image);

    // Réindexer les clés pour éviter des problèmes dans Twig
    $images = array_values($images);

    // Mettre à jour les images de l'habitat
    $habitat->setImages($images);

    // Sauvegarder les changements
    $this->entityManager->flush();
}



    public function creerHabitat(Habitat $habitat): void
    {
        $this->entityManager->persist($habitat);
        $this->entityManager->flush();
    }

    public function modifierHabitat(Habitat $habitat): void
    {
        $this->entityManager->flush();
    }

    public function supprimerHabitat(Habitat $habitat): void
    {
        foreach ($habitat->getImages() as $image) {
            $filePath = $this->uploadsDirectory . '/' . $image;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $this->entityManager->remove($habitat);
        $this->entityManager->flush();
    }
}

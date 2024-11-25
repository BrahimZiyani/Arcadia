<?php

namespace App\Service;

use App\Entity\Animal;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class AnimalService
{
    private EntityManagerInterface $entityManager;
    private string $uploadsDirectory;
    private SluggerInterface $slugger;

    public function __construct(EntityManagerInterface $entityManager, string $uploadsDirectory, SluggerInterface $slugger)
    {
        $this->entityManager = $entityManager;
        $this->uploadsDirectory = $uploadsDirectory;
        $this->slugger = $slugger;
    }

    public function creerAnimal(Animal $animal): void
    {
        $this->entityManager->persist($animal);
        $this->entityManager->flush();
    }

    public function modifierAnimal(): void
    {
        $this->entityManager->flush();
    }

    public function supprimerAnimal(Animal $animal): void
    {
        foreach ($animal->getImages() as $image) {
            $filePath = $this->uploadsDirectory . '/' . $image;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }
        $this->entityManager->remove($animal);
        $this->entityManager->flush();
    }

    public function handleUploadedImages(array $uploadedImages, Animal $animal): void
    {
        // Assurez-vous que le répertoire d'upload existe
        if (!is_dir($this->uploadsDirectory)) {
            mkdir($this->uploadsDirectory, 0777, true);
        }

        // Supprimez les anciennes images
        foreach ($animal->getImages() as $image) {
            $filePath = $this->uploadsDirectory . '/' . $image;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $animal->setImages([]); // Réinitialisez les images

        foreach ($uploadedImages as $image) {
            $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $this->slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

            try {
                $image->move($this->uploadsDirectory, $newFilename);
            } catch (FileException $e) {
                throw new \RuntimeException('Erreur lors de l\'upload de l\'image : ' . $e->getMessage());
            }

            $animal->addImage($newFilename);
        }
    }

    public function getUploadsDirectory(): string
    {
        return $this->uploadsDirectory;
    }
}

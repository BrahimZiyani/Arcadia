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
        $this->uploadsDirectory = rtrim($uploadsDirectory, '/'); // Retire un slash éventuel à la fin
        $this->slugger = $slugger;

        // Créez le répertoire si nécessaire
        if (!is_dir($this->uploadsDirectory)) {
            mkdir($this->uploadsDirectory, 0777, true);
        }
    }

    public function creerAnimal(Animal $animal): void
    {
        $this->entityManager->persist($animal);
        $this->entityManager->flush();
    }

    public function modifierAnimal(Animal $animal): void
    {
        $this->entityManager->persist($animal);
        $this->entityManager->flush();
    }

    public function supprimerImage(Animal $animal, string $image): void
    {
    // Supprimer l'image du disque
    $filePath = $this->uploadsDirectory . '/' . $image;
    if (file_exists($filePath)) {
        unlink($filePath);
    }

    // Supprimer l'image du tableau d'images de l'entité
    $animal->removeImage($image);

    // Réindexer les clés des images
    $images = array_values($animal->getImages());
    $animal->setImages($images);

    // Sauvegarder les changements dans la base de données
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
        // Vérifie à nouveau que le répertoire existe
        if (!is_dir($this->uploadsDirectory)) {
            mkdir($this->uploadsDirectory, 0777, true);
        }

        foreach ($uploadedImages as $image) {
            if (!$image instanceof UploadedFile) {
                throw new \RuntimeException('Un fichier valide est attendu.');
            }

            // Générez un nom de fichier unique
            $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $this->slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

            try {
                // Déplacez le fichier dans le répertoire d'uploads
                $image->move($this->uploadsDirectory, $newFilename);

                // Ajoutez le fichier à l'animal
                $animal->addImage($newFilename);
            } catch (FileException $e) {
                // Loggez une erreur ou affichez un message plus clair
                throw new \RuntimeException(sprintf('Erreur lors de l\'upload de l\'image "%s": %s', $newFilename, $e->getMessage()));
            }
        }
    }

    public function getUploadsDirectory(): string
    {
        return $this->uploadsDirectory;
    }
}

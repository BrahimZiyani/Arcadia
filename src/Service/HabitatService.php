<?php

namespace App\Service;

use App\Entity\Habitat;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

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
                $image->move(
                    $this->uploadsDirectory,
                    $newFilename
                );
                $habitat->addImage($newFilename);
            } catch (FileException $e) {
                throw new \RuntimeException('Erreur lors de l\'upload de l\'image : ' . $e->getMessage());
            }
        }
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
        $this->entityManager->remove($habitat);
        $this->entityManager->flush();
    }
}

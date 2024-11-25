<?php

namespace App\Service;

use App\Entity\Service;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class ServiceManager
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

    public function handleUploadedImages(array $uploadedImages, Service $service): void
    {
        // Ensure the directory exists
        if (!is_dir($this->uploadsDirectory)) {
            mkdir($this->uploadsDirectory, 0777, true);
        }

        // Remove existing images if any
        $this->removeImages($service->getImages());

        foreach ($uploadedImages as $image) {
            $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $this->slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

            try {
                $image->move(
                    $this->uploadsDirectory, // Upload directory path
                    $newFilename
                );

                $service->addImage($newFilename);
                // Debug statement
                error_log('Image uploaded: ' . $newFilename);
            } catch (FileException $e) {
                throw new \RuntimeException('Erreur lors du téléchargement de l\'image : ' . $e->getMessage());
            }
        }
    }

    public function removeImages(array $images): void
    {
        foreach ($images as $image) {
            $filePath = $this->uploadsDirectory . '/' . $image;
            if (file_exists($filePath)) {
                unlink($filePath);
                // Debug statement
                error_log('Image removed: ' . $filePath);
            }
        }
    }

    public function saveService(Service $service): void
    {
        $this->entityManager->persist($service);
        $this->entityManager->flush();
    }

    public function removeService(Service $service): void
    {
        $this->removeImages($service->getImages());
        $this->entityManager->remove($service);
        $this->entityManager->flush();
    }
}

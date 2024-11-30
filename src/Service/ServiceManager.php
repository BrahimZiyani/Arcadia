<?php

namespace App\Service;

use App\Entity\Service;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class ServiceManager
{
    private EntityManagerInterface $entityManager;
    private string $uploadsDirectory;
    private SluggerInterface $slugger;

    public function __construct(EntityManagerInterface $entityManager, string $uploadsDirectory, SluggerInterface $slugger)
    {
        $this->entityManager = $entityManager;
        $this->uploadsDirectory = rtrim($uploadsDirectory, '/');
        $this->slugger = $slugger;

        if (!is_dir($this->uploadsDirectory)) {
            mkdir($this->uploadsDirectory, 0777, true);
        }
    }

    public function handleUploadedImages(array $uploadedImages, Service $service): void
    {
        foreach ($uploadedImages as $image) {
            if (!$image instanceof UploadedFile) {
                throw new \RuntimeException('Un fichier valide est attendu.');
            }

            $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
            $safeFilename = $this->slugger->slug($originalFilename);
            $newFilename = $safeFilename . '-' . uniqid() . '.' . $image->guessExtension();

            try {
                $image->move($this->uploadsDirectory, $newFilename);
                $service->addImage($newFilename);
            } catch (FileException $e) {
                throw new \RuntimeException(sprintf('Erreur lors de l\'upload de l\'image "%s": %s', $newFilename, $e->getMessage()));
            }
        }
    }

    public function supprimerImage(Service $service, string $image): void
{
    // Suppression du fichier sur le disque
    $filePath = $this->uploadsDirectory . '/' . $image;
    if (file_exists($filePath)) {
        unlink($filePath);
    }

    // Suppression de l'image dans l'entité Service
    $service->removeImage();

    // Sauvegarde des changements
    $this->entityManager->flush();
}



    public function saveService(Service $service): void
    {
        $this->entityManager->persist($service);
        $this->entityManager->flush();
    }

    public function removeService(Service $service): void
    {
        foreach ($service->getImages() as $image) {
            $filePath = $this->uploadsDirectory . '/' . $image;
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }

        $this->entityManager->remove($service);
        $this->entityManager->flush();
    }
}

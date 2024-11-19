<?php

namespace App\Service;

use App\Entity\Animal;
use Doctrine\ORM\EntityManagerInterface;

class AnimalService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function creerAnimal(Animal $animal): void
    {
        $this->entityManager->persist($animal);
        $this->entityManager->flush();
    }

    public function modifierAnimal(): void
    {
        // Symfony et Doctrine détectent automatiquement les modifications sur l'objet
        $this->entityManager->flush();
    }

    public function supprimerAnimal(Animal $animal): void
    {
        $this->entityManager->remove($animal);
        $this->entityManager->flush();
    }
}

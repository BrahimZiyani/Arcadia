<?php

namespace App\Service;

use App\Entity\Habitat;
use Doctrine\ORM\EntityManagerInterface;

class HabitatService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function creerHabitat(Habitat $habitat): void
    {
        $this->entityManager->persist($habitat);
        $this->entityManager->flush();
    }

    public function modifierHabitat(): void
    {
        // Doctrine gère les modifications automatiquement
        $this->entityManager->flush();
    }

    public function supprimerHabitat(Habitat $habitat): void
    {
        $this->entityManager->remove($habitat);
        $this->entityManager->flush();
    }
}

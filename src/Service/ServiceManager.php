<?php

namespace App\Service;

use App\Entity\Service as ServiceEntity;
use Doctrine\ORM\EntityManagerInterface;

class ServiceManager
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function creerService(ServiceEntity $service): void
    {
        $this->entityManager->persist($service);
        $this->entityManager->flush();
    }

    public function modifierService(): void
    {
        $this->entityManager->flush();
    }

    public function supprimerService(ServiceEntity $service): void
    {
        $this->entityManager->remove($service);
        $this->entityManager->flush();
    }
}

<?php

namespace App\Service;

use App\Entity\CompteRendu;
use Doctrine\ORM\EntityManagerInterface;

class CompteRenduService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function creerCompteRendu(CompteRendu $compteRendu): void
    {
        $this->entityManager->persist($compteRendu);
        $this->entityManager->flush();
    }

    public function modifierCompteRendu(): void
    {
        // La gestion de Doctrine garantit que l'objet modifié est synchronisé avec la base
        $this->entityManager->flush();
    }

    public function supprimerCompteRendu(CompteRendu $compteRendu): void
    {
        $this->entityManager->remove($compteRendu);
        $this->entityManager->flush();
    }
}

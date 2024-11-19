<?php

namespace App\Service;

use App\Entity\Avis;
use Doctrine\ORM\EntityManagerInterface;

class AvisService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function creerAvis(Avis $avis): void
    {
        $avis->setValide(false);
        $this->entityManager->persist($avis);
        $this->entityManager->flush();
    }

    public function validerAvis(Avis $avis): void
    {
        $avis->setValide(true);
        $this->entityManager->flush();
    }

    public function supprimerAvis(Avis $avis): void
    {
        $this->entityManager->remove($avis);
        $this->entityManager->flush();
    }
}

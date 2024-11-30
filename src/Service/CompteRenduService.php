<?php

namespace App\Service;

use App\Entity\CompteRendu;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\SecurityBundle\Security;

class CompteRenduService
{
    private EntityManagerInterface $entityManager;
    private Security $security;

    public function __construct(EntityManagerInterface $entityManager, Security $security)
    {
        $this->entityManager = $entityManager;
        $this->security = $security;
    }

    /**
     * Crée un compte rendu et l'associe à l'utilisateur connecté.
     */
    public function creerCompteRendu(CompteRendu $compteRendu): void
    {
        // Récupérer l'utilisateur connecté
        $utilisateur = $this->security->getUser();
        if (!$utilisateur) {
            throw new \LogicException('Utilisateur non connecté.');
        }

        // Associer l'utilisateur au CompteRendu
        $compteRendu->setUtilisateur($utilisateur);
        dump($utilisateur);
        // Sauvegarder le CompteRendu
        $this->entityManager->persist($compteRendu);
        $this->entityManager->flush();
    }

    /**
     * Modifier un compte rendu existant (Doctrine gère les modifications automatiquement).
     */
    public function modifierCompteRendu(): void
    {
        // Sauvegarde automatique des modifications sur l'entité
        $this->entityManager->flush();
    }

    /**
     * Supprime un compte rendu.
     */
    public function supprimerCompteRendu(CompteRendu $compteRendu): void
    {
        $this->entityManager->remove($compteRendu);
        $this->entityManager->flush();
    }
}
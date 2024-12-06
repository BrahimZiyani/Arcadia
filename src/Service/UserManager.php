<?php

namespace App\Service;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserManager
{
    private EntityManagerInterface $entityManager;
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ) {
        $this->entityManager = $entityManager;
        $this->passwordHasher = $passwordHasher;
    }

    public function creerUser(User $user): void
    {
        // Vérifie si le mot de passe doit être haché (nouvel utilisateur ou modification)
        if ($user->getPassword()) {
            $hashedPassword = $this->passwordHasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);
        }

        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }

    public function modifierUser(User $user): void
    {
        // Hache le mot de passe uniquement si nécessaire
        if ($user->getPassword()) {
            $hashedPassword = $this->passwordHasher->hashPassword($user, $user->getPassword());
            $user->setPassword($hashedPassword);
        }

        $this->entityManager->flush();
    }

    public function supprimerUser(User $user): void
    {
        dump('Suppression en cours', $user);
        $this->entityManager->remove($user);
        $this->entityManager->flush();
        dump('Suppression terminée');
    }
    


}

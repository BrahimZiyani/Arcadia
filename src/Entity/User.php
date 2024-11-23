<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Représente un utilisateur du système.
 * Cette entité est utilisée pour la gestion des utilisateurs et l'authentification.
 */
#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: 'users')]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    // Identifiant unique pour chaque utilisateur
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Email de l'utilisateur (doit être unique)
    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    // Nom de l'utilisateur
    #[ORM\Column(length: 100)]
    private ?string $nom = null;

    // Prénom de l'utilisateur
    #[ORM\Column(length: 100)]
    private ?string $prenom = null;

    // Rôles de l'utilisateur (stockés en JSON)
    #[ORM\Column(type: "json")]
    private array $roles = [];

    // Mot de passe de l'utilisateur (haché)
    #[ORM\Column]
    private ?string $password = null;

    /**
     * Getter pour l'ID unique de l'utilisateur.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Getter pour l'email de l'utilisateur.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Setter pour l'email de l'utilisateur.
     * 
     * @param string $email L'email à définir.
     * @return self
     */
    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Getter pour le nom de l'utilisateur.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Setter pour le nom de l'utilisateur.
     * 
     * @param string $nom Le nom à définir.
     * @return self
     */
    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Getter pour le prénom de l'utilisateur.
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * Setter pour le prénom de l'utilisateur.
     * 
     * @param string $prenom Le prénom à définir.
     * @return self
     */
    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Retourne l'identifiant unique pour l'utilisateur (email).
     * Cette méthode est utilisée par le système de sécurité.
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * Retourne les rôles de l'utilisateur.
     * Symfony attend toujours au moins le rôle "ROLE_USER".
     */
    public function getRoles(): array
    {
        return array_unique($this->roles);
    }

    /**
     * Définit les rôles de l'utilisateur.
     * 
     * @param array $roles Les rôles à attribuer.
     * @return self
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;
        return $this;
    }

    /**
     * Getter pour le mot de passe de l'utilisateur.
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Setter pour le mot de passe de l'utilisateur.
     * 
     * @param string $password Le mot de passe haché.
     * @return self
     */
    public function setPassword(string $password): static
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Supprime les données sensibles non persistées.
     * Cette méthode est utilisée par Symfony pour effacer des données temporaires.
     */
    public function eraseCredentials(): void
    {
        // Si vous avez des données sensibles temporaires, nettoyez-les ici.
    }
}

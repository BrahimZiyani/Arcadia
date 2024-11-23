<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CompteRenduRepository;

#[ORM\Entity(repositoryClass: CompteRenduRepository::class)]
class CompteRendu
{
    // Identifiant unique pour chaque compte-rendu
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Date du compte-rendu
    #[ORM\Column(type: "date")]
    private ?\DateTimeInterface $date = null;

    // État (texte décrivant un statut ou une observation)
    #[ORM\Column(type: "text")]
    private ?string $etat = null;

    /**
     * Relation ManyToOne avec l'entité Animal.
     * Chaque compte-rendu est associé à un seul Animal.
     * 
     * - fetch="LAZY" : L'animal sera chargé uniquement si on accède à getAnimal().
     * - nullable=false : Cette relation est obligatoire.
     */
    #[ORM\ManyToOne(targetEntity: Animal::class, fetch: 'LAZY')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Animal $animal = null;

    /**
     * Relation ManyToOne avec l'entité User.
     * Chaque compte-rendu est associé à un seul utilisateur (rédacteur).
     * 
     * - fetch="LAZY" : L'utilisateur sera chargé uniquement si on accède à getUtilisateur().
     * - nullable=false : Cette relation est obligatoire.
     */
    #[ORM\ManyToOne(targetEntity: User::class, fetch: 'LAZY')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $utilisateur = null;

    // Détails supplémentaires sur le compte-rendu (facultatif)
    #[ORM\Column(type: "text", nullable: true)]
    private ?string $details = null;

    // Getter pour l'ID
    public function getId(): ?int
    {
        return $this->id;
    }

    // Getter et setter pour la date
    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    // Getter et setter pour l'état
    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }

    // Getter et setter pour l'animal
    public function getAnimal(): ?Animal
    {
        return $this->animal;
    }

    public function setAnimal(?Animal $animal): self
    {
        $this->animal = $animal;

        return $this;
    }

    // Getter et setter pour l'utilisateur
    public function getUtilisateur(): ?User
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?User $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    // Getter et setter pour les détails
    public function getDetails(): ?string
    {
        return $this->details;
    }

    public function setDetails(?string $details): self
    {
        $this->details = $details;

        return $this;
    }
}

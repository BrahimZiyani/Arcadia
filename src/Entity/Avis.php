<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AvisRepository;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    // Identifiant unique pour chaque Avis
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    // Prénom de la personne ayant laissé l'avis
    #[ORM\Column(type: 'string', length: 255)]
    private ?string $prenom = null;

    // Date de visite associée à l'avis
    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $dateVisite = null;

    // Contenu ou texte de l'avis
    #[ORM\Column(type: 'text')]
    private ?string $contenu = null;

    // Statut de validation de l'avis (true = validé, false = en attente)
    #[ORM\Column(type: 'boolean')]
    private bool $valide = false;

    // Getter pour l'ID
    public function getId(): ?int
    {
        return $this->id;
    }

    // Getter et setter pour le prénom
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    // Getter et setter pour la date de visite
    public function getDateVisite(): ?\DateTimeInterface
    {
        return $this->dateVisite;
    }

    public function setDateVisite(\DateTimeInterface $dateVisite): self
    {
        $this->dateVisite = $dateVisite;
        return $this;
    }

    // Getter et setter pour le contenu de l'avis
    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): self
    {
        $this->contenu = $contenu;
        return $this;
    }

    // Getter et setter pour le statut de validation
    public function isValide(): bool
    {
        return $this->valide;
    }

    public function setValide(bool $valide): self
    {
        $this->valide = $valide;
        return $this;
    }
}

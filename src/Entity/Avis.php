<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AvisRepository;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $dateVisite = null;

    #[ORM\Column(type: 'text')]
    private ?string $contenu = null;

    #[ORM\Column(type: 'boolean')]
    private bool $valide = false;

    // Getters et setters pour les propriétés
    public function getId(): ?int { return $this->id; }
    public function getPrenom(): ?string { return $this->prenom; }
    public function setPrenom(string $prenom): self { $this->prenom = $prenom; return $this; }
    public function getDateVisite(): ?\DateTimeInterface { return $this->dateVisite; }
    public function setDateVisite(\DateTimeInterface $dateVisite): self { $this->dateVisite = $dateVisite; return $this; }
    public function getContenu(): ?string { return $this->contenu; }
    public function setContenu(string $contenu): self { $this->contenu = $contenu; return $this; }
    public function isValide(): bool { return $this->valide; }
    public function setValide(bool $valide): self { $this->valide = $valide; return $this; }
}

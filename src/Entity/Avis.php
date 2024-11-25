<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AvisRepository;
use DateTimeInterface;

#[ORM\Entity(repositoryClass: AvisRepository::class)]
class Avis
{
    // Unique identifier for each Avis
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    // First name of the person who left the review
    #[ORM\Column(type: 'string', length: 255)]
    private ?string $prenom = null;

    // Visit date associated with the review
    #[ORM\Column(type: 'date')]
    private ?\DateTimeInterface $dateVisite = null;

    // Content or text of the review
    #[ORM\Column(type: 'text')]
    private ?string $contenu = null;

    // Validation status of the review (true = validated, false = pending)
    #[ORM\Column(type: 'boolean')]
    private bool $valide = false;

    // Getter for the ID
    public function getId(): ?int
    {
        return $this->id;
    }

    // Getter and setter for the first name
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;
        return $this;
    }

    // Getter and setter for the visit date
    public function getDateVisite(): ?\DateTimeInterface
    {
        return $this->dateVisite;
    }

    public function setDateVisite(?\DateTimeInterface $dateVisite): self
    {
        $this->dateVisite = $dateVisite;
        return $this;
    }

    // Getter and setter for the content of the review
    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(?string $contenu): self
    {
        $this->contenu = $contenu;
        return $this;
    }

    // Getter and setter for the validation status
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

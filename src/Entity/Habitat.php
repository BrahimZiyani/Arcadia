<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Représente un habitat dans le système.
 * Chaque habitat peut contenir des informations telles que le nom, la description et des images associées.
 */
#[ORM\Entity]
class Habitat
{
    // Identifiant unique pour chaque habitat
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Nom de l'habitat
    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    // Description détaillée de l'habitat
    #[ORM\Column(type: "text")]
    private ?string $description = null;

    // Liste d'images associées à l'habitat, stockées en JSON
    #[ORM\Column(type: "json")]
    private array $images = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getImages(): array
    {
        return $this->images;
    }

    public function setImages(array $images): self
    {
        $this->images = $images;
        return $this;
    }

    public function addImage(string $image): self
    {
        $this->images[] = $image;
        return $this;
    }

    public function removeImage(string $image): self
    {
        $this->images = array_filter($this->images, fn($img) => $img !== $image);
        return $this;
    }
}

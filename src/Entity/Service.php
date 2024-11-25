<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ServiceRepository;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: "text")]
    private ?string $description = null;

    #[ORM\Column(type: "json")]
    private array $images = []; // Initialize to avoid null errors

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
        if (count($images) > 1) {
            throw new \InvalidArgumentException('Only one image is allowed.');
        }
        $this->images = $images;
        return $this;
    }

    public function addImage(string $image): self
    {
        if (count($this->images) >= 1) {
            throw new \InvalidArgumentException('Only one image is allowed.');
        }
        $this->images = [$image];
        return $this;
    }

    public function removeImage(): self
    {
        $this->images = [];
        return $this;
    }
}

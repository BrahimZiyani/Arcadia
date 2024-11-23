<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\AnimalRepository;

#[ORM\Entity(repositoryClass: AnimalRepository::class)]
class Animal
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $race = null;

    // Liste d'images associées à l'animal, stockées en JSON
    #[ORM\Column(type: "json", nullable: true)]
    private array $images = [];

    #[ORM\ManyToOne(targetEntity: Habitat::class, fetch: 'LAZY')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Habitat $habitat = null;

    #[ORM\Column(type: "text")]
    private ?string $etatDeSante = null;

    #[ORM\Column(type: "text")]
    private ?string $alimentation = null;

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

    public function getRace(): ?string
    {
        return $this->race;
    }

    public function setRace(string $race): self
    {
        $this->race = $race;

        return $this;
    }

    public function getImages(): array
    {
        return $this->images;
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

    public function setImages(array $images): self
    {
        $this->images = $images;

        return $this;
    }

    public function getHabitat(): ?Habitat
    {
        return $this->habitat;
    }

    public function setHabitat(?Habitat $habitat): self
    {
        $this->habitat = $habitat;

        return $this;
    }

    public function getEtatDeSante(): ?string
    {
        return $this->etatDeSante;
    }

    public function setEtatDeSante(string $etatDeSante): self
    {
        $this->etatDeSante = $etatDeSante;

        return $this;
    }

    public function getAlimentation(): ?string
    {
        return $this->alimentation;
    }

    public function setAlimentation(string $alimentation): self
    {
        $this->alimentation = $alimentation;

        return $this;
    }
}

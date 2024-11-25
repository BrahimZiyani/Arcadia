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

    // Liste d'images associées à l'animal, toujours un tableau
    #[ORM\Column(type: "json", nullable: false)]
    private array $images = []; // Initialisation par défaut

    #[ORM\ManyToOne(targetEntity: Habitat::class, fetch: 'LAZY')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Habitat $habitat = null;

    #[ORM\Column(type: "text")]
    private ?string $etatDeSante = null;

    #[ORM\Column(type: "text")]
    private ?string $alimentation = null;

    public function __construct()
    {
        $this->images = []; // Toujours initialisé à un tableau vide
    }

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
        if (count($this->images) >= 1) {
            throw new \InvalidArgumentException('Only one image is allowed.');
        }
        $this->images[] = $image;
        return $this;
    }

    public function setImages(array $images): self
    {
        if (count($images) > 1) {
            throw new \InvalidArgumentException('Only one image is allowed.');
        }
        $this->images = $images;
        return $this;
    }

    public function removeImage(): self
    {
        $this->images = [];
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

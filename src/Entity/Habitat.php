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

    /**
     * Getter pour l'ID.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Getter pour le nom de l'habitat.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Setter pour le nom de l'habitat.
     * 
     * @param string $nom Le nom de l'habitat à définir.
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Getter pour la description de l'habitat.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Setter pour la description de l'habitat.
     * 
     * @param string $description La description à définir.
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Getter pour les images associées à l'habitat.
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * Setter pour les images associées à l'habitat.
     * 
     * @param array $images Les images à associer à l'habitat.
     * @return self
     */
    public function setImages(array $images): self
    {
        $this->images = $images;

        return $this;
    }
}

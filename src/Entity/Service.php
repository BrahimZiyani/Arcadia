<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Représente un service proposé dans le système.
 * Chaque service peut contenir un nom, une description et une photo optionnelle.
 */
#[ORM\Entity]
class Service
{
    // Identifiant unique pour chaque service
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    // Nom du service
    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    // Description détaillée du service
    #[ORM\Column(type: "text")]
    private ?string $description = null;

    // Photo associée au service (facultative)
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo = null;

    /**
     * Getter pour l'identifiant unique.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Getter pour le nom du service.
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * Setter pour le nom du service.
     * 
     * @param string $nom Le nom du service à définir.
     * @return self
     */
    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Getter pour la description du service.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Setter pour la description du service.
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
     * Getter pour la photo associée au service.
     */
    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    /**
     * Setter pour la photo associée au service.
     * 
     * @param string|null $photo Le chemin de la photo (facultatif) à définir.
     * @return self
     */
    public function setPhoto(?string $photo): self
    {
        $this->photo = $photo;

        return $this;
    }
}

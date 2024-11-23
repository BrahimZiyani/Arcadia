<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\ScheduleRepository;

/**
 * Représente un événement programmé dans le système.
 * Cette entité peut être utilisée pour gérer les événements liés à un calendrier ou une planification.
 */
#[ORM\Entity(repositoryClass: ScheduleRepository::class)]
class Schedule
{
    // Identifiant unique pour chaque événement
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    // Nom ou titre de l'événement
    #[ORM\Column(length: 255)]
    private ?string $event = null;

    // Date et heure de l'événement
    #[ORM\Column(type: 'datetime')]
    private ?\DateTimeInterface $date = null;

    // Description facultative de l'événement
    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    /**
     * Getter pour l'identifiant unique.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Getter pour le titre ou nom de l'événement.
     */
    public function getEvent(): ?string
    {
        return $this->event;
    }

    /**
     * Setter pour le titre ou nom de l'événement.
     * 
     * @param string $event Le nom de l'événement à définir.
     * @return self
     */
    public function setEvent(string $event): self
    {
        $this->event = $event;
        return $this;
    }

    /**
     * Getter pour la date de l'événement.
     */
    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    /**
     * Setter pour la date de l'événement.
     * 
     * @param \DateTimeInterface $date La date de l'événement à définir.
     * @return self
     */
    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Getter pour la description de l'événement.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Setter pour la description de l'événement.
     * 
     * @param string|null $description La description facultative à définir.
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;
        return $this;
    }
}

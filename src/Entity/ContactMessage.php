<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cette classe représente un message de contact soumis par un utilisateur via un formulaire.
 * Elle est utilisée pour valider les données avant leur traitement.
 */
class ContactMessage
{
    /**
     * L'adresse email de l'utilisateur.
     * 
     * - `@Assert\NotBlank` : Vérifie que l'email est renseigné.
     * - `@Assert\Email` : Valide que la valeur fournie est un email valide.
     */
    #[Assert\NotBlank(message: "L'email est obligatoire.")]
    #[Assert\Email(message: "Veuillez fournir un email valide.")]
    private ?string $email = null;

    /**
     * Le contenu du message soumis par l'utilisateur.
     * 
     * - `@Assert\NotBlank` : Vérifie que le champ n'est pas vide.
     * - `@Assert\Length` : Vérifie que le message contient au moins 10 caractères.
     */
    #[Assert\NotBlank(message: "Le message est obligatoire.")]
    #[Assert\Length(min: 10, minMessage: "Le message doit contenir au moins 10 caractères.")]
    private ?string $message = null;

    /**
     * Getter pour l'email.
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Setter pour l'email.
     * 
     * @param string|null $email L'email à définir.
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Getter pour le message.
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Setter pour le message.
     * 
     * @param string|null $message Le message à définir.
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }
}

?>

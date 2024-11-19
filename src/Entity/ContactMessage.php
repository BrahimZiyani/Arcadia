<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class ContactMessage
{
    #[Assert\NotBlank(message: "L'email est obligatoire.")]
    #[Assert\Email(message: "Veuillez fournir un email valide.")]
    private ?string $email = null;

    #[Assert\NotBlank(message: "Le message est obligatoire.")]
    #[Assert\Length(min: 10, minMessage: "Le message doit contenir au moins 10 caractères.")]
    private ?string $message = null;

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;
        return $this;
    }
}

?>

<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactService
{
    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function envoyerEmail(string $nom, string $email, string $message, string $destinataire): void
    {
        $emailMessage = (new Email())
            ->from($email)
            ->to($destinataire)
            ->subject('Nouveau message de contact')
            ->text(
                "Vous avez reçu un message de contact :\n\n" .
                "Nom : $nom\n" .
                "Email : $email\n" .
                "Message :\n$message"
            );

        $this->mailer->send($emailMessage);
    }
}

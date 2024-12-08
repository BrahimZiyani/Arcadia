<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(MailerInterface $mailer): Response
    {
        try {
            // Création de l'e-mail statique
            $email = (new Email())
                ->from('brahimziyani@gmail.com') // Adresse validée dans SendGrid
                ->to('arcadia.zooapp@gmail.com') // Adresse de réception
                ->subject('Test d\'envoi statique depuis le contrôleur')
                ->html('<p>Ceci est un test d\'envoi d\'e-mail statique depuis le contrôleur Symfony.</p>');

            // Envoi de l'email
            $mailer->send($email);

            // Log de confirmation
            error_log('Email statique envoyé avec succès.');

            // Affichage d’un message de confirmation à l’utilisateur
            $this->addFlash('success', 'L\'email statique a été envoyé avec succès.');
        } catch (TransportExceptionInterface $e) {
            // Gestion des erreurs d'envoi
            $this->addFlash('error', 'Erreur lors de l\'envoi de l\'email statique.');
            error_log('Erreur d\'envoi d\'e-mail statique : ' . $e->getMessage());
        }

        // Rendu d'une page simple (ou formulaire si vous souhaitez tester)
        return $this->render('page/contact/index.html.twig', [
            'form' => null,
        ]);
    }
}

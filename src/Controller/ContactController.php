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
            // Création d'un email statique
            $email = (new Email())
                ->from('brahimziyani@gmail.com') // Adresse validée dans SendGrid
                ->to('arcadia.zooapp@gmail.com') // Adresse de réception
                ->subject('Test direct depuis le contrôleur')
                ->html('<p>Ceci est un test d\'envoi direct depuis le contrôleur.</p>');

            // Envoi de l'email
            $mailer->send($email);

            // Notification pour succès
            $this->addFlash('success', 'Email statique envoyé avec succès.');
        } catch (TransportExceptionInterface $e) {
            // Gestion des erreurs
            $this->addFlash('error', 'Erreur lors de l\'envoi de l\'email statique.');
            error_log('Erreur d\'envoi statique : ' . $e->getMessage());
        }

        // Rendu de la vue
        return $this->render('page/contact/index.html.twig', [
            'form' => null, // Pas de formulaire dans ce cas
        ]);
    }
}

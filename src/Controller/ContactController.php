<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        try {
            // Création d'un email statique pour vérifier l'envoi
            $email = (new Email())
                ->from('brahimziyani@gmail.com') // Adresse validée dans SendGrid
                ->to('arcadia.zooapp@gmail.com') // Adresse de réception
                ->subject('Test statique depuis Symfony')
                ->html('<p>Ceci est un test de débogage depuis le contrôleur Symfony.</p>');

            // Ajout d'un log pour vérifier le contenu
            error_log('Contenu de l\'email : ' . $email->getHtmlBody());

            // Envoi de l'email
            $mailer->send($email);

            // Ajout de logs supplémentaires pour confirmer l'envoi
            error_log('Email envoyé avec succès à SendGrid.');

            // Notification pour l'utilisateur
            $this->addFlash('success', 'Votre message a été envoyé avec succès.');
        } catch (TransportExceptionInterface $e) {
            // Gestion des erreurs d'envoi
            error_log('Erreur lors de l\'envoi de l\'email : ' . $e->getMessage());
            $this->addFlash('error', 'Une erreur est survenue lors de l\'envoi de votre message.');
        }

        // Affichage du formulaire de contact (test statique, donc pas de form)
        return $this->render('page/contact/index.html.twig', [
            'form' => null, // Pas de formulaire pour ce test statique
        ]);
    }
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        // Test d'envoi direct d'un email statique
        try {
            $email = (new Email())
                ->from('brahimziyani@gmail.com') // Adresse validée dans SendGrid
                ->to('arcadia.zooapp@gmail.com') // Adresse de réception
                ->subject('Test depuis Symfony ContactController')
                ->html('<p>Ceci est un test d\'email envoyé depuis le contrôleur.</p>');

            $mailer->send($email);

            $this->addFlash('success', 'L\'email a été envoyé avec succès.');
        } catch (TransportExceptionInterface $e) {
            $this->addFlash('error', 'Une erreur est survenue lors de l\'envoi de l\'email : ' . $e->getMessage());
        } catch (\Throwable $e) {
            $this->addFlash('error', 'Erreur inattendue : ' . $e->getMessage());
        }

        // Rendu de la page avec message flash
        return $this->render('page/contact/index.html.twig', [
            'form' => null, // Si aucun formulaire, on affiche juste le message
        ]);
    }
}

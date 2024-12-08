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
            $email = (new Email())
                ->from('brahimziyani@gmail.com') // Adresse validée dans SendGrid
                ->to('arcadia.zooapp@gmail.com') // Adresse de réception
                ->subject('Test direct depuis le contrôleur statique')
                ->html('<p>Ceci est un test d\'envoi statique depuis le contrôleur Symfony.</p>');
        
            error_log('Tentative d\'envoi d\'email statique...');
            $mailer->send($email);
            error_log('E-mail statique envoyé avec succès.');
        
            $this->addFlash('success', 'L\'email statique a été envoyé avec succès.');
        } catch (TransportExceptionInterface $e) {
            error_log('Erreur d\'envoi d\'e-mail statique : ' . $e->getMessage());
            $this->addFlash('error', 'Erreur lors de l\'envoi de l\'email statique.');
        }
        

        // Rendu d'une page simple (ou formulaire si vous souhaitez tester)
        return $this->render('page/contact/index.html.twig', [
            'form' => null,
        ]);
    }
}

<?php

namespace App\Controller;

use App\Entity\ContactMessage;
use App\Form\ContactMessageType;
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
        // Création du formulaire et gestion de la soumission
        $contact = new ContactMessage();
        $form = $this->createForm(ContactMessageType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Création de l'e-mail
                $email = (new Email())
                    ->from('brahimziyani@gmail.com') // Adresse validée dans SendGrid
                    ->replyTo($contact->getEmail()) // Email de l'utilisateur pour réponse
                    ->to('arcadia.zooapp@gmail.com') // Adresse de réception
                    ->subject('Nouveau message via le formulaire de contact')
                    ->html("
                        <p><strong>Email de l'utilisateur :</strong> {$contact->getEmail()}</p>
                        <p><strong>Message :</strong><br>{$contact->getMessage()}</p>
                    ");

                // Log the email content for debugging
                error_log('Email content: ' . $email->getHtmlBody());

                // Envoi de l'email
                $mailer->send($email);

                // Notification de succès pour l'utilisateur
                $this->addFlash('success', 'Votre message a été envoyé avec succès.');

                return $this->redirectToRoute('app_contact');
            } catch (TransportExceptionInterface $e) {
                // Gestion des erreurs d'envoi
                $this->addFlash('error', 'Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer plus tard.');
                error_log('Erreur d\'envoi d\'e-mail : ' . $e->getMessage());
            }
        }

        // Rendu du formulaire de contact
        return $this->render('page/contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

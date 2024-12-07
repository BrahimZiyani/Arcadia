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
                // Création de l'e-mail à envoyer
                $email = (new Email())
                    ->from('arcadia.zooapp@gmail.com') // Adresse validée dans SendGrid
                    ->to('arcadia.zooapp@gmail.com') // Adresse de réception (remplace par ton email personnel ou celui du support)
                    ->replyTo($contact->getEmail()) // Email du visiteur pour permettre une réponse directe
                    ->subject('Nouveau message via le formulaire de contact')
                    ->text(sprintf(
                        "Vous avez reçu un message de : %s\n\nMessage:\n%s",
                        $contact->getEmail(),
                        $contact->getMessage()
                    ));
        
                // Envoi de l'e-mail avec le Mailer
                $mailer->send($email);
        
                // Notification de succès pour l'utilisateur
                $this->addFlash('success', 'Votre message a été envoyé avec succès.');
        
                return $this->redirectToRoute('app_contact');
            } catch (TransportExceptionInterface $e) {
                // Gestion des erreurs d'envoi
                $this->addFlash('error', 'Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer plus tard.');
            }
        }
        

        // Rendu du formulaire de contact
        return $this->render('page/contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

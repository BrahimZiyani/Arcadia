<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        // Rendu de la page de contact avec le formulaire Formspree intégré dans le template
        return $this->render('page/contact/index.html.twig');
    }

        
    #[Route('/merci', name: 'app_thank_you')]
    public function thankYou(): Response
    {
        return $this->render('page/merci.html.twig');
    }
}

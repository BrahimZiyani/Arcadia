<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/habitats', name: 'app_habitats')]
    public function habitats(): Response
    {
        return $this->render('page/habitats/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/habitats/voliere-tropicale', name: 'app_habitat_voliere_tropicale')]
    public function voliereTropicale(): Response
    {
        return $this->render('page/habitats/voliere_tropicale.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/habitats/foret-tropicale', name: 'app_habitat_foret_tropicale')]
    public function foretTropicale(): Response
    {
        return $this->render('page/habitats/foret_tropicale.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/habitats/enclos-rehabilitation', name: 'app_habitat_enclos_rehabilitation')]
    public function enclosRehabilitation(): Response
    {
        return $this->render('page/habitats/enclos_rehabilitation.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/services', name: 'app_services')]
    public function services(): Response
    {
        return $this->render('page/services/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/avis', name: 'app_avis')]
    public function avis(): Response
    {
        return $this->render('page/avis.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('page/contact.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/login', name: 'app_login')]
    public function login(): Response
    {
        return $this->render('page/login.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
}

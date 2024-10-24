<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Repository\UserRepository;
use App\Repository\HabitatRepository;
use App\Repository\AnimalRepository;  // Ajout de l'import du repository Animal

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
        return $this->render('page/habitats/show.html.twig', [
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
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Récupérer les erreurs d'authentification, s'il y en a
        $error = $authenticationUtils->getLastAuthenticationError();

        // Dernier email saisi
        $lastEmail = $authenticationUtils->getLastUsername();

        return $this->render('page/login.html.twig', [
            'last_email' => $lastEmail,  // Changement de la variable pour plus de clarté
            'error' => $error,
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(AuthenticationUtils $authenticationUtils): Response
    {
        // Cette méthode peut rester vide : le processus de déconnexion est géré par Symfony
        throw new \Exception('Ne sera jamais atteinte car la déconnexion est gérée par Symfony.');
    }

    #[Route('/profile', name: 'app_profile')]
    public function profile(UserRepository $userRepository, HabitatRepository $habitatRepository, AnimalRepository $animalRepository): Response
    {
        // Récupérer tous les utilisateurs
        $users = $userRepository->findAll();

        // Récupérer tous les habitats
        $habitats = $habitatRepository->findAll();

        // Récupérer tous les animaux
        $animals = $animalRepository->findAll();

        // Passe les utilisateurs, habitats et animaux au template Twig
        return $this->render('page/profile.html.twig', [
            'users' => $users,
            'habitats' => $habitats,
            'animals' => $animals,  // Passe les animaux à la vue
        ]);
    }
}

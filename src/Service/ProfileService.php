<?php

namespace App\Service;

use App\Entity\CompteRendu;
use App\Form\CompteRenduType;
use App\Repository\UserRepository;
use App\Repository\HabitatRepository;
use App\Repository\AnimalRepository;
use App\Repository\ServiceRepository;
use App\Repository\CompteRenduRepository;
use App\Repository\AvisRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\SecurityBundle\Security;


class ProfileService
{
    public function __construct(
        private UserRepository $userRepository,
        private HabitatRepository $habitatRepository,
        private AnimalRepository $animalRepository,
        private ServiceRepository $serviceRepository,
        private CompteRenduRepository $compteRenduRepository,
        private AvisRepository $avisRepository,
        private FormFactoryInterface $formFactory,
        private EntityManagerInterface $entityManager,
        private Security $security
    ) {}

    public function getProfileData(): array
    {
        return [
            'users' => $this->userRepository->findAll(),
            'habitats' => $this->habitatRepository->findAll(),
            'animals' => $this->animalRepository->findAll(),
            'services' => $this->serviceRepository->findAll(),
            'compteRendus' => $this->compteRenduRepository->findAll(),
            'avisNonValides' => $this->avisRepository->findBy(['valide' => false]),
        ];
    }

    public function handleCompteRenduForm(Request $request): ?\Symfony\Component\Form\FormInterface
{
    // Récupérer l'utilisateur connecté
    $utilisateur = $this->security->getUser();

    if (!$utilisateur) {
        throw new \LogicException('Aucun utilisateur connecté. Vous devez être connecté pour créer un compte-rendu.');
    }

    // Créer un nouveau CompteRendu et associer l'utilisateur
    $compteRendu = new CompteRendu();
    $compteRendu->setUtilisateur($utilisateur);

    // Créer et gérer le formulaire
    $form = $this->formFactory->create(CompteRenduType::class, $compteRendu);
    $form->handleRequest($request);

    // Si le formulaire est valide, persister et flush
    if ($form->isSubmitted() && $form->isValid()) {
        $this->entityManager->persist($compteRendu);
        $this->entityManager->flush();

        return null; // Redirection nécessaire
    }

    return $form; // Retourner le formulaire pour affichage
}

}

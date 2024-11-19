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
        private EntityManagerInterface $entityManager
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
        $compteRendu = new CompteRendu();

        $form = $this->formFactory->create(CompteRenduType::class, $compteRendu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($compteRendu);
            $this->entityManager->flush();

            return null; // Indique au contrôleur que la redirection est nécessaire
        }

        return $form;
    }
}

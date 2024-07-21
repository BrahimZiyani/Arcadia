<?php

namespace App\Controller;

use App\Entity\AnimalFeeding;
use App\Form\AnimalFeedingType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/animalfeeding')]
class AnimalFeedingController extends AbstractController
{
    #[Route('/new', name: 'animalfeeding_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $animalFeeding = new AnimalFeeding();
        $form = $this->createForm(AnimalFeedingType::class, $animalFeeding);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($animalFeeding);
            $entityManager->flush();

            return $this->redirectToRoute('animalfeeding_index');
        }

        return $this->render('animalfeeding/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

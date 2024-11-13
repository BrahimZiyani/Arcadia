<?php

namespace App\Controller;

use App\Entity\Habitat;
use App\Form\HabitatType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/habitat')]
class HabitatController extends AbstractController
{
    #[Route('/new', name: 'habitat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $habitat = new Habitat();
        $form = $this->createForm(HabitatType::class, $habitat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($habitat);
            $entityManager->flush();

            return $this->redirectToRoute('app_habitats'); // Redirection vers la liste dans PageController
        }

        return $this->render('page/habitats/habitat_new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'habitat_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Habitat $habitat, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(HabitatType::class, $habitat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_habitats'); // Redirection vers la liste dans PageController
        }

        return $this->render('page/habitats/habitat_edit.html.twig', [
            'form' => $form->createView(),
            'habitat' => $habitat,
        ]);
    }

    #[Route('/{id}/delete', name: 'habitat_delete', methods: ['POST'])]
    public function delete(Request $request, Habitat $habitat, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$habitat->getId(), $request->request->get('_token'))) {
            $entityManager->remove($habitat);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_habitats'); // Redirection vers la liste dans PageController
    }
}

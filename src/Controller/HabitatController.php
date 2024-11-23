<?php

namespace App\Controller;

use App\Entity\Habitat;
use App\Form\HabitatType;
use App\Repository\HabitatRepository;
use App\Service\HabitatService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/habitats')]
class HabitatController extends AbstractController
{
    #[Route('/', name: 'habitat_index', methods: ['GET'])]
    public function index(HabitatRepository $habitatRepository): Response
    {
        return $this->render('page/habitats/index.html.twig', [
            'habitats' => $habitatRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'habitat_new', methods: ['GET', 'POST'])]
    public function new(Request $request, HabitatService $habitatService): Response
    {
        $habitat = new Habitat();
        $form = $this->createForm(HabitatType::class, $habitat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedImages = $form->get('images')->getData();
            if ($uploadedImages) {
                $habitatService->handleUploadedImages($uploadedImages, $habitat);
            }

            $habitatService->creerHabitat($habitat);

            return $this->redirectToRoute('habitat_index');
        }

        return $this->render('page/habitats/habitat_new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'habitat_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Habitat $habitat, HabitatService $habitatService): Response
{
    $form = $this->createForm(HabitatType::class, $habitat);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $uploadedImages = $form->get('images')->getData();
        if ($uploadedImages) {
            $habitatService->handleUploadedImages($uploadedImages, $habitat);
        }

        $habitatService->modifierHabitat($habitat);

        return $this->redirectToRoute('habitat_index');
    }

    return $this->render('page/habitats/habitat_edit.html.twig', [
        'form' => $form->createView(),
        'habitat' => $habitat, // Ajout de l'objet habitat à la vue
    ]);
}

    #[Route('/{id}', name: 'habitat_delete', methods: ['POST'])]
    public function delete(Request $request, Habitat $habitat, HabitatService $habitatService): Response
    {
        if ($this->isCsrfTokenValid('delete' . $habitat->getId(), $request->request->get('_token'))) {
            $habitatService->supprimerHabitat($habitat);
        }

        return $this->redirectToRoute('habitat_index');
    }
}

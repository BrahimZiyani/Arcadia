<?php

namespace App\Controller;

use App\Entity\Service;
use App\Form\ServiceType;
use App\Repository\ServiceRepository;
use App\Service\ServiceManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/services')]
class ServiceController extends AbstractController
{
    #[Route('/', name: 'service_index', methods: ['GET'])]
    public function index(ServiceRepository $serviceRepository): Response
    {
        return $this->render('page/services/index.html.twig', [
            'services' => $serviceRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'service_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ServiceManager $serviceManager): Response
    {
        $service = new Service();
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadedImages = $form->get('images')->getData();
            if ($uploadedImages) {
                $serviceManager->handleUploadedImages($uploadedImages, $service);
            }

            $serviceManager->saveService($service);
            $this->addFlash('success', 'Service créé avec succès.');

            return $this->redirectToRoute('service_index');
        }

        return $this->render('page/services/services_new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'service_edit', methods: ['GET', 'POST'])]
public function edit(Request $request, Service $service, ServiceManager $serviceManager): Response
{
    $form = $this->createForm(ServiceType::class, $service);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        // Gestion des nouvelles images uploadées
        $uploadedImages = $form->get('images')->getData();
        if ($uploadedImages) {
            $serviceManager->handleUploadedImages($uploadedImages, $service);
        }

        // Sauvegarde du service
        $serviceManager->saveService($service);
        $this->addFlash('success', 'Service modifié avec succès.');

        return $this->redirectToRoute('service_edit', ['id' => $service->getId()]);
    }

    return $this->render('page/services/services_edit.html.twig', [
        'form' => $form->createView(),
        'service' => $service,
    ]);
}



#[Route('/{id}/delete-image/{image}', name: 'service_remove_image', methods: ['POST'])]
public function removeImage(Request $request, Service $service, string $image, ServiceManager $serviceManager): Response
{
    // Vérification du token CSRF
    if (!$this->isCsrfTokenValid('delete_image' . $service->getId(), $request->request->get('_token'))) {
        $this->addFlash('error', 'Action non autorisée.');
        return $this->redirectToRoute('service_edit', ['id' => $service->getId()]);
    }

    try {
        // Utilisation du ServiceManager pour supprimer l'image
        $serviceManager->supprimerImage($service, $image);
        $this->addFlash('success', 'Image supprimée avec succès.');
    } catch (\Exception $e) {
        $this->addFlash('error', 'Erreur lors de la suppression de l\'image : ' . $e->getMessage());
    }

    return $this->redirectToRoute('service_edit', ['id' => $service->getId()]);
}

        

    #[Route('/{id}/delete', name: 'service_delete', methods: ['POST'])]
    public function delete(Request $request, Service $service, ServiceManager $serviceManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $service->getId(), $request->request->get('_token'))) {
            try {
                $serviceManager->removeService($service);
                $this->addFlash('success', 'Service supprimé avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la suppression du service : ' . $e->getMessage());
            }
        }

        return $this->redirectToRoute('service_index');
    }
}

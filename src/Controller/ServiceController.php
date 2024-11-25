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
            $this->addFlash('success', 'Service created successfully.');

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
            if ($form->get('removeImage')->getData()) {
                $service->setImages([]); // Remove the image
            }
            
            $uploadedImages = $form->get('images')->getData();
            if ($uploadedImages) {
                try {
                    $serviceManager->handleUploadedImages($uploadedImages, $service);
                } catch (\Exception $e) {
                    $this->addFlash('danger', 'Error uploading images: ' . $e->getMessage());
                }
            }

            try {
                $serviceManager->saveService($service);
                $this->addFlash('success', 'Service updated successfully.');
            } catch (\Exception $e) {
                $this->addFlash('danger', 'Error saving service: ' . $e->getMessage());
            }

            return $this->redirectToRoute('service_edit', ['id' => $service->getId()]);
        }

        return $this->render('page/services/services_edit.html.twig', [
            'service' => $service,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'service_delete', methods: ['POST'])]
    public function delete(Request $request, Service $service, ServiceManager $serviceManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $service->getId(), $request->request->get('_token'))) {
            $serviceManager->removeService($service);
            $this->addFlash('success', 'Service deleted successfully.');
        }

        return $this->redirectToRoute('service_index');
    }
}

<?php

namespace App\Controller;

use App\Entity\Service;
use App\Form\ServiceType;
use App\Service\ServiceManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/services')]
class ServiceController extends AbstractController
{
    #[Route('/new', name: 'service_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ServiceManager $serviceManager): Response
    {
        $service = new Service();
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $serviceManager->creerService($service);

            return $this->redirectToRoute('app_services');
        }

        return $this->render('page/services/services_new.html.twig', [
            'service' => $service,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'service_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Service $service, ServiceManager $serviceManager): Response
    {

    $form = $this->createForm(ServiceType::class, $service);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $serviceManager->modifierService($service);

        return $this->redirectToRoute('app_services');
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
            $serviceManager->supprimerService($service);
        }

        return $this->redirectToRoute('app_services');
    }
}

<?php

namespace App\Controller;

use App\Entity\Schedule;
use App\Form\ScheduleType;
use App\Service\ScheduleService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/schedule')]
class ScheduleController extends AbstractController
{
    #[Route('/new', name: 'schedule_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ScheduleService $scheduleService): Response
    {
        $schedule = new Schedule();
        $form = $this->createForm(ScheduleType::class, $schedule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $scheduleService->creerSchedule($schedule);

            return $this->redirectToRoute('schedule_index');
        }

        return $this->render('schedule/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}

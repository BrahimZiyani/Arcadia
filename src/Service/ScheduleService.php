<?php

namespace App\Service;

use App\Entity\Schedule;
use Doctrine\ORM\EntityManagerInterface;

class ScheduleService
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function creerSchedule(Schedule $schedule): void
    {
        $this->entityManager->persist($schedule);
        $this->entityManager->flush();
    }
}

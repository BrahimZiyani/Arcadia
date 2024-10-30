<?php

namespace App\EventListener;

use App\Entity\Animal;
use App\Entity\CompteRendu;
use Doctrine\Persistence\Event\LifecycleEventArgs;

class CompteRenduListener
{
    public function postPersist(CompteRendu $compteRendu, LifecycleEventArgs $args)
    {
        $entityManager = $args->getObjectManager();
        
        // Récupérer l'animal lié et mettre à jour son état de santé
        $animal = $compteRendu->getAnimal();
        $animal->setEtatDeSante($compteRendu->getEtat());
        
        // Sauvegarder les changements
        $entityManager->persist($animal);
        $entityManager->flush();
    }
}

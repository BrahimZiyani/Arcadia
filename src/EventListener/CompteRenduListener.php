<?php
namespace App\EventListener;

use App\Entity\Animal;
use App\Entity\CompteRendu;
use Doctrine\Persistence\Event\LifecycleEventArgs;

class CompteRenduListener
{
    public function postPersist(LifecycleEventArgs $args): void
    {
        // Récupérer l'objet persistant (l'entité)
        $entity = $args->getObject();

        // Vérifier que l'objet est bien un CompteRendu
        if (!$entity instanceof CompteRendu) {
            return;
        }

        // Récupérer l'EntityManager
        $entityManager = $args->getObjectManager();

        // Récupérer l'animal lié et mettre à jour son état de santé
        $animal = $entity->getAnimal();
        if ($animal) {
            $animal->setEtatDeSante($entity->getEtat());

            // Sauvegarder les changements
            $entityManager->persist($animal);
            $entityManager->flush();
        }
    }
}

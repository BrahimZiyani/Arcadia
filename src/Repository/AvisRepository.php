<?php

namespace App\Repository;

use App\Entity\Avis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Avis>
 */
class AvisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Avis::class);
    }

    /**
     * Récupère les avis non validés.
     * 
     * @return Avis[]
     */
    public function findNonValides(): array
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.valide = :valide')
            ->setParameter('valide', false)
            ->orderBy('a.dateVisite', 'DESC')
            ->getQuery()
            ->getResult();
    }
}
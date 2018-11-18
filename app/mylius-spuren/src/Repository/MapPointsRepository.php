<?php

namespace App\Repository;

use App\Entity\MapPoints;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MapPoints|null find($id, $lockMode = null, $lockVersion = null)
 * @method MapPoints|null findOneBy(array $criteria, array $orderBy = null)
 * @method MapPoints[]    findAll()
 * @method MapPoints[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MapPointsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MapPoints::class);
    }

    // /**
    //  * @return MapPoints[] Returns an array of MapPoints objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MapPoints
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

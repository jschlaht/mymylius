<?php

namespace App\Repository;

use App\Entity\MyliusArt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MyliusArt|null find($id, $lockMode = null, $lockVersion = null)
 * @method MyliusArt|null findOneBy(array $criteria, array $orderBy = null)
 * @method MyliusArt[]    findAll()
 * @method MyliusArt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MyliusArtRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MyliusArt::class);
    }

    // /**
    //  * @return MyliusArt[] Returns an array of MyliusArt objects
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
    public function findOneBySomeField($value): ?MyliusArt
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

<?php

namespace App\Repository;

use App\Entity\Matters;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Matters|null find($id, $lockMode = null, $lockVersion = null)
 * @method Matters|null findOneBy(array $criteria, array $orderBy = null)
 * @method Matters[]    findAll()
 * @method Matters[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MattersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Matters::class);
    }

    // /**
    //  * @return Matters[] Returns an array of Matters objects
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
    public function findOneBySomeField($value): ?Matters
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

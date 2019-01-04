<?php

namespace App\Repository;

use App\Entity\Decription;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Decription|null find($id, $lockMode = null, $lockVersion = null)
 * @method Decription|null findOneBy(array $criteria, array $orderBy = null)
 * @method Decription[]    findAll()
 * @method Decription[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DecriptionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Decription::class);
    }

    // /**
    //  * @return Decription[] Returns an array of Decription objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Decription
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

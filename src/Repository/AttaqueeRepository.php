<?php

namespace App\Repository;

use App\Entity\Attaquee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Attaquee|null find($id, $lockMode = null, $lockVersion = null)
 * @method Attaquee|null findOneBy(array $criteria, array $orderBy = null)
 * @method Attaquee[]    findAll()
 * @method Attaquee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AttaqueeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Attaquee::class);
    }

    // /**
    //  * @return Attaquee[] Returns an array of Attaquee objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Attaquee
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

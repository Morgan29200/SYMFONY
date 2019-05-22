<?php

namespace App\Repository;

use App\Entity\Pokemonn;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Pokemonn|null find($id, $lockMode = null, $lockVersion = null)
 * @method Pokemonn|null findOneBy(array $criteria, array $orderBy = null)
 * @method Pokemonn[]    findAll()
 * @method Pokemonn[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PokemonnRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Pokemonn::class);
    }

    // /**
    //  * @return Pokemonn[] Returns an array of Pokemonn objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Pokemonn
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

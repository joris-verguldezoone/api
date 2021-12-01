<?php

namespace App\Repository;

use App\Entity\ListeAmis;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ListeAmis|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListeAmis|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListeAmis[]    findAll()
 * @method ListeAmis[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListeAmisRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListeAmis::class);
    }

    // /**
    //  * @return ListeAmis[] Returns an array of ListeAmis objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ListeAmis
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

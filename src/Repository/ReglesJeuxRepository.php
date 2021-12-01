<?php

namespace App\Repository;

use App\Entity\ReglesJeux;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReglesJeux|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReglesJeux|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReglesJeux[]    findAll()
 * @method ReglesJeux[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReglesJeuxRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReglesJeux::class);
    }

    // /**
    //  * @return ReglesJeux[] Returns an array of ReglesJeux objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReglesJeux
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

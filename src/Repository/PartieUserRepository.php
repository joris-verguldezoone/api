<?php

namespace App\Repository;

use App\Entity\PartieUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method PartieUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method PartieUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method PartieUser[]    findAll()
 * @method PartieUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PartieUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PartieUser::class);
    }

    // /**
    //  * @return PartieUser[] Returns an array of PartieUser objects
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
    public function findOneBySomeField($value): ?PartieUser
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

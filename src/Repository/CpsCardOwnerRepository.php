<?php

namespace App\Repository;

use App\Entity\CpsCardOwner;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CpsCardOwner|null find($id, $lockMode = null, $lockVersion = null)
 * @method CpsCardOwner|null findOneBy(array $criteria, array $orderBy = null)
 * @method CpsCardOwner[]    findAll()
 * @method CpsCardOwner[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CpsCardOwnerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CpsCardOwner::class);
    }

    // /**
    //  * @return CpsCardOwner[] Returns an array of CpsCardOwner objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CpsCardOwner
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

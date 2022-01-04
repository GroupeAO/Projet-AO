<?php

namespace App\Repository;

use App\Entity\SurgeryNotification;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SurgeryNotification|null find($id, $lockMode = null, $lockVersion = null)
 * @method SurgeryNotification|null findOneBy(array $criteria, array $orderBy = null)
 * @method SurgeryNotification[]    findAll()
 * @method SurgeryNotification[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SurgeryNotificationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SurgeryNotification::class);
    }

    // /**
    //  * @return SurgeryNotification[] Returns an array of SurgeryNotification objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SurgeryNotification
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

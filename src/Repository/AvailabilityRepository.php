<?php

namespace App\Repository;

use App\Entity\Availability;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Availability|null find($id, $lockMode = null, $lockVersion = null)
 * @method Availability|null findOneBy(array $criteria, array $orderBy = null)
 * @method Availability[]    findAll()
 * @method Availability[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AvailabilityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Availability::class);
    }
    public function searchAvailabilityQuery($date) : array
    {
        $qb = $this->createQueryBuilder('u')
        ->where('u.startDate <= :date AND u.endDate >= :date')
        ->setParameter('date', $date)
        ->orderBy('u.startDate', 'ASC');
        $query = $qb->getQuery();
        return $query->execute();
    }

    public function displayUserAvailabilityQuery($id,  EntityManagerInterface $entityManagerInterface)
    {
        $conn=$entityManagerInterface->getConnection();
        $rawSql = "SELECT * FROM availability 
        LEFT JOIN user_availability
        ON availability.id=user_availability.availability_id
        WHERE user_availability.user_id = :id";
        $query=$conn->prepare($rawSql);
        $result= $query->executeQuery(['id'=>$id]);
        return $result->fetchAllAssociative();
    }


    // /**
    //  * @return Availability[] Returns an array of Availability objects
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
    public function findOneBySomeField($value): ?Availability
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

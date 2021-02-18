<?php

namespace App\Repository;

use App\Entity\NewBlog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NewBlog|null find($id, $lockMode = null, $lockVersion = null)
 * @method NewBlog|null findOneBy(array $criteria, array $orderBy = null)
 * @method NewBlog[]    findAll()
 * @method NewBlog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NewBlogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NewBlog::class);
    }

    // /**
    //  * @return NewBlog[] Returns an array of NewBlog objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NewBlog
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

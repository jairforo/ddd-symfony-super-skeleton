<?php

namespace SuperSkeleton\Advertiser\Infrastructure\Doctrine;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use SuperSkeleton\Advertiser\Domain\Advertiser;
use SuperSkeleton\Advertiser\Domain\AdvertiserRepository as AdvertiserRepositoryInterface;

class AdvertiserRepository extends ServiceEntityRepository implements AdvertiserRepositoryInterface
{
    /**
     * AdvertiserRepository constructor.
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Advertiser::class);
    }

    public function all(): array
    {
        $qb = $this->createQueryBuilder('advertiser');
        return $qb->getQuery()->getResult();
    }

    public function store(Advertiser $advertiser): void
    {
        $this->_em->persist($advertiser);
        $this->_em->flush();
    }
}
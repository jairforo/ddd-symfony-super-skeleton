<?php

namespace SuperSkeleton\Advertiser\Application\Query;

use SuperSkeleton\Advertiser\Domain\Advertiser;
use SuperSkeleton\Advertiser\Domain\AdvertiserRepository;

class AdvertiserQuery
{
    public function __construct(private AdvertiserRepository $repository)
    {
    }

    public function all(): array
    {
        $results = $this->repository->all();

        return array_map(function (Advertiser $advertiser) {
            //return new AdvertiserDTO($advertiser); //@todo I need to configure the serializer to be able to use the DTO on the response
            return [
                "name" => $advertiser->getName(),
                "email" => $advertiser->getEmail(),
            ];
        }, $results);
    }
}
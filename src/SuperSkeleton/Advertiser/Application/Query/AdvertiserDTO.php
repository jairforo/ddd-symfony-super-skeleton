<?php

namespace SuperSkeleton\Advertiser\Application\Query;

use SuperSkeleton\Advertiser\Domain\Advertiser;

class AdvertiserDTO
{
    public function __construct(
        private Advertiser $advertiser
    )
    {
    }

    public function getName(): string
    {
        return $this->advertiser->getName();
    }
}

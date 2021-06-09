<?php

namespace SuperSkeleton\Advertiser\Domain;

class AdvertiserService
{
    public function __construct(private AdvertiserRepository $advertiserRepository)
    {
    }

    public function store(Advertiser $advertiser): void
    {
        //@todo: Password still plain text add encoder
        $this->checkData($advertiser);
        $this->advertiserRepository->store($advertiser);
    }

    private function checkData(Advertiser $advertiser): void
    {
        //@todo Implement the exception validation here
    }
}

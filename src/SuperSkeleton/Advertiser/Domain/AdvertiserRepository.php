<?php


namespace SuperSkeleton\Advertiser\Domain;


interface AdvertiserRepository
{
    public function all(): array;
    public function store(Advertiser $advertiser): void;
}
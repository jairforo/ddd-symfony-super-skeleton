<?php


namespace SuperSkeleton\Advertiser\Application\Command;


interface Handler
{
    public function __invoke(Command $command): void;
}
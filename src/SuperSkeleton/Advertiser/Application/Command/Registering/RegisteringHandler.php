<?php declare(strict_types=1);

namespace SuperSkeleton\Advertiser\Application\Command\Registering;

use SuperSkeleton\Advertiser\Application\Command\Command;
use SuperSkeleton\Advertiser\Application\Command\Handler;
use SuperSkeleton\Advertiser\Domain\Advertiser;
use SuperSkeleton\Advertiser\Domain\AdvertiserService;
use SuperSkeleton\Advertiser\Domain\Exception\CouldNotStoreAdvertiserException;

class RegisteringHandler implements Handler
{
    public function __construct(private AdvertiserService $advertiserService)
    {
    }

    public function __invoke(Command $command): void
    {
        try {
            $advertiser = new Advertiser(
                null,
                $command->getName(),
                $command->getEmail(),
                $command->getPassword()
            );

            $this->advertiserService->store($advertiser);
        } catch (CouldNotStoreAdvertiserException $exception) {
            throw new \RuntimeException("The advertiser could not bee stored");
        }
    }
}

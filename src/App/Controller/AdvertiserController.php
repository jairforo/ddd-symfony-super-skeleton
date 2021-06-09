<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use SuperSkeleton\Advertiser\Application\Command\Registering\RegisteringCommand;
use SuperSkeleton\Advertiser\Application\Query\AdvertiserQuery;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class AdvertiserController extends AbstractController
{
    public function __construct(private MessageBusInterface $messageBus)
    {
    }

    #[Route("/api/v1/advertisers", name: "advertisers.index", methods: ["GET"])]
    public function index(AdvertiserQuery $advertiserQuery): JsonResponse
    {
        $advertisers = $advertiserQuery->all();

        return new JsonResponse([
            'advertisers' => $advertisers
        ]);
    }

    #[Route("/api/v1/advertisers", name: "advertisers.create", methods: ["POST"])]
    public function create(Request $request): JsonResponse
    {
        $command = new RegisteringCommand(
            $request->get('name'),
            $request->get('email'),
            $request->get('password'),
        );

        $this->messageBus->dispatch($command);
        return new JsonResponse('ok');
    }
}
<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HealthController extends BaseAbstractController
{
    #[Route("/api/v1/health", name: "health")]
    public function index(): JsonResponse
    {
        return new JsonResponse('OK');
    }
}
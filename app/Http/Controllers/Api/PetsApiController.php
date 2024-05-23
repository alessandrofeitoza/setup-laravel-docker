<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class PetsApiController
{
    public function getList(): JsonResponse
    {
        return new JsonResponse([], 200);
    }

    public function add(Request $request): JsonResponse
    {
        return new JsonResponse([], 201);
    }
}

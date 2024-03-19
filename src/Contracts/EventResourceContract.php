<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Contracts;

use Saloon\Http\Response;

interface EventResourceContract
{
    public function list(): Response;

    public function get(string $eventId): Response;
}
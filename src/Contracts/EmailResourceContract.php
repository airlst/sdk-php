<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Contracts;

use Saloon\Http\Response;

interface EmailResourceContract
{
    /**
     * @param string $uuid
     * @param array<string> $body
     */
    public function send(string $uuid, array $body): Response;
}
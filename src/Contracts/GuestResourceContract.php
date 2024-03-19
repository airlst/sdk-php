<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Contracts;

use Saloon\Http\Response;

interface GuestResourceContract
{
    public function validateCode(string $code): Response;

    public function get(string $code): Response;

    /**
     * @param array<string, mixed> $data
     */
    public function create(array $data): Response;

    /**
     * @param array<string, mixed> $data
     */
    public function update(string $code, array $data): Response;
}

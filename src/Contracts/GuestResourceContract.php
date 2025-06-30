<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Contracts;

use Saloon\Http\Response;

interface GuestResourceContract
{
    /**
     * @param array<string, mixed> $query
     */
    public function list(array $query): Response;

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

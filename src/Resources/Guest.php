<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Client;
use AirLST\SdkPhp\RequestMethod;

class Guest extends Resource
{
    public function __construct(protected Client $client)
    {
    }

    public function validateCode(string $code): array
    {
        return $this->client->send("{$this->getEventURL()}/guests/validate-code", RequestMethod::POST, [
            'form_params' => ['code' => $code],
        ]);
    }

    public function get(string $code): array
    {
        return $this->client->send("{$this->getEventURL()}/guests/{$code}");
    }

    public function create(array $data): array
    {
        return $this->client->send("{$this->getEventURL()}/guests", RequestMethod::POST, [
            'form_params' => $data
        ]);
    }

    public function update(string $code, array $data): array
    {
        return $this->client->send("{$this->getEventURL()}/guests/{$code}", RequestMethod::PUT, [
            'form_params' => $data
        ]);
    }
}

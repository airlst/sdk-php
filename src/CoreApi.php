<?php

declare(strict_types=1);

namespace AirLST\SdkPhp;

use AirLST\SdkPhp\Resources\EmailResource;
use AirLST\SdkPhp\Resources\EventResource;
use AirLST\SdkPhp\Resources\GuestResource;
use Saloon\Http\Connector;

class CoreApi extends Connector
{
    protected string $baseUrl = 'https://airlst.app/api';

    public function __construct(protected readonly string $apiKey) {}

    public function resolveBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function setBaseUrl(string $baseUrl): void
    {
        $this->baseUrl = $baseUrl;
    }

    public function event(): EventResource
    {
        return new EventResource($this);
    }

    public function guest(string $eventId): GuestResource
    {
        $this->baseUrl = $this->baseUrl . "/events/{$eventId}/guests";

        return new GuestResource($this);
    }

    public function email(string $eventId): EmailResource
    {
        $this->baseUrl = $this->baseUrl . "/events/{$eventId}/emails/email-templates";

        return new EmailResource($this);
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'X-Api-Key' => $this->apiKey
        ];
    }
}
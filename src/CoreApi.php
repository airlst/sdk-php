<?php

declare(strict_types=1);

namespace AirLST\SdkPhp;

use AirLST\SdkPhp\Resources\EmailResource;
use AirLST\SdkPhp\Resources\EventResource;
use AirLST\SdkPhp\Resources\GuestResource;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use Saloon\PaginationPlugin\PagedPaginator;

class CoreApi extends Connector implements HasPagination
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
        if (str($this->baseUrl)->contains("/events/{$eventId}/guests/")) {
            return new GuestResource($this);
        }
        
        $this->baseUrl = $this->baseUrl . "/events/{$eventId}/guests";

        return new GuestResource($this);
    }

    public function email(string $eventId): EmailResource
    {
        if (str($this->baseUrl)->contains("/events/{$eventId}/emails/")) {
            return new EmailResource($this);
        }

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

    public function paginate(Request $request): PagedPaginator
    {
        return new Paginator(connector: $this, request: $request);
    }
}

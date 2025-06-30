<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Client;

use AirLST\SdkPhp\Client\Resource\BookableGroups;
use AirLST\SdkPhp\Client\Resource\Company;
use AirLST\SdkPhp\Client\Resource\Contacts;
use AirLST\SdkPhp\Client\Resource\Documents;
use AirLST\SdkPhp\Client\Resource\Emails;
use AirLST\SdkPhp\Client\Resource\Events;
use AirLST\SdkPhp\Client\Resource\Guests;
use AirLST\SdkPhp\Paginator;
use AirLST\SdkPhp\Resources\EmailResource;
use AirLST\SdkPhp\Resources\EventResource;
use AirLST\SdkPhp\Resources\GuestResource;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use Saloon\PaginationPlugin\PagedPaginator;

/**
 * AirLST API.
 */
class CoreApi extends Connector implements HasPagination
{
    protected string $baseUrl = 'https://airlst.app';

    public function __construct(
        protected readonly string $apiKey,
    ) {}

    public function resolveBaseUrl(): string
    {
        return $this->baseUrl;
    }

    public function setBaseUrl(string $baseUrl): void
    {
        $this->baseUrl = $baseUrl;
    }

    public function paginate(Request $request): PagedPaginator
    {
        return new Paginator(connector: $this, request: $request);
    }

    /**
     * @deprecated use the "events" resource instead
     */
    public function event(): EventResource
    {
        return new EventResource($this);
    }

    /**
     * @deprecated use the "guests" resource instead
     */
    public function guest(string $eventId): GuestResource
    {
        if (str($this->baseUrl)->contains("/events/{$eventId}/guests/")) { // @phpstan-ignore-line
            return new GuestResource($this);
        }

        $this->baseUrl .= "/events/{$eventId}/guests";

        return new GuestResource($this);
    }

    /**
     * @deprecated use the "emails" resource instead
     */
    public function email(string $eventId): EmailResource
    {
        if (str($this->baseUrl)->contains("/events/{$eventId}/emails/")) {  // @phpstan-ignore-line
            return new EmailResource($this);
        }

        $this->baseUrl .= "/events/{$eventId}/emails/email-templates";

        return new EmailResource($this);
    }

    public function bookableGroups(): BookableGroups
    {
        return new BookableGroups($this);
    }

    public function company(): Company
    {
        return new Company($this);
    }

    public function contacts(): Contacts
    {
        return new Contacts($this);
    }

    public function documents(): Documents
    {
        return new Documents($this);
    }

    public function emails(): Emails
    {
        return new Emails($this);
    }

    public function events(): Events
    {
        return new Events($this);
    }

    public function guests(): Guests
    {
        return new Guests($this);
    }

    protected function defaultHeaders(): array
    {
        return ['X-Api-Key' => $this->apiKey];
    }
}

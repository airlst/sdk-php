<?php

declare(strict_types=1);

namespace AirLST\SdkPhp;

use AirLST\SdkPhp\Resources\BookableGroups;
use AirLST\SdkPhp\Resources\Company;
use AirLST\SdkPhp\Resources\Contacts;
use AirLST\SdkPhp\Resources\Documents;
use AirLST\SdkPhp\Resources\Emails;
use AirLST\SdkPhp\Resources\Events;
use AirLST\SdkPhp\Resources\Guests;
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
        return new Paginator($this, $request);
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

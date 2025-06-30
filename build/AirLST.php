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
use Saloon\Http\Connector;

/**
 * AirLST API.
 */
class AirLST extends Connector
{
    public function __construct(
        protected readonly string $apiKey,
    ) {}

    public function resolveBaseUrl(): string
    {
        return 'https://airlst.app';
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

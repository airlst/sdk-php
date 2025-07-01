<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Contacts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getContactDetails.
 */
class GetContactDetails extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param mixed $contactCode Contact code
     */
    public function __construct(
        protected mixed $contactCode,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/companies/contacts/{$this->contactCode}";
    }
}

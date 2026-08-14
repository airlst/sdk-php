<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Contacts;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateContact.
 */
class UpdateContact extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param mixed      $contactCode Contact code
     * @param array|null $contact     Contact details for guest
     */
    public function __construct(
        protected mixed $contactCode,
        protected ?array $contact = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/companies/contacts/{$this->contactCode}";
    }

    public function defaultBody(): array
    {
        return array_filter(['contact' => $this->contact]);
    }
}

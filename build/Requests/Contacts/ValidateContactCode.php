<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Contacts;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * validateContactCode.
 */
class ValidateContactCode extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct() {}

    public function resolveEndpoint(): string
    {
        return '/api/companies/contacts/validate-code';
    }
}

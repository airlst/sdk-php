<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Company;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCompanyEvents.
 */
class GetCompanyEvents extends Request
{
    protected Method $method = Method::GET;

    public function __construct() {}

    public function resolveEndpoint(): string
    {
        return '/api/companies/events';
    }
}

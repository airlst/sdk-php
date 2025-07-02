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

    /**
     * @param string|null $code The contact code
     */
    public function __construct(
        protected ?string $code = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/api/companies/contacts/validate-code';
    }

    public function defaultBody(): array
    {
        return array_filter(['code' => $this->code]);
    }
}

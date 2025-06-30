<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Guest;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class ValidateCodeRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(protected string $code) {}

    public function resolveEndpoint(): string
    {
        return '/validate-code';
    }

    /**
     * @return array<string, string>
     */
    protected function defaultBody(): array
    {
        return [
            'code' => $this->code,
        ];
    }
}

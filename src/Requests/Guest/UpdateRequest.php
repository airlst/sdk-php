<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Guest;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdateRequest extends Request implements HasBody
{
    use HasJsonBody;
    
    protected Method $method = Method::PUT;

    /**
     * @param array<string, mixed> $data
     */
    public function __construct(protected string $code, protected array $data) {}

    public function resolveEndpoint(): string
    {
        return '/' . $this->code; 
    }

    /**
     * @return array<string, mixed>
     */
    protected function defaultBody(): array
    {
        return $this->data;
    }
}
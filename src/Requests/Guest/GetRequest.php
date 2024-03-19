<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Guest;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(protected string $code) {}

    public function resolveEndpoint(): string
    {
        return '/' . $this->code; 
    }
}
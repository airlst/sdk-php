<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Email;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class ListRequest extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/'; 
    }
}
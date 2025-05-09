<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Guest;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;

class ListRequest extends Request implements Paginatable
{
    protected Method $method = Method::GET;

    /**
     * @param array<string, mixed> $additionalQuery
     */
    public function __construct(protected array $additionalQuery) {}

    public function resolveEndpoint(): string
    {
        return '/';
    }

    protected function defaultQuery(): array
    {
        return [
            'page' => 1,
            'perPage' => 100,
            ...$this->additionalQuery,
        ];
    }
}

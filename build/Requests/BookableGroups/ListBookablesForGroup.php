<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\BookableGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;

/**
 * listBookablesForGroup.
 */
class ListBookablesForGroup extends Request implements Paginatable
{
    protected Method $method = Method::GET;

    /**
     * @param mixed    $eventUuid         Event UUID
     * @param mixed    $bookableGroupUuid BookableGroup UUID
     * @param int|null $perPage           Number of items per page. Defaults to 100.
     * @param int|null $page              Page number
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $bookableGroupUuid,
        protected ?int $perPage = null,
        protected ?int $page = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/bookables/groups/{$this->bookableGroupUuid}";
    }

    protected function defaultQuery(): array
    {
        return array_filter(['perPage' => $this->perPage, 'page' => $this->page]);
    }
}

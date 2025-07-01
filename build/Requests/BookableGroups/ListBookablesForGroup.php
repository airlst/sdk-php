<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\BookableGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listBookablesForGroup.
 */
class ListBookablesForGroup extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param mixed $eventUuid         Event UUID
     * @param mixed $bookableGroupUuid BookableGroup UUID
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $bookableGroupUuid,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/bookables/groups/{$this->bookableGroupUuid}";
    }
}

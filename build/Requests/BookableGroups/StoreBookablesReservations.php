<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\BookableGroups;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * storeBookablesReservations.
 */
class StoreBookablesReservations extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

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
        return "/api/events/{$this->eventUuid}/bookables/groups/{$this->bookableGroupUuid}/reservations";
    }
}

<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\GuestGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getGuestGroups.
 *
 * Lists all guest groups of the event. Use a group id together with a guest's guest_group to filter
 * bookable-object availabilities per group. Each group also exposes its participation quota
 * (guests_limit, null = unlimited) and current usage (guests_count).
 */
class GetGuestGroups extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param mixed $eventUuid Event UUID
     */
    public function __construct(
        protected mixed $eventUuid,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guest-groups";
    }
}

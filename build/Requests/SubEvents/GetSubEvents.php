<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\SubEvents;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getSubEvents.
 *
 * Lists all sub-events of a parent event with their quota state (R39). The `sub-events` company module
 * must be active, otherwise the endpoint responds 400. `participations_count` counts occupying
 * participations (statuses `invited` and `confirmed`). Each quota row reports its `limit` and `used`;
 * `guest_group_id: null` marks the default quota that covers guests whose group has no dedicated quota
 * row and guests without a group. Every quota row carries `guest_group_name`: a locale-keyed object
 * for a quota tied to a guest group, and `null` for the default quota.
 */
class GetSubEvents extends Request
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
        return "/api/events/{$this->eventUuid}/sub-events";
    }
}

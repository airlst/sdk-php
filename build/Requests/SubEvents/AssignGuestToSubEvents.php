<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\SubEvents;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * assignGuestToSubEvents.
 *
 * Assigns the guest — resolved by code within the parent event only — to the given sub-events in
 * one transaction (R41). Per sub-event the applicable quota row is locked (the dedicated row of the
 * guest's group, else the default row), the occupying participations (statuses `invited` and
 * `confirmed`) are counted under the lock, and the participation is created with status `invited` —
 * or `waitlisted` when the quota is exhausted. Any error rolls back the whole batch. The `sub-events`
 * company module must be active, otherwise the endpoint responds 400.
 */
class AssignGuestToSubEvents extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed $eventUuid   Event UUID
     * @param mixed $guestCode   Guest code
     * @param array $subEventIds Sub-event UUIDs of the parent event. Each must exist on the event and must not already have a participation for this guest.
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $guestCode,
        protected array $subEventIds,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guests/{$this->guestCode}/sub-events";
    }

    public function defaultBody(): array
    {
        return array_filter(['sub_event_ids' => $this->subEventIds]);
    }
}

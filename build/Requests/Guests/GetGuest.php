<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Guests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getGuest.
 *
 * Returns the guest resolved by code within the event. When the `sub-events` company module is active,
 * the response also contains `sub_event_participations` — the guest's sub-event participations with
 * their per-sub-event status (`invited`, `confirmed`, `declined`, `cancelled` or `waitlisted`).
 * Without the module the key is absent.
 */
class GetGuest extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param mixed     $eventUuid    Event UUID
     * @param mixed     $guestCode    Guest code
     * @param bool|null $includeSeats Include the guest's table-seating assignments (seats) in the response. Defaults to false.
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $guestCode,
        protected ?bool $includeSeats = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guests/{$this->guestCode}";
    }

    protected function defaultQuery(): array
    {
        return array_filter(['includeSeats' => $this->includeSeats]);
    }
}

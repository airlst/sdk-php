<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Orders;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * addBookablesOrderLineItem.
 *
 * Adds add-on (e.g. hotel night, workshop slot) allocations for a guest to the CART carrier order. The
 * contingent is enforced server-side per night / per slot and per guest group; requests that exceed it
 * are rejected with 422.
 *
 * Submit an array of entries under `line_items`. Entries are independent, so
 * a single request may allocate several slots of a slot-based FLEXIBLE add-on (e.g. 20 hourly shifts
 * of stand security), book non-contiguous slots, mix different add-ons and use a different quantity
 * per entry. Each entry must match a bookable option exactly: for a slot-based FLEXIBLE add-on
 * `start_at` / `end_at` must be the boundaries of one slot, so a range spanning several slots is
 * rejected — send one entry per slot instead. Use the
 * `bookables/groups/{group}/objects/{bookable}/availability` endpoint to read `duration_minutes`,
 * `buffer_minutes` and `capacity_per_slot`.
 *
 * `start_at` and `end_at` are **absolute instants**, never
 * event-local wall clock. Send UTC (`…Z`) or an explicit offset (`+02:00`); a value carrying no zone
 * at all is read as UTC. To book a wall-clock time, convert it from the event timezone first — that
 * timezone is published as `timezone` on the event resource and as `data.timezone` on the availability
 * response. Sending `23:00` for a 23:00 event-local slot in a UTC+2 event books a different slot (or
 * none).
 *
 * The payload is applied all-or-nothing: if any entry is invalid or unavailable, nothing is
 * held and the 422 message names the rejected entry ("Line item {index}: …"). At most 50 entries per
 * request. For NIGHTS add-ons one line item is created per night, so a single entry can map to several
 * reservations.
 *
 * The legacy single-item body (`addon_id`, `start_at`, `end_at`, `quantity`,
 * `extended_fields` at the top level) is still accepted and behaves exactly as before, including its
 * flat validation error keys and messages. It is ignored when `line_items` is present. A body carrying
 * neither shape is reported against the current contract, i.e. as a missing `line_items`.
 */
class AddBookablesOrderLineItem extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed  $eventUuid Event UUID
     * @param mixed  $orderUuid UUID of a CART order that belongs to the event
     * @param string $guestCode A valid guest code that exists in the event’s bookings and belongs to the order’s booking. Applies to every entry.
     * @param array  $lineItems The allocations to add, 1–50 entries. Applied in order, all-or-nothing.
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $orderUuid,
        protected string $guestCode,
        protected array $lineItems,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/bookables/orders/{$this->orderUuid}/line-items";
    }

    public function defaultBody(): array
    {
        return array_filter(['guest_code' => $this->guestCode, 'line_items' => $this->lineItems]);
    }
}

<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Orders;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * bulkAssignBookables.
 *
 * Assigns a single add-on selection (hotel nights, workshop slots or fixed add-ons) to many event
 * guests at once. Guests are targeted either by an explicit list of codes or by the string "all"
 * (optionally narrowed by "filters"). Each assignment is written to a non-expiring payment-pending
 * carrier order per booking. Handles the three availability types: NIGHTS (one line item per night,
 * "end_date" is the excluded check-out day), FIXED (no dates) and FLEXIBLE (one reservation per
 * selected slot). Flexible add-ons must appear both in "selected_bookable_objects" and in
 * "selected_slots". The contingent is validated up front per night / slot and per guest group;
 * over-contingent requests are rejected with 422. Processing is asynchronous: a 202 response only
 * confirms the batch was queued.
 */
class BulkAssignBookables extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed       $eventUuid               Event UUID
     * @param mixed       $guests                  either the string "all" to target every guest in the event (optionally narrowed by "filters"), or an explicit list of guest codes
     * @param array|null  $filters                 Optional. Only applied when "guests" is "all"; narrows which guests are targeted.
     * @param string      $bookableGroupId         UUID of the bookable group (add-on category) the selected add-ons belong to
     * @param array       $selectedBookableObjects UUIDs of the universal bookables (add-ons) to assign. Must include every flexible add-on referenced by "selected_slots".
     * @param array|null  $selectedSlots           slot selections for FLEXIBLE add-ons; one reservation is created per slot
     * @param string|null $startDate               Check-in date. Required when a NIGHTS add-on is selected.
     * @param string|null $endDate                 Check-out date (excluded; must be after start_date). Required when a NIGHTS add-on is selected.
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $guests,
        protected ?array $filters = null,
        protected string $bookableGroupId = '',
        protected array $selectedBookableObjects = [],
        protected ?array $selectedSlots = null,
        protected ?string $startDate = null,
        protected ?string $endDate = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/bookables/assignments";
    }

    public function defaultBody(): array
    {
        return array_filter([
            'guests' => $this->guests,
            'filters' => $this->filters,
            'bookable_group_id' => $this->bookableGroupId,
            'selected_bookable_objects' => $this->selectedBookableObjects,
            'selected_slots' => $this->selectedSlots,
            'start_date' => $this->startDate,
            'end_date' => $this->endDate,
        ]);
    }
}

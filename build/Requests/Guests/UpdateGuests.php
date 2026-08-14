<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Guests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateGuests.
 *
 * Applies the same set of attribute changes to every guest in the "guests" list. The update is
 * processed asynchronously; a 202 response only confirms the batch was queued.
 */
class UpdateGuests extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param mixed       $eventUuid          Event UUID
     * @param array|null  $booking            Booking details for guest
     * @param array|null  $contact            Contact details for guest
     * @param mixed       $guests             Either the string "all" to target every guest in the event (optionally narrowed by "filters"), or an explicit list of guest codes. The same attribute changes are applied to every targeted guest.
     * @param array|null  $filters            Optional. Only applied when "guests" is "all"; narrows which guests are targeted.
     * @param string|null $status             The guest status to set on all listed guests
     * @param array|null  $extendedFields     Extended field values mapped with their keys
     * @param bool|null   $sendAutomatedEmail Send the status-triggered automated email to every updated guest (defaults to false)
     * @param int|null    $maxCompanions      Maximum number of companions allowed for each guest
     * @param int|null    $maxRecommendations Maximum number of recommendations allowed for each guest
     * @param bool|null   $marketingOptIn     Whether the guests opted in to marketing emails
     * @param string|null $guestGroupId       UUID of the guest group the guests should belong to
     * @param array|null  $guestManagers      Array of guest manager UUIDs to assign to the guests
     */
    public function __construct(
        protected mixed $eventUuid,
        protected ?array $booking = null,
        protected ?array $contact = null,
        protected mixed $guests = null,
        protected ?array $filters = null,
        protected ?string $status = null,
        protected ?array $extendedFields = null,
        protected ?bool $sendAutomatedEmail = null,
        protected ?int $maxCompanions = null,
        protected ?int $maxRecommendations = null,
        protected ?bool $marketingOptIn = null,
        protected ?string $guestGroupId = null,
        protected ?array $guestManagers = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guests";
    }

    public function defaultBody(): array
    {
        return array_filter([
            'booking' => $this->booking,
            'contact' => $this->contact,
            'guests' => $this->guests,
            'filters' => $this->filters,
            'status' => $this->status,
            'extended_fields' => $this->extendedFields,
            'send_automated_email' => $this->sendAutomatedEmail,
            'max_companions' => $this->maxCompanions,
            'max_recommendations' => $this->maxRecommendations,
            'marketing_opt_in' => $this->marketingOptIn,
            'guest_group_id' => $this->guestGroupId,
            'guest_managers' => $this->guestManagers,
        ]);
    }
}

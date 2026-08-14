<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Guests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateGuest.
 */
class UpdateGuest extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param mixed       $eventUuid          Event UUID
     * @param mixed       $guestCode          Guest code
     * @param string|null $status             The guest status
     * @param array|null  $extendedFields     Extended fields values mapped with their keys
     * @param bool|null   $sendAutomatedEmail Send automated email to the guest with the booking details
     * @param array|null  $booking            Booking details for guest
     * @param array|null  $contact            Contact details for guest
     * @param int|null    $maxCompanions      Maximum number of companions allowed for this guest
     * @param int|null    $maxRecommendations Maximum number of recommendations allowed for this guest
     * @param bool|null   $marketingOptIn     Whether the guest opted in to marketing emails
     * @param string|null $guestGroupId       UUID of the guest group the guest should belong to
     * @param array|null  $guestManagers      Array of guest manager UUIDs to assign to the guest
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $guestCode,
        protected ?string $status = null,
        protected ?array $extendedFields = null,
        protected ?bool $sendAutomatedEmail = null,
        protected ?array $booking = null,
        protected ?array $contact = null,
        protected ?int $maxCompanions = null,
        protected ?int $maxRecommendations = null,
        protected ?bool $marketingOptIn = null,
        protected ?string $guestGroupId = null,
        protected ?array $guestManagers = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guests/{$this->guestCode}";
    }

    public function defaultBody(): array
    {
        return array_filter([
            'status' => $this->status,
            'extended_fields' => $this->extendedFields,
            'send_automated_email' => $this->sendAutomatedEmail,
            'booking' => $this->booking,
            'contact' => $this->contact,
            'max_companions' => $this->maxCompanions,
            'max_recommendations' => $this->maxRecommendations,
            'marketing_opt_in' => $this->marketingOptIn,
            'guest_group_id' => $this->guestGroupId,
            'guest_managers' => $this->guestManagers,
        ]);
    }
}

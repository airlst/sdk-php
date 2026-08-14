<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Guests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createGuests.
 */
class CreateGuests extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed       $eventUuid          Event UUID
     * @param string|null $status             The guest status
     * @param array|null  $extendedFields     Extended fields values mapped with their keys
     * @param bool|null   $sendAutomatedEmail Send automated email to the guest with the booking details
     * @param array|null  $booking            Booking details for guest
     * @param array|null  $contact            Contact details for guest
     * @param string|null $role               Role of the created main guest. With guest_manager, companions are prohibited and send_automated_email must be omitted or false.
     * @param string|null $code               Optional custom guest code. Must be unique within the event.
     * @param int|null    $maxCompanions      Maximum number of companions allowed for this guest
     * @param int|null    $maxRecommendations Maximum number of recommendations allowed for this guest
     * @param bool|null   $marketingOptIn     Whether the guest opted in to marketing emails
     * @param string|null $guestGroupId       UUID of the guest group the guest should belong to
     * @param string|null $contactId          UUID of an existing contact of the event's company to link the guest to, instead of creating a new contact. Mutually exclusive with `contact` - sending both fails validation. To also correct the contact data, update the guest afterwards. The contact must not already have a guest in this event when the event has unique fields configured.
     * @param string|null $contactCode        Alternative to `contact_id` for callers that only hold the contact code, which is what the company API exposes as the public contact identifier (see getContactDetails). Resolved within the event's company. Mutually exclusive with both `contact` and `contact_id`.
     * @param array|null  $guestManagers      Array of guest manager UUIDs to assign to the guest
     * @param array|null  $companions         Array of companions of the main guest
     */
    public function __construct(
        protected mixed $eventUuid,
        protected ?string $status = null,
        protected ?array $extendedFields = null,
        protected ?bool $sendAutomatedEmail = null,
        protected ?array $booking = null,
        protected ?array $contact = null,
        protected ?string $role = null,
        protected ?string $code = null,
        protected ?int $maxCompanions = null,
        protected ?int $maxRecommendations = null,
        protected ?bool $marketingOptIn = null,
        protected ?string $guestGroupId = null,
        protected ?string $contactId = null,
        protected ?string $contactCode = null,
        protected ?array $guestManagers = null,
        protected ?array $companions = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guests";
    }

    public function defaultBody(): array
    {
        return array_filter([
            'status' => $this->status,
            'extended_fields' => $this->extendedFields,
            'send_automated_email' => $this->sendAutomatedEmail,
            'booking' => $this->booking,
            'contact' => $this->contact,
            'role' => $this->role,
            'code' => $this->code,
            'max_companions' => $this->maxCompanions,
            'max_recommendations' => $this->maxRecommendations,
            'marketing_opt_in' => $this->marketingOptIn,
            'guest_group_id' => $this->guestGroupId,
            'contact_id' => $this->contactId,
            'contact_code' => $this->contactCode,
            'guest_managers' => $this->guestManagers,
            'companions' => $this->companions,
        ]);
    }
}

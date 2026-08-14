<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Guests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createRecommendedGuest.
 */
class CreateRecommendedGuest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed       $eventUuid          Event UUID
     * @param mixed       $mainGuestCode      The code of the main guest
     * @param string|null $status             Recommended guest status
     * @param array|null  $extendedFields     Extended fields values mapped with their keys
     * @param array|null  $booking            Booking details for guest
     * @param array|null  $contact            Contact details for guest
     * @param string|null $role               Role of the created recommended guest
     * @param string|null $code               Optional custom guest code. Must be unique within the event.
     * @param bool|null   $sendAutomatedEmail Send automated email to the guest with the booking details
     * @param int|null    $maxCompanions      Maximum number of companions allowed for this guest
     * @param int|null    $maxRecommendations Maximum number of recommendations allowed for this guest
     * @param bool|null   $marketingOptIn     Whether the recommended guest opted in to marketing emails
     * @param string|null $guestGroupId       UUID of the guest group the recommended guest should belong to
     * @param array|null  $guestManagers      Array of guest manager UUIDs to assign to the recommended guest
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $mainGuestCode,
        protected ?string $status = null,
        protected ?array $extendedFields = null,
        protected ?array $booking = null,
        protected ?array $contact = null,
        protected ?string $role = null,
        protected ?string $code = null,
        protected ?bool $sendAutomatedEmail = null,
        protected ?int $maxCompanions = null,
        protected ?int $maxRecommendations = null,
        protected ?bool $marketingOptIn = null,
        protected ?string $guestGroupId = null,
        protected ?array $guestManagers = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guests/{$this->mainGuestCode}/recommendations";
    }

    public function defaultBody(): array
    {
        return array_filter([
            'status' => $this->status,
            'extended_fields' => $this->extendedFields,
            'booking' => $this->booking,
            'contact' => $this->contact,
            'role' => $this->role,
            'code' => $this->code,
            'send_automated_email' => $this->sendAutomatedEmail,
            'max_companions' => $this->maxCompanions,
            'max_recommendations' => $this->maxRecommendations,
            'marketing_opt_in' => $this->marketingOptIn,
            'guest_group_id' => $this->guestGroupId,
            'guest_managers' => $this->guestManagers,
        ]);
    }
}

<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Guests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createCompanionGuest.
 */
class CreateCompanionGuest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed       $eventUuid          Event UUID
     * @param mixed       $mainGuestCode      The code of the main guest
     * @param string|null $status             The guest status
     * @param array|null  $extendedFields     Extended fields values mapped with their keys
     * @param array|null  $contact            Contact details for guest
     * @param bool|null   $sendAutomatedEmail Send automated email to the guest with the booking details
     * @param bool|null   $marketingOptIn     Whether the companion guest opted in to marketing emails
     * @param string|null $guestGroupId       UUID of the guest group the companion guest should belong to
     * @param array|null  $guestManagers      Array of guest manager UUIDs to assign to the companion guest
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $mainGuestCode,
        protected ?string $status = null,
        protected ?array $extendedFields = null,
        protected ?array $contact = null,
        protected ?bool $sendAutomatedEmail = null,
        protected ?bool $marketingOptIn = null,
        protected ?string $guestGroupId = null,
        protected ?array $guestManagers = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guests/{$this->mainGuestCode}/companions";
    }

    public function defaultBody(): array
    {
        return array_filter([
            'status' => $this->status,
            'extended_fields' => $this->extendedFields,
            'contact' => $this->contact,
            'send_automated_email' => $this->sendAutomatedEmail,
            'marketing_opt_in' => $this->marketingOptIn,
            'guest_group_id' => $this->guestGroupId,
            'guest_managers' => $this->guestManagers,
        ]);
    }
}

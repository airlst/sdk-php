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
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $guestCode,
        protected ?string $status = null,
        protected ?array $extendedFields = null,
        protected ?bool $sendAutomatedEmail = null,
        protected ?array $booking = null,
        protected ?array $contact = null,
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
        ]);
    }
}

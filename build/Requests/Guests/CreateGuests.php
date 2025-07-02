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
     * @param array|null  $companions         Array of companions of the main guest
     */
    public function __construct(
        protected mixed $eventUuid,
        protected ?string $status = null,
        protected ?array $extendedFields = null,
        protected ?bool $sendAutomatedEmail = null,
        protected ?array $booking = null,
        protected ?array $contact = null,
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
            'companions' => $this->companions,
        ]);
    }
}

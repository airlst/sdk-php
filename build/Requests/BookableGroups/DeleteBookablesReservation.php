<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\BookableGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteBookablesReservation.
 */
class DeleteBookablesReservation extends Request
{
    protected Method $method = Method::DELETE;

    /**
     * @param mixed $eventUuid       Event UUID
     * @param mixed $guestCode       Guest code
     * @param mixed $reservationUuid Reservation UUID
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $guestCode,
        protected mixed $reservationUuid,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/bookables/guests/{$this->guestCode}/reservations/{$this->reservationUuid}";
    }
}

<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Paginator;
use AirLST\SdkPhp\Requests\BookableGroups\DeleteBookablesReservation;
use AirLST\SdkPhp\Requests\BookableGroups\GetAvailabilities;
use AirLST\SdkPhp\Requests\BookableGroups\ListBookableGroups;
use AirLST\SdkPhp\Requests\BookableGroups\ListBookablesForGroup;
use AirLST\SdkPhp\Requests\BookableGroups\StoreBookablesReservations;
use AirLST\SdkPhp\Resource;
use Saloon\Http\Response;

class BookableGroups extends Resource
{
    /**
     * @param mixed  $eventUuid         Event UUID
     * @param mixed  $bookableGroupUuid BookableGroup UUID
     * @param mixed  $bookableUuid      Bookable object UUID
     * @param string $startDate         Start of the window to list availabilities for. An absolute instant: a value without a zone is read as UTC, not as event-local time.
     * @param string $endDate           End of the window to list availabilities for. An absolute instant: a value without a zone is read as UTC, not as event-local time.
     * @param string $guestCode         Optional guest code used to compute the guest-specific reservations and remaining capacity
     */
    public function getAvailabilities(
        mixed $eventUuid,
        mixed $bookableGroupUuid,
        mixed $bookableUuid,
        string $startDate,
        string $endDate,
        ?string $guestCode = null,
    ): Response {
        return $this->connector->send(new GetAvailabilities($eventUuid, $bookableGroupUuid, $bookableUuid, $startDate, $endDate, $guestCode));
    }

    /**
     * @param mixed $eventUuid       Event UUID
     * @param mixed $guestCode       Guest code
     * @param mixed $reservationUuid Reservation UUID
     */
    public function deleteBookablesReservation(mixed $eventUuid, mixed $guestCode, mixed $reservationUuid): Response
    {
        return $this->connector->send(new DeleteBookablesReservation($eventUuid, $guestCode, $reservationUuid));
    }

    /**
     * @param mixed $eventUuid Event UUID
     * @param int   $perPage   Number of items per page. Defaults to 100.
     * @param int   $page      Page number
     */
    public function listBookableGroups(mixed $eventUuid, ?int $perPage = null, ?int $page = null): Paginator
    {
        return $this->connector->paginate(new ListBookableGroups($eventUuid, $perPage, $page));
    }

    /**
     * @param mixed $eventUuid         Event UUID
     * @param mixed $bookableGroupUuid BookableGroup UUID
     * @param int   $perPage           Number of items per page. Defaults to 100.
     * @param int   $page              Page number
     */
    public function listBookablesForGroup(
        mixed $eventUuid,
        mixed $bookableGroupUuid,
        ?int $perPage = null,
        ?int $page = null,
    ): Paginator {
        return $this->connector->paginate(new ListBookablesForGroup($eventUuid, $bookableGroupUuid, $perPage, $page));
    }

    /**
     * @param mixed  $eventUuid         Event UUID
     * @param mixed  $bookableGroupUuid BookableGroup UUID
     * @param string $guestCode         A valid guest code that exists in the event’s bookings
     */
    public function storeBookablesReservations(
        mixed $eventUuid,
        mixed $bookableGroupUuid,
        string $guestCode,
        array $reservations,
    ): Response {
        return $this->connector->send(new StoreBookablesReservations($eventUuid, $bookableGroupUuid, $guestCode, $reservations));
    }
}

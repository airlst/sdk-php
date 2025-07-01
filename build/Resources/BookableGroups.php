<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

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
     * @param mixed $eventUuid         Event UUID
     * @param mixed $bookableGroupUuid BookableGroup UUID
     * @param mixed $bookableUuid      Bookable object UUID
     */
    public function getAvailabilities(mixed $eventUuid, mixed $bookableGroupUuid, mixed $bookableUuid): Response
    {
        return $this->connector->send(new GetAvailabilities($eventUuid, $bookableGroupUuid, $bookableUuid));
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
     */
    public function listBookableGroups(mixed $eventUuid): Response
    {
        return $this->connector->send(new ListBookableGroups($eventUuid));
    }

    /**
     * @param mixed $eventUuid         Event UUID
     * @param mixed $bookableGroupUuid BookableGroup UUID
     */
    public function listBookablesForGroup(mixed $eventUuid, mixed $bookableGroupUuid): Response
    {
        return $this->connector->send(new ListBookablesForGroup($eventUuid, $bookableGroupUuid));
    }

    /**
     * @param mixed $eventUuid         Event UUID
     * @param mixed $bookableGroupUuid BookableGroup UUID
     */
    public function storeBookablesReservations(mixed $eventUuid, mixed $bookableGroupUuid): Response
    {
        return $this->connector->send(new StoreBookablesReservations($eventUuid, $bookableGroupUuid));
    }
}

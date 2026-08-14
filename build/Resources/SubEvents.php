<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Requests\SubEvents\AssignGuestToSubEvents;
use AirLST\SdkPhp\Requests\SubEvents\GetSubEvents;
use AirLST\SdkPhp\Resource;
use Saloon\Http\Response;

class SubEvents extends Resource
{
    /**
     * @param mixed $eventUuid   Event UUID
     * @param mixed $guestCode   Guest code
     * @param array $subEventIds Sub-event UUIDs of the parent event. Each must exist on the event and must not already have a participation for this guest.
     */
    public function assignGuestToSubEvents(mixed $eventUuid, mixed $guestCode, array $subEventIds): Response
    {
        return $this->connector->send(new AssignGuestToSubEvents($eventUuid, $guestCode, $subEventIds));
    }

    /**
     * @param mixed $eventUuid Event UUID
     */
    public function getSubEvents(mixed $eventUuid): Response
    {
        return $this->connector->send(new GetSubEvents($eventUuid));
    }
}

<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Requests\GuestGroups\CreateGuestGroupQuotaIncreaseRequest;
use AirLST\SdkPhp\Requests\GuestGroups\GetGuestGroups;
use AirLST\SdkPhp\Requests\GuestGroups\ListGuestGroupQuotaIncreaseRequests;
use AirLST\SdkPhp\Resource;
use Saloon\Http\Response;

class GuestGroups extends Resource
{
    /**
     * @param mixed $eventUuid Event UUID
     */
    public function getGuestGroups(mixed $eventUuid): Response
    {
        return $this->connector->send(new GetGuestGroups($eventUuid));
    }

    /**
     * @param mixed  $eventUuid      Event UUID
     * @param string $guestGroupId   Filter by guest group
     * @param string $guestManagerId Filter by requesting guest manager
     * @param string $status         Filter by status
     */
    public function listGuestGroupQuotaIncreaseRequests(
        mixed $eventUuid,
        ?string $guestGroupId = null,
        ?string $guestManagerId = null,
        ?string $status = null,
    ): Response {
        return $this->connector->send(new ListGuestGroupQuotaIncreaseRequests($eventUuid, $guestGroupId, $guestManagerId, $status));
    }

    /**
     * @param mixed  $eventUuid      Event UUID
     * @param string $guestManagerId Requesting guest manager (must be bound to a guest group of this event)
     * @param int    $amount         Number of additional participants to request (delta added to the current limit)
     */
    public function createGuestGroupQuotaIncreaseRequest(mixed $eventUuid, string $guestManagerId, int $amount): Response
    {
        return $this->connector->send(new CreateGuestGroupQuotaIncreaseRequest($eventUuid, $guestManagerId, $amount));
    }
}

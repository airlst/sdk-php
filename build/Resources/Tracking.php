<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Requests\Tracking\StoreAppTrackingHeartbeat;
use AirLST\SdkPhp\Resource;
use Saloon\Http\Response;

class Tracking extends Resource
{
    /**
     * @param mixed  $eventUuid       Event UUID
     * @param string $appTrackingId   UUID of the App Tracking entry. Must belong to the event in the URL and not be soft-deleted.
     * @param string $guestCode       Guest code. Must belong to a guest on the event in the URL.
     * @param string $sessionId       Optional client-provided session identifier. Used by the server to deduplicate pings within 30 seconds per (guest, app tracking, session).
     * @param string $path            current route/URL path the guest is viewing
     * @param string $clientTimestamp ISO 8601 timestamp from the client at send time
     * @param array  $data            arbitrary JSON payload for future use
     */
    public function storeAppTrackingHeartbeat(
        mixed $eventUuid,
        string $appTrackingId,
        string $guestCode,
        ?string $sessionId = null,
        ?string $path = null,
        ?string $clientTimestamp = null,
        ?array $data = null,
    ): Response {
        return $this->connector->send(new StoreAppTrackingHeartbeat($eventUuid, $appTrackingId, $guestCode, $sessionId, $path, $clientTimestamp, $data));
    }
}

<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Tracking;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * storeAppTrackingHeartbeat.
 *
 * Records a heartbeat from a tracked application (landingpage, PWA, microsite) indicating that a guest
 * is currently active.
 *
 * Clients should send one heartbeat every 30 seconds while the guest is engaged.
 * The server silently deduplicates pings within 30 seconds for the same (guest, app tracking,
 * session_id) tuple.
 *
 * Active minutes are derived server-side at report time from the resulting
 * heartbeat rows.
 */
class StoreAppTrackingHeartbeat extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed       $eventUuid       Event UUID
     * @param string      $appTrackingId   UUID of the App Tracking entry. Must belong to the event in the URL and not be soft-deleted.
     * @param string      $guestCode       Guest code. Must belong to a guest on the event in the URL.
     * @param string|null $sessionId       Optional client-provided session identifier. Used by the server to deduplicate pings within 30 seconds per (guest, app tracking, session).
     * @param string|null $path            current route/URL path the guest is viewing
     * @param string|null $clientTimestamp ISO 8601 timestamp from the client at send time
     * @param array|null  $data            arbitrary JSON payload for future use
     */
    public function __construct(
        protected mixed $eventUuid,
        protected string $appTrackingId,
        protected string $guestCode,
        protected ?string $sessionId = null,
        protected ?string $path = null,
        protected ?string $clientTimestamp = null,
        protected ?array $data = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/tracking/heartbeats";
    }

    public function defaultBody(): array
    {
        return array_filter([
            'app_tracking_id' => $this->appTrackingId,
            'guest_code' => $this->guestCode,
            'session_id' => $this->sessionId,
            'path' => $this->path,
            'client_timestamp' => $this->clientTimestamp,
            'data' => $this->data,
        ]);
    }
}

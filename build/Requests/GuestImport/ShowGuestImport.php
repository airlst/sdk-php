<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\GuestImport;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * showGuestImport.
 *
 * Returns the current state of a previously dispatched guest import. Poll this endpoint to track
 * progress: the status moves from "created" to "dispatched" to "done". Once processing finishes,
 * "temporary_cloud_output_url" (valid for one hour) links to a CSV of any rows that failed to import.
 */
class ShowGuestImport extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param mixed $eventUuid        Event UUID
     * @param mixed $guestsImportUuid Guests import UUID
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $guestsImportUuid,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guests/import/{$this->guestsImportUuid}";
    }
}

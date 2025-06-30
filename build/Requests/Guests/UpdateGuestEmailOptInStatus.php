<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Client\Requests\Guests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateGuestEmailOptInStatus.
 */
class UpdateGuestEmailOptInStatus extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $guestCode,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guests/{$this->guestCode}/emailoptinstatus";
    }
}

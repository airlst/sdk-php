<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Guests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateGuestEmailOptInStatus.
 */
class UpdateGuestEmailOptInStatus extends Request
{
    protected Method $method = Method::PUT;

    /**
     * @param mixed  $eventUuid        Event UUID
     * @param mixed  $guestCode        Guest code
     * @param string $emailOptInStatus Opt in status
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $guestCode,
        protected string $emailOptInStatus,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guests/{$this->guestCode}/emailoptinstatus";
    }

    public function defaultBody(): array
    {
        return array_filter(['email_opt_in_status' => $this->emailOptInStatus]);
    }
}

<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Guests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * checkinGuest.
 */
class CheckinGuest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed       $eventUuid Event UUID
     * @param mixed       $guestCode Guest code
     * @param string      $type      The type of checkin
     * @param int         $timestamp Checkin/Checkout timestamp in unix timestamp format
     * @param string|null $device    Checkin/Checkout device identifier
     * @param string|null $location  Checkin/Checkout location identifier
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $guestCode,
        protected string $type,
        protected int $timestamp,
        protected ?string $device = null,
        protected ?string $location = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guests/{$this->guestCode}/checkins";
    }

    public function defaultBody(): array
    {
        return array_filter(['type' => $this->type, 'timestamp' => $this->timestamp, 'device' => $this->device, 'location' => $this->location]);
    }
}

<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Orders;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createBookablesOrder.
 *
 * Returns the booking’s permanent CART-status carrier order, creating one (without expiration) if
 * none exists yet. The carrier is an internal hold for add-on allocations and is never checked out.
 */
class CreateBookablesOrder extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed  $eventUuid Event UUID
     * @param string $bookingId UUID of a booking that belongs to the event
     */
    public function __construct(
        protected mixed $eventUuid,
        protected string $bookingId,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/bookables/orders";
    }

    public function defaultBody(): array
    {
        return array_filter(['booking_id' => $this->bookingId]);
    }
}

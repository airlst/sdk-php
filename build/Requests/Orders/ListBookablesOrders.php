<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Orders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listBookablesOrders.
 */
class ListBookablesOrders extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $bookingId UUID of a booking that belongs to the event
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $bookingId,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/bookables/orders";
    }

    protected function defaultQuery(): array
    {
        return array_filter(['booking_id' => $this->bookingId]);
    }
}

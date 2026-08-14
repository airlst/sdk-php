<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Orders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * showBookablesOrder.
 */
class ShowBookablesOrder extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $orderUuid UUID of an order that belongs to the event
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $orderUuid,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/bookables/orders/{$this->orderUuid}";
    }
}

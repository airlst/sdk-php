<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Orders;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteBookablesOrderLineItem.
 *
 * Deletes the line item and its add-on reservation(s), freeing the night’s contingent. For NIGHTS
 * add-ons all per-night line items of the same add-on and guest on the order are removed together. To
 * remove several line items — a whole range of slots, for example — in one call, use
 * `bulkDeleteBookablesOrderLineItems` instead of one request per item.
 */
class DeleteBookablesOrderLineItem extends Request
{
    protected Method $method = Method::DELETE;

    /**
     * @param mixed $eventUuid         Event UUID
     * @param mixed $orderUuid         UUID of an order that belongs to the event
     * @param mixed $orderLineItemUuid UUID of a line item that belongs to the order
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $orderUuid,
        protected mixed $orderLineItemUuid,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/bookables/orders/{$this->orderUuid}/line-items/{$this->orderLineItemUuid}";
    }
}

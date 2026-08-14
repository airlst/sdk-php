<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Orders;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * bulkDeleteBookablesOrderLineItems.
 *
 * Deletes every named line item and its add-on reservation(s), freeing the contingent. Use this
 * instead of one `DELETE …/line-items/{OrderLineItemUuid}` call per item to clear a whole time
 * range: a slot-based FLEXIBLE add-on holds one line item per slot, so a full day of hourly slots is
 * 24 line items.
 *
 * Read the ids from `GET …/orders/{OrderUuid}`, which publishes `id`, `option_from`
 * and `option_to` for every line item of the order. `option_from` / `option_to` are absolute instants
 * in UTC, so pick the range against those values, not against event-local wall clock.
 *
 * The request is
 * applied all-or-nothing: if any id is rejected, or any deletion fails, nothing is deleted. At most
 * 100 ids per request. Ids must be unique and must belong to this order.
 *
 * For a NIGHTS add-on,
 * deleting one night releases the whole contiguous stay it belongs to — the same behaviour as the
 * single-item endpoint. `deleted_line_item_ids` can therefore name more line items than the request
 * did, and is the authoritative list of what was removed.
 */
class BulkDeleteBookablesOrderLineItems extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed $eventUuid   Event UUID
     * @param mixed $orderUuid   UUID of an order that belongs to the event
     * @param array $lineItemIds The line items to delete, 1–100 unique ids. Every id must belong to this order.
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $orderUuid,
        protected array $lineItemIds,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/bookables/orders/{$this->orderUuid}/line-items/bulk-delete";
    }

    public function defaultBody(): array
    {
        return array_filter(['line_item_ids' => $this->lineItemIds]);
    }
}

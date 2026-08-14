<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Requests\Orders\AddBookablesOrderLineItem;
use AirLST\SdkPhp\Requests\Orders\BulkAssignBookables;
use AirLST\SdkPhp\Requests\Orders\BulkDeleteBookablesOrderLineItems;
use AirLST\SdkPhp\Requests\Orders\CreateBookablesOrder;
use AirLST\SdkPhp\Requests\Orders\DeleteBookablesOrderLineItem;
use AirLST\SdkPhp\Requests\Orders\ListBookablesOrders;
use AirLST\SdkPhp\Requests\Orders\ShowBookablesOrder;
use AirLST\SdkPhp\Resource;
use Saloon\Http\Response;

class Orders extends Resource
{
    /**
     * @param mixed  $eventUuid Event UUID
     * @param mixed  $orderUuid UUID of a CART order that belongs to the event
     * @param string $guestCode A valid guest code that exists in the event’s bookings and belongs to the order’s booking. Applies to every entry.
     * @param array  $lineItems The allocations to add, 1–50 entries. Applied in order, all-or-nothing.
     */
    public function addBookablesOrderLineItem(
        mixed $eventUuid,
        mixed $orderUuid,
        string $guestCode,
        array $lineItems,
    ): Response {
        return $this->connector->send(new AddBookablesOrderLineItem($eventUuid, $orderUuid, $guestCode, $lineItems));
    }

    /**
     * @param mixed  $eventUuid               Event UUID
     * @param mixed  $guests                  either the string "all" to target every guest in the event (optionally narrowed by "filters"), or an explicit list of guest codes
     * @param array  $filters                 Optional. Only applied when "guests" is "all"; narrows which guests are targeted.
     * @param string $bookableGroupId         UUID of the bookable group (add-on category) the selected add-ons belong to
     * @param array  $selectedBookableObjects UUIDs of the universal bookables (add-ons) to assign. Must include every flexible add-on referenced by "selected_slots".
     * @param array  $selectedSlots           slot selections for FLEXIBLE add-ons; one reservation is created per slot
     * @param string $startDate               Check-in date. Required when a NIGHTS add-on is selected.
     * @param string $endDate                 Check-out date (excluded; must be after start_date). Required when a NIGHTS add-on is selected.
     */
    public function bulkAssignBookables(
        mixed $eventUuid,
        mixed $guests,
        ?array $filters = null,
        string $bookableGroupId = '',
        array $selectedBookableObjects = [],
        ?array $selectedSlots = null,
        ?string $startDate = null,
        ?string $endDate = null,
    ): Response {
        return $this->connector->send(new BulkAssignBookables($eventUuid, $guests, $filters, $bookableGroupId, $selectedBookableObjects, $selectedSlots, $startDate, $endDate));
    }

    /**
     * @param mixed $eventUuid   Event UUID
     * @param mixed $orderUuid   UUID of an order that belongs to the event
     * @param array $lineItemIds The line items to delete, 1–100 unique ids. Every id must belong to this order.
     */
    public function bulkDeleteBookablesOrderLineItems(mixed $eventUuid, mixed $orderUuid, array $lineItemIds): Response
    {
        return $this->connector->send(new BulkDeleteBookablesOrderLineItems($eventUuid, $orderUuid, $lineItemIds));
    }

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $bookingId UUID of a booking that belongs to the event
     */
    public function listBookablesOrders(mixed $eventUuid, mixed $bookingId): Response
    {
        return $this->connector->send(new ListBookablesOrders($eventUuid, $bookingId));
    }

    /**
     * @param mixed  $eventUuid Event UUID
     * @param string $bookingId UUID of a booking that belongs to the event
     */
    public function createBookablesOrder(mixed $eventUuid, string $bookingId): Response
    {
        return $this->connector->send(new CreateBookablesOrder($eventUuid, $bookingId));
    }

    /**
     * @param mixed $eventUuid         Event UUID
     * @param mixed $orderUuid         UUID of an order that belongs to the event
     * @param mixed $orderLineItemUuid UUID of a line item that belongs to the order
     */
    public function deleteBookablesOrderLineItem(mixed $eventUuid, mixed $orderUuid, mixed $orderLineItemUuid): Response
    {
        return $this->connector->send(new DeleteBookablesOrderLineItem($eventUuid, $orderUuid, $orderLineItemUuid));
    }

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $orderUuid UUID of an order that belongs to the event
     */
    public function showBookablesOrder(mixed $eventUuid, mixed $orderUuid): Response
    {
        return $this->connector->send(new ShowBookablesOrder($eventUuid, $orderUuid));
    }
}

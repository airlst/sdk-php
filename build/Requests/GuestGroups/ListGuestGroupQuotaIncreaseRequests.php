<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\GuestGroups;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listGuestGroupQuotaIncreaseRequests.
 *
 * Lists quota-increase requests of the event. Powers the guest-manager "approval pending" state.
 * Optionally filter by guest_group_id, guest_manager_id or status.
 */
class ListGuestGroupQuotaIncreaseRequests extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param mixed       $eventUuid      Event UUID
     * @param string|null $guestGroupId   Filter by guest group
     * @param string|null $guestManagerId Filter by requesting guest manager
     * @param string|null $status         Filter by status
     */
    public function __construct(
        protected mixed $eventUuid,
        protected ?string $guestGroupId = null,
        protected ?string $guestManagerId = null,
        protected ?string $status = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guest-groups/quota-increase-requests";
    }

    protected function defaultQuery(): array
    {
        return array_filter(['guest_group_id' => $this->guestGroupId, 'guest_manager_id' => $this->guestManagerId, 'status' => $this->status]);
    }
}

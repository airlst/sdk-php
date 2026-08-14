<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\GuestGroups;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createGuestGroupQuotaIncreaseRequest.
 *
 * Submits a request to increase the participation quota of the guest group bound to the given guest
 * manager. The group is resolved server-side from the manager. The request is rejected when the
 * manager has no bound group or the group has no limit (unlimited). Designated group approvers are
 * notified by email with a one-click approval link.
 */
class CreateGuestGroupQuotaIncreaseRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed  $eventUuid      Event UUID
     * @param string $guestManagerId Requesting guest manager (must be bound to a guest group of this event)
     * @param int    $amount         Number of additional participants to request (delta added to the current limit)
     */
    public function __construct(
        protected mixed $eventUuid,
        protected string $guestManagerId,
        protected int $amount,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guest-groups/quota-increase-requests";
    }

    public function defaultBody(): array
    {
        return array_filter(['guest_manager_id' => $this->guestManagerId, 'amount' => $this->amount]);
    }
}

<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\BookableGroups;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * getAvailabilities.
 */
class GetAvailabilities extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed       $eventUuid         Event UUID
     * @param mixed       $bookableGroupUuid BookableGroup UUID
     * @param mixed       $bookableUuid      Bookable object UUID
     * @param string      $startDate         Start of the window to list availabilities for. An absolute instant: a value without a zone is read as UTC, not as event-local time.
     * @param string      $endDate           End of the window to list availabilities for. An absolute instant: a value without a zone is read as UTC, not as event-local time.
     * @param string|null $guestCode         Optional guest code used to compute the guest-specific reservations and remaining capacity
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $bookableGroupUuid,
        protected mixed $bookableUuid,
        protected string $startDate,
        protected string $endDate,
        protected ?string $guestCode = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/bookables/groups/{$this->bookableGroupUuid}/objects/{$this->bookableUuid}/availability";
    }

    public function defaultBody(): array
    {
        return array_filter(['start_date' => $this->startDate, 'end_date' => $this->endDate, 'guest_code' => $this->guestCode]);
    }
}

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
     * @param mixed  $eventUuid         Event UUID
     * @param mixed  $bookableGroupUuid BookableGroup UUID
     * @param mixed  $bookableUuid      Bookable object UUID
     * @param string $startDate         Start date
     * @param string $endDate           End date
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $bookableGroupUuid,
        protected mixed $bookableUuid,
        protected string $startDate,
        protected string $endDate,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/bookables/groups/{$this->bookableGroupUuid}/objects/{$this->bookableUuid}/availability";
    }

    public function defaultBody(): array
    {
        return array_filter(['start_date' => $this->startDate, 'end_date' => $this->endDate]);
    }
}

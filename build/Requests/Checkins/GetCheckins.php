<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Checkins;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\Paginatable;

/**
 * getCheckins.
 *
 * Returns a paginated list of check-ins for an event. Supports filtering by timestamp, type, location,
 * and device.
 */
class GetCheckins extends Request implements Paginatable
{
    protected Method $method = Method::GET;

    /**
     * @param mixed       $eventUuid               Event UUID
     * @param int|null    $perPage                 Number of items per page
     * @param int|null    $page                    Page number
     * @param string|null $search                  Quick search across guest code, name, email, and company
     * @param string|null $filtersTimestampbetween Filter checkins within a timestamp range (inclusive). Use the `between` operator with two values separated by `||`. Example: filters(timestamp*between)=1704067200||1735689599. Supports unix timestamps and ISO 8601 date strings.
     * @param string|null $filtersTypeeq           Filter by check-in type. Available operators: eq (equal), neq (not equal), in (multiple values with || separator). Example: filters(type*eq)=check-in
     * @param string|null $filtersLocationlike     Filter by location with partial matching. Available operators: eq (equal), neq (not equal), like (partial match). Example: filters(location*like)=Main
     * @param string|null $filtersTimestampgte     Filter checkins from a specific timestamp (greater than or equal). Supports unix timestamps and ISO 8601 dates. Example: filters(timestamp*gte)=1704067200
     * @param string|null $filtersTimestamplte     Filter checkins up to a specific timestamp (less than or equal). Supports unix timestamps and ISO 8601 dates. Example: filters(timestamp*lte)=1735689599
     * @param string|null $sortsTimestamp0         Sort by field. Template: sorts(field*order)=value. Order can be asc or desc. Default sort is timestamp descending. Example: sorts(timestamp*0)=asc
     */
    public function __construct(
        protected mixed $eventUuid,
        protected ?int $perPage = null,
        protected ?int $page = null,
        protected ?string $search = null,
        protected ?string $filtersTimestampbetween = null,
        protected ?string $filtersTypeeq = null,
        protected ?string $filtersLocationlike = null,
        protected ?string $filtersTimestampgte = null,
        protected ?string $filtersTimestamplte = null,
        protected ?string $sortsTimestamp0 = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guests/checkins";
    }

    protected function defaultQuery(): array
    {
        return array_filter([
            'per_page' => $this->perPage,
            'page' => $this->page,
            'search' => $this->search,
            'filters(timestamp*between)' => $this->filtersTimestampbetween,
            'filters(type*eq)' => $this->filtersTypeeq,
            'filters(location*like)' => $this->filtersLocationlike,
            'filters(timestamp*gte)' => $this->filtersTimestampgte,
            'filters(timestamp*lte)' => $this->filtersTimestamplte,
            'sorts(timestamp*0)' => $this->sortsTimestamp0,
        ]);
    }
}

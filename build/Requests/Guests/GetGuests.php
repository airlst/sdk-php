<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Guests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getGuests.
 */
class GetGuests extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param mixed       $eventUuid       Event UUID
     * @param int|null    $perPage         Number of items per page
     * @param int|null    $page            Page number
     * @param string|null $search          Quick search
     * @param string|null $filtersStatuseq Filter field operator. Template: filters(field*operator)=value. One of: eq (equal), neq (not equal), like, gt (greater than), gte (greater than or equal), lt (less than), lte (less than or equal). If operator is not provided eq will be used as default. If you want to filter by nested fields, use the : separator to indicate nesting levels. For example: filters(contact:sex*eq)=male targets the sex field inside contact. filters(booking:extended_fields->team_name*eq)=Dev targets the team_name field inside the extended_fields object (represented with ->), which is inside booking.
     * @param string|null $sortsRole0      Sorts array. Template: sorts(field*order)=desc
     * @param int|null    $since           Timestamp to get guests updated/deleted since
     */
    public function __construct(
        protected mixed $eventUuid,
        protected ?int $perPage = null,
        protected ?int $page = null,
        protected ?string $search = null,
        protected ?string $filtersStatuseq = null,
        protected ?string $sortsRole0 = null,
        protected ?int $since = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guests";
    }

    protected function defaultQuery(): array
    {
        return array_filter([
            'per_page' => $this->perPage,
            'page' => $this->page,
            'search' => $this->search,
            'filters(status*eq)' => $this->filtersStatuseq,
            'sorts(role*0)' => $this->sortsRole0,
            'since' => $this->since,
        ]);
    }
}

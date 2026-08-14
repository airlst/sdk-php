<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Paginator;
use AirLST\SdkPhp\Requests\Checkins\GetCheckins;
use AirLST\SdkPhp\Resource;

class Checkins extends Resource
{
    /**
     * @param mixed  $eventUuid               Event UUID
     * @param int    $perPage                 Number of items per page
     * @param int    $page                    Page number
     * @param string $search                  Quick search across guest code, name, email, and company
     * @param string $filtersTimestampbetween Filter checkins within a timestamp range (inclusive). Use the `between` operator with two values separated by `||`. Example: filters(timestamp*between)=1704067200||1735689599. Supports unix timestamps and ISO 8601 date strings.
     * @param string $filtersTypeeq           Filter by check-in type. Available operators: eq (equal), neq (not equal), in (multiple values with || separator). Example: filters(type*eq)=check-in
     * @param string $filtersLocationlike     Filter by location with partial matching. Available operators: eq (equal), neq (not equal), like (partial match). Example: filters(location*like)=Main
     * @param string $filtersTimestampgte     Filter checkins from a specific timestamp (greater than or equal). Supports unix timestamps and ISO 8601 dates. Example: filters(timestamp*gte)=1704067200
     * @param string $filtersTimestamplte     Filter checkins up to a specific timestamp (less than or equal). Supports unix timestamps and ISO 8601 dates. Example: filters(timestamp*lte)=1735689599
     * @param string $sortsTimestamp0         Sort by field. Template: sorts(field*order)=value. Order can be asc or desc. Default sort is timestamp descending. Example: sorts(timestamp*0)=asc
     */
    public function getCheckins(
        mixed $eventUuid,
        ?int $perPage = null,
        ?int $page = null,
        ?string $search = null,
        ?string $filtersTimestampbetween = null,
        ?string $filtersTypeeq = null,
        ?string $filtersLocationlike = null,
        ?string $filtersTimestampgte = null,
        ?string $filtersTimestamplte = null,
        ?string $sortsTimestamp0 = null,
    ): Paginator {
        return $this->connector->paginate(new GetCheckins($eventUuid, $perPage, $page, $search, $filtersTimestampbetween, $filtersTypeeq, $filtersLocationlike, $filtersTimestampgte, $filtersTimestamplte, $sortsTimestamp0));
    }
}

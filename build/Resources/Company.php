<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Requests\Company\GetCompanyEvents;
use AirLST\SdkPhp\Resource;
use Saloon\Http\Response;

class Company extends Resource
{
    /**
     * @param string $filtersNamelike                 Filter by event name. Operators: eq, neq, like, in.
     * @param string $filtersCategoryeq               Filter by event category. Operators: eq, neq, in.
     * @param string $filtersStartsAtbetween          Filter by start date. Operators: eq, gt, gte, lt, lte, between. Two ISO 8601 dates or unix timestamps separated by ||, matched in UTC.
     * @param string $filtersEndsAtlte                Filter by end date. Operators: eq, gt, gte, lt, lte, between. ISO 8601 date or unix timestamp, matched in UTC.
     * @param string $filtersTimezoneeq               Filter by IANA timezone. Operators: eq, neq, like, in.
     * @param string $filtersAddressCitylike          Filter by city of the event address. Operators: eq, neq, like, in.
     * @param string $filtersAddressCountryeq         Filter by ISO 3166-1 alpha-2 country code of the event address. Operators: eq, neq, in.
     * @param string $filtersAddressNamelike          Filter by location name (the response `location_name`, stored on the address relation). Operators: eq, neq, like.
     * @param string $filtersExtendedFieldsFieldKeyeq Filter by an event-level custom field value. Replace field_key with the extended field key (see listExtendedFields). Operators: eq, neq, like, in, gt, gte, lt, lte, empty, nempty.
     */
    public function getCompanyEvents(
        ?string $filtersNamelike = null,
        ?string $filtersCategoryeq = null,
        ?string $filtersStartsAtbetween = null,
        ?string $filtersEndsAtlte = null,
        ?string $filtersTimezoneeq = null,
        ?string $filtersAddressCitylike = null,
        ?string $filtersAddressCountryeq = null,
        ?string $filtersAddressNamelike = null,
        ?string $filtersExtendedFieldsFieldKeyeq = null,
    ): Response {
        return $this->connector->send(new GetCompanyEvents($filtersNamelike, $filtersCategoryeq, $filtersStartsAtbetween, $filtersEndsAtlte, $filtersTimezoneeq, $filtersAddressCitylike, $filtersAddressCountryeq, $filtersAddressNamelike, $filtersExtendedFieldsFieldKeyeq));
    }
}

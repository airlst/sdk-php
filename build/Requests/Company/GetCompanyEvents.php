<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Company;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getCompanyEvents.
 *
 * Returns the events of the authenticated company, including the event-level custom fields
 * (`extended_fields`). An event that is currently being copied is omitted until the copy
 * finishes.
 *
 * **Filtering.** Narrow the list with query parameters in the form
 * `filters(field*operator)=value`. The parentheses and the `*` are literal (AWS CloudFront drops the
 * standard `filters[...]` bracket syntax, so this API uses `(...)`). Omit `*operator` for an exact
 * match. Target a field on the address relation with a `:` separator, for example
 * `filters(address:city*eq)=Munich`.
 *
 * **Operators:** `eq` (equals, default), `neq` (not equals),
 * `like` (case-insensitive partial match), `in` (any of), `gt`, `gte`, `lt`, `lte`, `between`,
 * `empty`, `nempty`. Pass several values to `in` and the two bounds of `between` separated by `||`,
 * for example `filters(starts_at*between)=2026-01-01||2026-12-31`. Date filters accept ISO 8601
 * strings or unix timestamps and are matched in UTC.
 *
 * **Filterable fields:** `id`, `name`, `category`,
 * `timezone`, `centerstage_public_url`, `starts_at`, `ends_at`; the address fields `address:name` (the
 * response `location_name`), `address:address_line_1`, `address:address_line_2`, `address:city`,
 * `address:zip`, `address:country`; and any event-level custom field via
 * `filters(extended_fields->'field_key'*operator)=value`.
 */
class GetCompanyEvents extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param string|null $filtersNamelike                 Filter by event name. Operators: eq, neq, like, in.
     * @param string|null $filtersCategoryeq               Filter by event category. Operators: eq, neq, in.
     * @param string|null $filtersStartsAtbetween          Filter by start date. Operators: eq, gt, gte, lt, lte, between. Two ISO 8601 dates or unix timestamps separated by ||, matched in UTC.
     * @param string|null $filtersEndsAtlte                Filter by end date. Operators: eq, gt, gte, lt, lte, between. ISO 8601 date or unix timestamp, matched in UTC.
     * @param string|null $filtersTimezoneeq               Filter by IANA timezone. Operators: eq, neq, like, in.
     * @param string|null $filtersAddressCitylike          Filter by city of the event address. Operators: eq, neq, like, in.
     * @param string|null $filtersAddressCountryeq         Filter by ISO 3166-1 alpha-2 country code of the event address. Operators: eq, neq, in.
     * @param string|null $filtersAddressNamelike          Filter by location name (the response `location_name`, stored on the address relation). Operators: eq, neq, like.
     * @param string|null $filtersExtendedFieldsFieldKeyeq Filter by an event-level custom field value. Replace field_key with the extended field key (see listExtendedFields). Operators: eq, neq, like, in, gt, gte, lt, lte, empty, nempty.
     */
    public function __construct(
        protected ?string $filtersNamelike = null,
        protected ?string $filtersCategoryeq = null,
        protected ?string $filtersStartsAtbetween = null,
        protected ?string $filtersEndsAtlte = null,
        protected ?string $filtersTimezoneeq = null,
        protected ?string $filtersAddressCitylike = null,
        protected ?string $filtersAddressCountryeq = null,
        protected ?string $filtersAddressNamelike = null,
        protected ?string $filtersExtendedFieldsFieldKeyeq = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return '/api/companies/events';
    }

    protected function defaultQuery(): array
    {
        return array_filter([
            'filters(name*like)' => $this->filtersNamelike,
            'filters(category*eq)' => $this->filtersCategoryeq,
            'filters(starts_at*between)' => $this->filtersStartsAtbetween,
            'filters(ends_at*lte)' => $this->filtersEndsAtlte,
            'filters(timezone*eq)' => $this->filtersTimezoneeq,
            'filters(address:city*like)' => $this->filtersAddressCitylike,
            'filters(address:country*eq)' => $this->filtersAddressCountryeq,
            'filters(address:name*like)' => $this->filtersAddressNamelike,
            "filters(extended_fields->'field_key'*eq)" => $this->filtersExtendedFieldsFieldKeyeq,
        ]);
    }
}

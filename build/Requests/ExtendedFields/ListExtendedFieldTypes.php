<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\ExtendedFields;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * listExtendedFieldTypes.
 */
class ListExtendedFieldTypes extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param mixed $eventUuid Event UUID
     */
    public function __construct(
        protected mixed $eventUuid,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/extended-field-types";
    }
}

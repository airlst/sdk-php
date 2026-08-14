<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\ExtendedFields;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteExtendedField.
 */
class DeleteExtendedField extends Request
{
    protected Method $method = Method::DELETE;

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $fieldKey  Extended field key
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $fieldKey,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/extended-fields/{$this->fieldKey}";
    }
}

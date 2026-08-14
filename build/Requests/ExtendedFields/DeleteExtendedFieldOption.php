<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\ExtendedFields;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteExtendedFieldOption.
 */
class DeleteExtendedFieldOption extends Request
{
    protected Method $method = Method::DELETE;

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $fieldKey  Extended field key
     * @param mixed $optionKey Extended field option key
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $fieldKey,
        protected mixed $optionKey,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/extended-fields/{$this->fieldKey}/options/{$this->optionKey}";
    }
}

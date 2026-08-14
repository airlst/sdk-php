<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\ExtendedFields;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateExtendedFieldOption.
 */
class UpdateExtendedFieldOption extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    /**
     * @param mixed      $eventUuid Event UUID
     * @param mixed      $fieldKey  Extended field key
     * @param mixed      $optionKey Extended field option key
     * @param array|null $label     Translatable label object
     * @param int|null   $order     Sort order
     * @param int|null   $limit     Maximum number of guests that can select this option
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $fieldKey,
        protected mixed $optionKey,
        protected ?array $label = null,
        protected ?int $order = null,
        protected ?int $limit = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/extended-fields/{$this->fieldKey}/options/{$this->optionKey}";
    }

    public function defaultBody(): array
    {
        return array_filter(['label' => $this->label, 'order' => $this->order, 'limit' => $this->limit]);
    }
}

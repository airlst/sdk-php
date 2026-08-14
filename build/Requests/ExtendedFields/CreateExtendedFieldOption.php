<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\ExtendedFields;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createExtendedFieldOption.
 */
class CreateExtendedFieldOption extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed    $eventUuid Event UUID
     * @param mixed    $fieldKey  Extended field key
     * @param string   $key       Unique option key (lowercase, underscores only)
     * @param array    $label     Translatable label object
     * @param int|null $order     Sort order
     * @param int|null $limit     Maximum number of guests that can select this option
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $fieldKey,
        protected string $key,
        protected array $label,
        protected ?int $order = null,
        protected ?int $limit = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/extended-fields/{$this->fieldKey}/options";
    }

    public function defaultBody(): array
    {
        return array_filter(['key' => $this->key, 'label' => $this->label, 'order' => $this->order, 'limit' => $this->limit]);
    }
}

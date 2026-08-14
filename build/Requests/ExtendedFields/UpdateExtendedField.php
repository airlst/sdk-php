<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\ExtendedFields;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * updateExtendedField.
 */
class UpdateExtendedField extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    /**
     * @param mixed      $eventUuid Event UUID
     * @param mixed      $fieldKey  Extended field key
     * @param array|null $label     Translatable label object with locale codes as keys
     * @param bool|null  $unique    Whether the field value must be unique
     * @param array|null $options   Options array for enum/multiselect_enum fields. Existing options must include their id.
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $fieldKey,
        protected ?array $label = null,
        protected ?bool $unique = null,
        protected ?array $options = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/extended-fields/{$this->fieldKey}";
    }

    public function defaultBody(): array
    {
        return array_filter(['label' => $this->label, 'unique' => $this->unique, 'options' => $this->options]);
    }
}

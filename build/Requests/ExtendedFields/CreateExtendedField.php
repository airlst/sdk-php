<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\ExtendedFields;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createExtendedField.
 */
class CreateExtendedField extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed       $eventUuid    Event UUID
     * @param string      $model        The model type this field belongs to. "guest", "booking" and "guestManager" are event-scoped; "contact" and "event" are company-scoped (stored on the event's company and shared across its events).
     * @param string      $key          Unique field key (lowercase, underscores only). Must be unique per model within its scope (per event for guest/booking/guestManager, per company for contact/event) and must not collide with a reserved column name.
     * @param array       $label        Translatable label object with locale codes as keys
     * @param string      $type         Field type
     * @param string|null $defaultValue Default value for the field
     * @param bool|null   $unique       Whether the field value must be unique across guests
     * @param array|null  $options      Options for enum/multiselect_enum fields (required for these types)
     */
    public function __construct(
        protected mixed $eventUuid,
        protected string $model,
        protected string $key,
        protected array $label,
        protected string $type,
        protected ?string $defaultValue = null,
        protected ?bool $unique = null,
        protected ?array $options = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/extended-fields";
    }

    public function defaultBody(): array
    {
        return array_filter([
            'model' => $this->model,
            'key' => $this->key,
            'label' => $this->label,
            'type' => $this->type,
            'default_value' => $this->defaultValue,
            'unique' => $this->unique,
            'options' => $this->options,
        ]);
    }
}

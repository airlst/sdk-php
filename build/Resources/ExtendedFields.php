<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Requests\ExtendedFields\CreateExtendedField;
use AirLST\SdkPhp\Requests\ExtendedFields\CreateExtendedFieldOption;
use AirLST\SdkPhp\Requests\ExtendedFields\DeleteExtendedField;
use AirLST\SdkPhp\Requests\ExtendedFields\DeleteExtendedFieldOption;
use AirLST\SdkPhp\Requests\ExtendedFields\GetExtendedField;
use AirLST\SdkPhp\Requests\ExtendedFields\GetExtendedFieldUsage;
use AirLST\SdkPhp\Requests\ExtendedFields\ListExtendedFields;
use AirLST\SdkPhp\Requests\ExtendedFields\ListExtendedFieldTypes;
use AirLST\SdkPhp\Requests\ExtendedFields\UpdateExtendedField;
use AirLST\SdkPhp\Requests\ExtendedFields\UpdateExtendedFieldOption;
use AirLST\SdkPhp\Resource;
use Saloon\Http\Response;

class ExtendedFields extends Resource
{
    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $fieldKey  Extended field key
     */
    public function getExtendedField(mixed $eventUuid, mixed $fieldKey): Response
    {
        return $this->connector->send(new GetExtendedField($eventUuid, $fieldKey));
    }

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $fieldKey  Extended field key
     */
    public function deleteExtendedField(mixed $eventUuid, mixed $fieldKey): Response
    {
        return $this->connector->send(new DeleteExtendedField($eventUuid, $fieldKey));
    }

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $fieldKey  Extended field key
     * @param array $label     Translatable label object with locale codes as keys
     * @param bool  $unique    Whether the field value must be unique
     * @param array $options   Options array for enum/multiselect_enum fields. Existing options must include their id.
     */
    public function updateExtendedField(
        mixed $eventUuid,
        mixed $fieldKey,
        ?array $label = null,
        ?bool $unique = null,
        ?array $options = null,
    ): Response {
        return $this->connector->send(new UpdateExtendedField($eventUuid, $fieldKey, $label, $unique, $options));
    }

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $fieldKey  Extended field key
     * @param mixed $optionKey Extended field option key
     */
    public function deleteExtendedFieldOption(mixed $eventUuid, mixed $fieldKey, mixed $optionKey): Response
    {
        return $this->connector->send(new DeleteExtendedFieldOption($eventUuid, $fieldKey, $optionKey));
    }

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $fieldKey  Extended field key
     * @param mixed $optionKey Extended field option key
     * @param array $label     Translatable label object
     * @param int   $order     Sort order
     * @param int   $limit     Maximum number of guests that can select this option
     */
    public function updateExtendedFieldOption(
        mixed $eventUuid,
        mixed $fieldKey,
        mixed $optionKey,
        ?array $label = null,
        ?int $order = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new UpdateExtendedFieldOption($eventUuid, $fieldKey, $optionKey, $label, $order, $limit));
    }

    /**
     * @param mixed $eventUuid Event UUID
     */
    public function listExtendedFieldTypes(mixed $eventUuid): Response
    {
        return $this->connector->send(new ListExtendedFieldTypes($eventUuid));
    }

    /**
     * @param mixed $eventUuid Event UUID
     */
    public function listExtendedFields(mixed $eventUuid): Response
    {
        return $this->connector->send(new ListExtendedFields($eventUuid));
    }

    /**
     * @param mixed  $eventUuid    Event UUID
     * @param string $model        The model type this field belongs to. "guest", "booking" and "guestManager" are event-scoped; "contact" and "event" are company-scoped (stored on the event's company and shared across its events).
     * @param string $key          Unique field key (lowercase, underscores only). Must be unique per model within its scope (per event for guest/booking/guestManager, per company for contact/event) and must not collide with a reserved column name.
     * @param array  $label        Translatable label object with locale codes as keys
     * @param string $type         Field type
     * @param string $defaultValue Default value for the field
     * @param bool   $unique       Whether the field value must be unique across guests
     * @param array  $options      Options for enum/multiselect_enum fields (required for these types)
     */
    public function createExtendedField(
        mixed $eventUuid,
        string $model,
        string $key,
        array $label,
        string $type,
        ?string $defaultValue = null,
        ?bool $unique = null,
        ?array $options = null,
    ): Response {
        return $this->connector->send(new CreateExtendedField($eventUuid, $model, $key, $label, $type, $defaultValue, $unique, $options));
    }

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $fieldKey  Extended field key
     */
    public function getExtendedFieldUsage(mixed $eventUuid, mixed $fieldKey): Response
    {
        return $this->connector->send(new GetExtendedFieldUsage($eventUuid, $fieldKey));
    }

    /**
     * @param mixed  $eventUuid Event UUID
     * @param mixed  $fieldKey  Extended field key
     * @param string $key       Unique option key (lowercase, underscores only)
     * @param array  $label     Translatable label object
     * @param int    $order     Sort order
     * @param int    $limit     Maximum number of guests that can select this option
     */
    public function createExtendedFieldOption(
        mixed $eventUuid,
        mixed $fieldKey,
        string $key,
        array $label,
        ?int $order = null,
        ?int $limit = null,
    ): Response {
        return $this->connector->send(new CreateExtendedFieldOption($eventUuid, $fieldKey, $key, $label, $order, $limit));
    }
}

<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Guests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createTemporaryUpload.
 */
class CreateTemporaryUpload extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $guestCode,
        protected string $uuid,
        protected string $key,
        protected string $bucket,
        protected string $name,
        protected int $size,
        protected string $contentType,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/create-temporary-upload";
    }

    public function defaultBody(): array
    {
        return array_filter([
            'uuid' => $this->uuid,
            'key' => $this->key,
            'bucket' => $this->bucket,
            'name' => $this->name,
            'size' => $this->size,
            'content_type' => $this->contentType,
        ]);
    }
}

<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Client\Requests\Events;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getSignedStorageUrl.
 */
class GetSignedStorageUrl extends Request
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
        return "/api/events/{$this->eventUuid}/signed-storage-url";
    }
}

<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Documents;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * getGuestsDocumentsUrls.
 */
class GetGuestsDocumentsUrls extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed $eventUuid    Event UUID
     * @param mixed $documentUuid Document UUID
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $documentUuid,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/documents/{$this->documentUuid}/download";
    }
}

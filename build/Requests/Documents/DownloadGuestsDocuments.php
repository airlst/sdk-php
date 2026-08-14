<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Documents;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * downloadGuestsDocuments.
 *
 * Dispatches a background batch that generates the document for each selected guest and zips the
 * results. The response confirms generation has started; the resulting file is delivered
 * asynchronously.
 */
class DownloadGuestsDocuments extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed $eventUuid    Event UUID
     * @param mixed $documentUuid Document UUID
     * @param array $guests       Array of guest codes to generate the document for
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $documentUuid,
        protected array $guests,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/documents/{$this->documentUuid}/download";
    }

    public function defaultBody(): array
    {
        return array_filter(['guests' => $this->guests]);
    }
}

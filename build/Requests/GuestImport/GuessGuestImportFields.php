<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\GuestImport;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * guessGuestImportFields.
 *
 * Uploads a CSV or XLSX guest file (by S3 key or URL) and returns its header, a preview of the first
 * rows, the row count, the fields that can be imported for the given role, and a best-guess mapping of
 * file columns to importable fields. Call this before "Process guest import" to build the
 * mapped_fields payload. XLSX files are converted to CSV automatically.
 */
class GuessGuestImportFields extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed       $eventUuid        Event UUID
     * @param string      $file             Reference to the guest file to import (CSV or XLSX only). Provide either the S3 key returned by getSignedStorageUrl (recommended: PUT the file bytes to the returned signed URL, then pass the key here — the file stays private and is read server-side with credentials) or a publicly accessible URL that the server fetches.
     * @param bool        $firstRowAsHeader whether the first row of the file contains column headers
     * @param string|null $role             Which entity the rows represent. Defaults to "auto" (guests).
     */
    public function __construct(
        protected mixed $eventUuid,
        protected string $file,
        protected bool $firstRowAsHeader,
        protected ?string $role = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guests/import/guess-fields";
    }

    public function defaultBody(): array
    {
        return array_filter(['file' => $this->file, 'first_row_as_header' => $this->firstRowAsHeader, 'role' => $this->role]);
    }
}

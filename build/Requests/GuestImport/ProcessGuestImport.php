<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\GuestImport;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * processGuestImport.
 *
 * Imports guests (or guest managers) from a CSV or XLSX file in a single server-side request. The file
 * is provided as an uploaded-file reference (see the file field), validated up front, and then
 * processed asynchronously in batches — this is not an all-or-nothing transaction: valid rows are
 * imported while invalid rows are skipped and reported in an error CSV (there is no rollback). The
 * response returns a GuestsImport record whose status starts as "dispatched"; poll "Show guest import"
 * to track progress ("dispatched" → "done") and to retrieve the error report URL once finished. Use
 * "Preview an import file" first to build mapped_fields. For action "update", mapped_fields must
 * include the "main|guest:code" column and rows must not create companions.
 */
class ProcessGuestImport extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed       $eventUuid             Event UUID
     * @param string      $file                  Reference to the guest file to import (CSV or XLSX only). Provide either the S3 key returned by getSignedStorageUrl (recommended: PUT the file bytes to the returned signed URL, then pass the key here — the file stays private and is read server-side with credentials) or a publicly accessible URL that the server fetches.
     * @param bool        $firstRowAsHeader      whether the first row of the file contains column headers
     * @param array       $mappedFields          Ordered list of importable field keys, one per file column. Use null to skip a column. Keys come from the "available_fields" of the preview endpoint (e.g. "contact:first_name", "guest:status", "guest:guest_group_id", "guest:extended_fields:tshirt_size"). A "guest:guest_group_id" column may contain a guest group UUID or its name.
     * @param string      $action                whether to create new guests or update existing ones
     * @param string|null $role                  Which entity the rows represent. Defaults to "auto" (guests).
     * @param array|null  $defaults              Default values applied to every imported row, keyed by importable field key. "guest:status" is required and must be a valid, importable status. "guest:guest_managers" (if provided) is an array of guest manager UUIDs belonging to the event. "guest:guest_group_id" (guest group UUID) assigns every imported guest to that group. Any other importable field key (e.g. "contact:city", "guest:extended_fields:tshirt_size") may also be supplied as an additional property to set a default for that field.
     * @param array|null  $requiredFields        importable field keys that must be non-empty for every row
     * @param string      $marketingOptInSetting How to set the marketing opt-in for imported guests. "present" opts everyone in, "not_present" opts everyone out, "individual" reads it from the file.
     */
    public function __construct(
        protected mixed $eventUuid,
        protected string $file,
        protected bool $firstRowAsHeader,
        protected array $mappedFields,
        protected string $action,
        protected ?string $role = null,
        protected ?array $defaults = null,
        protected ?array $requiredFields = null,
        protected string $marketingOptInSetting = '',
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guests/import";
    }

    public function defaultBody(): array
    {
        return array_filter([
            'file' => $this->file,
            'first_row_as_header' => $this->firstRowAsHeader,
            'mapped_fields' => $this->mappedFields,
            'action' => $this->action,
            'role' => $this->role,
            'defaults' => $this->defaults,
            'required_fields' => $this->requiredFields,
            'marketing_opt_in_setting' => $this->marketingOptInSetting,
        ]);
    }
}

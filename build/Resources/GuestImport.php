<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Requests\GuestImport\GuessGuestImportFields;
use AirLST\SdkPhp\Requests\GuestImport\ProcessGuestImport;
use AirLST\SdkPhp\Requests\GuestImport\ShowGuestImport;
use AirLST\SdkPhp\Resource;
use Saloon\Http\Response;

class GuestImport extends Resource
{
    /**
     * @param mixed  $eventUuid        Event UUID
     * @param string $file             Reference to the guest file to import (CSV or XLSX only). Provide either the S3 key returned by getSignedStorageUrl (recommended: PUT the file bytes to the returned signed URL, then pass the key here — the file stays private and is read server-side with credentials) or a publicly accessible URL that the server fetches.
     * @param bool   $firstRowAsHeader whether the first row of the file contains column headers
     * @param string $role             Which entity the rows represent. Defaults to "auto" (guests).
     */
    public function guessGuestImportFields(
        mixed $eventUuid,
        string $file,
        bool $firstRowAsHeader,
        ?string $role = null,
    ): Response {
        return $this->connector->send(new GuessGuestImportFields($eventUuid, $file, $firstRowAsHeader, $role));
    }

    /**
     * @param mixed  $eventUuid             Event UUID
     * @param string $file                  Reference to the guest file to import (CSV or XLSX only). Provide either the S3 key returned by getSignedStorageUrl (recommended: PUT the file bytes to the returned signed URL, then pass the key here — the file stays private and is read server-side with credentials) or a publicly accessible URL that the server fetches.
     * @param bool   $firstRowAsHeader      whether the first row of the file contains column headers
     * @param array  $mappedFields          Ordered list of importable field keys, one per file column. Use null to skip a column. Keys come from the "available_fields" of the preview endpoint (e.g. "contact:first_name", "guest:status", "guest:guest_group_id", "guest:extended_fields:tshirt_size"). A "guest:guest_group_id" column may contain a guest group UUID or its name.
     * @param string $action                whether to create new guests or update existing ones
     * @param string $role                  Which entity the rows represent. Defaults to "auto" (guests).
     * @param array  $defaults              Default values applied to every imported row, keyed by importable field key. "guest:status" is required and must be a valid, importable status. "guest:guest_managers" (if provided) is an array of guest manager UUIDs belonging to the event. "guest:guest_group_id" (guest group UUID) assigns every imported guest to that group. Any other importable field key (e.g. "contact:city", "guest:extended_fields:tshirt_size") may also be supplied as an additional property to set a default for that field.
     * @param array  $requiredFields        importable field keys that must be non-empty for every row
     * @param string $marketingOptInSetting How to set the marketing opt-in for imported guests. "present" opts everyone in, "not_present" opts everyone out, "individual" reads it from the file.
     */
    public function processGuestImport(
        mixed $eventUuid,
        string $file,
        bool $firstRowAsHeader,
        array $mappedFields,
        string $action,
        ?string $role = null,
        ?array $defaults = null,
        ?array $requiredFields = null,
        string $marketingOptInSetting = '',
    ): Response {
        return $this->connector->send(new ProcessGuestImport($eventUuid, $file, $firstRowAsHeader, $mappedFields, $action, $role, $defaults, $requiredFields, $marketingOptInSetting));
    }

    /**
     * @param mixed $eventUuid        Event UUID
     * @param mixed $guestsImportUuid Guests import UUID
     */
    public function showGuestImport(mixed $eventUuid, mixed $guestsImportUuid): Response
    {
        return $this->connector->send(new ShowGuestImport($eventUuid, $guestsImportUuid));
    }
}

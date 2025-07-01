<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Requests\Guests\ArchiveGuest;
use AirLST\SdkPhp\Requests\Guests\CheckinGuest;
use AirLST\SdkPhp\Requests\Guests\CreateCompanionGuest;
use AirLST\SdkPhp\Requests\Guests\CreateGuests;
use AirLST\SdkPhp\Requests\Guests\CreateRecommendedGuest;
use AirLST\SdkPhp\Requests\Guests\CreateTemporaryUpload;
use AirLST\SdkPhp\Requests\Guests\DeleteGuest;
use AirLST\SdkPhp\Requests\Guests\GetGuest;
use AirLST\SdkPhp\Requests\Guests\GetGuestAttachmentDownloadUrl;
use AirLST\SdkPhp\Requests\Guests\GetGuestAttachments;
use AirLST\SdkPhp\Requests\Guests\GetGuests;
use AirLST\SdkPhp\Requests\Guests\RestoreGuest;
use AirLST\SdkPhp\Requests\Guests\UpdateGuest;
use AirLST\SdkPhp\Requests\Guests\UpdateGuestEmailOptInStatus;
use AirLST\SdkPhp\Requests\Guests\ValidateGuestCode;
use AirLST\SdkPhp\Resource;
use Saloon\Http\Response;

class Guests extends Resource
{
    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */
    public function archiveGuest(mixed $eventUuid, mixed $guestCode): Response
    {
        return $this->connector->send(new ArchiveGuest($eventUuid, $guestCode));
    }

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */
    public function checkinGuest(mixed $eventUuid, mixed $guestCode): Response
    {
        return $this->connector->send(new CheckinGuest($eventUuid, $guestCode));
    }

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */
    public function getGuest(mixed $eventUuid, mixed $guestCode): Response
    {
        return $this->connector->send(new GetGuest($eventUuid, $guestCode));
    }

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */
    public function updateGuest(mixed $eventUuid, mixed $guestCode): Response
    {
        return $this->connector->send(new UpdateGuest($eventUuid, $guestCode));
    }

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */
    public function deleteGuest(mixed $eventUuid, mixed $guestCode): Response
    {
        return $this->connector->send(new DeleteGuest($eventUuid, $guestCode));
    }

    /**
     * @param mixed $eventUuid      Event UUID
     * @param mixed $guestCode      Guest code
     * @param mixed $attachmentUuid Guest attachment UUID
     */
    public function getGuestAttachmentDownloadUrl(mixed $eventUuid, mixed $guestCode, mixed $attachmentUuid): Response
    {
        return $this->connector->send(new GetGuestAttachmentDownloadUrl($eventUuid, $guestCode, $attachmentUuid));
    }

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */
    public function getGuestAttachments(mixed $eventUuid, mixed $guestCode): Response
    {
        return $this->connector->send(new GetGuestAttachments($eventUuid, $guestCode));
    }

    /**
     * @param mixed  $eventUuid       Event UUID
     * @param int    $perPage         Number of items per page
     * @param int    $page            Page number
     * @param string $search          Quick search
     * @param string $filtersStatuseq Filter field operator. Template: filters(field*operator)=value. One of: eq (equal), neq (not equal), like, gt (greater than), gte (greater than or equal), lt (less than), lte (less than or equal). If operator is not provided eq will be used as default. If you want to filter by nested fields, use the : separator to indicate nesting levels. For example: filters(contact:sex*eq)=male targets the sex field inside contact. filters(booking:extended_fields->team_name*eq)=Dev targets the team_name field inside the extended_fields object (represented with ->), which is inside booking.
     * @param string $sortsRole0      Sorts array. Template: sorts(field*order)=desc
     * @param int    $since           Timestamp to get guests updated/deleted since
     */
    public function getGuests(
        mixed $eventUuid,
        ?int $perPage = null,
        ?int $page = null,
        ?string $search = null,
        ?string $filtersStatuseq = null,
        ?string $sortsRole0 = null,
        ?int $since = null,
    ): Response {
        return $this->connector->send(new GetGuests($eventUuid, $perPage, $page, $search, $filtersStatuseq, $sortsRole0, $since));
    }

    /**
     * @param mixed $eventUuid Event UUID
     */
    public function createGuests(mixed $eventUuid): Response
    {
        return $this->connector->send(new CreateGuests($eventUuid));
    }

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */
    public function restoreGuest(mixed $eventUuid, mixed $guestCode): Response
    {
        return $this->connector->send(new RestoreGuest($eventUuid, $guestCode));
    }

    /**
     * @param mixed $eventUuid     Event UUID
     * @param mixed $mainGuestCode The code of the main guest
     */
    public function createCompanionGuest(mixed $eventUuid, mixed $mainGuestCode): Response
    {
        return $this->connector->send(new CreateCompanionGuest($eventUuid, $mainGuestCode));
    }

    /**
     * @param mixed $eventUuid     Event UUID
     * @param mixed $mainGuestCode The code of the main guest
     */
    public function createRecommendedGuest(mixed $eventUuid, mixed $mainGuestCode): Response
    {
        return $this->connector->send(new CreateRecommendedGuest($eventUuid, $mainGuestCode));
    }

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */
    public function updateGuestEmailOptInStatus(mixed $eventUuid, mixed $guestCode): Response
    {
        return $this->connector->send(new UpdateGuestEmailOptInStatus($eventUuid, $guestCode));
    }

    /**
     * @param mixed $eventUuid Event UUID
     */
    public function validateGuestCode(mixed $eventUuid): Response
    {
        return $this->connector->send(new ValidateGuestCode($eventUuid));
    }

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */
    public function createTemporaryUpload(mixed $eventUuid, mixed $guestCode): Response
    {
        return $this->connector->send(new CreateTemporaryUpload($eventUuid, $guestCode));
    }
}

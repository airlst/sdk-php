<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Paginator;
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
     * @param mixed  $eventUuid Event UUID
     * @param mixed  $guestCode Guest code
     * @param string $type      The type of checkin
     * @param int    $timestamp Checkin/Checkout timestamp in unix timestamp format
     * @param string $device    Checkin/Checkout device identifier
     * @param string $location  Checkin/Checkout location identifier
     */
    public function checkinGuest(
        mixed $eventUuid,
        mixed $guestCode,
        string $type,
        int $timestamp,
        ?string $device = null,
        ?string $location = null,
    ): Response {
        return $this->connector->send(new CheckinGuest($eventUuid, $guestCode, $type, $timestamp, $device, $location));
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
     * @param mixed  $eventUuid          Event UUID
     * @param mixed  $guestCode          Guest code
     * @param string $status             The guest status
     * @param array  $extendedFields     Extended fields values mapped with their keys
     * @param bool   $sendAutomatedEmail Send automated email to the guest with the booking details
     * @param array  $booking            Booking details for guest
     * @param array  $contact            Contact details for guest
     */
    public function updateGuest(
        mixed $eventUuid,
        mixed $guestCode,
        ?string $status = null,
        ?array $extendedFields = null,
        ?bool $sendAutomatedEmail = null,
        ?array $booking = null,
        ?array $contact = null,
    ): Response {
        return $this->connector->send(new UpdateGuest($eventUuid, $guestCode, $status, $extendedFields, $sendAutomatedEmail, $booking, $contact));
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
    ): Paginator {
        return $this->connector->paginate(new GetGuests($eventUuid, $perPage, $page, $search, $filtersStatuseq, $sortsRole0, $since));
    }

    /**
     * @param mixed  $eventUuid          Event UUID
     * @param string $status             The guest status
     * @param array  $extendedFields     Extended fields values mapped with their keys
     * @param bool   $sendAutomatedEmail Send automated email to the guest with the booking details
     * @param array  $booking            Booking details for guest
     * @param array  $contact            Contact details for guest
     * @param array  $companions         Array of companions of the main guest
     */
    public function createGuests(
        mixed $eventUuid,
        ?string $status = null,
        ?array $extendedFields = null,
        ?bool $sendAutomatedEmail = null,
        ?array $booking = null,
        ?array $contact = null,
        ?array $companions = null,
    ): Response {
        return $this->connector->send(new CreateGuests($eventUuid, $status, $extendedFields, $sendAutomatedEmail, $booking, $contact, $companions));
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
     * @param mixed  $eventUuid          Event UUID
     * @param mixed  $mainGuestCode      The code of the main guest
     * @param string $status             The guest status
     * @param array  $extendedFields     Extended fields values mapped with their keys
     * @param array  $contact            Contact details for guest
     * @param bool   $sendAutomatedEmail Send automated email to the guest with the booking details
     */
    public function createCompanionGuest(
        mixed $eventUuid,
        mixed $mainGuestCode,
        ?string $status = null,
        ?array $extendedFields = null,
        ?array $contact = null,
        ?bool $sendAutomatedEmail = null,
    ): Response {
        return $this->connector->send(new CreateCompanionGuest($eventUuid, $mainGuestCode, $status, $extendedFields, $contact, $sendAutomatedEmail));
    }

    /**
     * @param mixed  $eventUuid      Event UUID
     * @param mixed  $mainGuestCode  The code of the main guest
     * @param string $status         Recommended guest status
     * @param array  $extendedFields Extended fields values mapped with their keys
     * @param array  $contact        Contact details for guest
     */
    public function createRecommendedGuest(
        mixed $eventUuid,
        mixed $mainGuestCode,
        ?string $status = null,
        ?array $extendedFields = null,
        ?array $contact = null,
    ): Response {
        return $this->connector->send(new CreateRecommendedGuest($eventUuid, $mainGuestCode, $status, $extendedFields, $contact));
    }

    /**
     * @param mixed  $eventUuid        Event UUID
     * @param mixed  $guestCode        Guest code
     * @param string $emailOptInStatus Opt in status
     */
    public function updateGuestEmailOptInStatus(mixed $eventUuid, mixed $guestCode, string $emailOptInStatus): Response
    {
        return $this->connector->send(new UpdateGuestEmailOptInStatus($eventUuid, $guestCode, $emailOptInStatus));
    }

    /**
     * @param mixed  $eventUuid Event UUID
     * @param string $code      The guest code
     */
    public function validateGuestCode(mixed $eventUuid, ?string $code = null): Response
    {
        return $this->connector->send(new ValidateGuestCode($eventUuid, $code));
    }

    /**
     * @param mixed $eventUuid Event UUID
     * @param mixed $guestCode Guest code
     */
    public function createTemporaryUpload(
        mixed $eventUuid,
        mixed $guestCode,
        string $uuid,
        string $key,
        string $bucket,
        string $name,
        int $size,
        string $contentType,
    ): Response {
        return $this->connector->send(new CreateTemporaryUpload($eventUuid, $guestCode, $uuid, $key, $bucket, $name, $size, $contentType));
    }
}

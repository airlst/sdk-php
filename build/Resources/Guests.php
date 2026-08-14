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
use AirLST\SdkPhp\Requests\Guests\UpdateGuests;
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
     * @param mixed $eventUuid    Event UUID
     * @param mixed $guestCode    Guest code
     * @param bool  $includeSeats Include the guest's table-seating assignments (seats) in the response. Defaults to false.
     */
    public function getGuest(mixed $eventUuid, mixed $guestCode, ?bool $includeSeats = null): Response
    {
        return $this->connector->send(new GetGuest($eventUuid, $guestCode, $includeSeats));
    }

    /**
     * @param mixed  $eventUuid          Event UUID
     * @param mixed  $guestCode          Guest code
     * @param string $status             The guest status
     * @param array  $extendedFields     Extended fields values mapped with their keys
     * @param bool   $sendAutomatedEmail Send automated email to the guest with the booking details
     * @param array  $booking            Booking details for guest
     * @param array  $contact            Contact details for guest
     * @param int    $maxCompanions      Maximum number of companions allowed for this guest
     * @param int    $maxRecommendations Maximum number of recommendations allowed for this guest
     * @param bool   $marketingOptIn     Whether the guest opted in to marketing emails
     * @param string $guestGroupId       UUID of the guest group the guest should belong to
     * @param array  $guestManagers      Array of guest manager UUIDs to assign to the guest
     */
    public function updateGuest(
        mixed $eventUuid,
        mixed $guestCode,
        ?string $status = null,
        ?array $extendedFields = null,
        ?bool $sendAutomatedEmail = null,
        ?array $booking = null,
        ?array $contact = null,
        ?int $maxCompanions = null,
        ?int $maxRecommendations = null,
        ?bool $marketingOptIn = null,
        ?string $guestGroupId = null,
        ?array $guestManagers = null,
    ): Response {
        return $this->connector->send(new UpdateGuest($eventUuid, $guestCode, $status, $extendedFields, $sendAutomatedEmail, $booking, $contact, $maxCompanions, $maxRecommendations, $marketingOptIn, $guestGroupId, $guestManagers));
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
     * @param int    $perPage         Number of items per page. Defaults to 25.
     * @param int    $page            Page number
     * @param string $search          Quick search
     * @param string $filtersStatuseq Filter field operator. Template: filters(field*operator)=value. One of: eq (equal), neq (not equal), like, gt (greater than), gte (greater than or equal), lt (less than), lte (less than or equal). If operator is not provided eq will be used as default. If you want to filter by nested fields, use the : separator to indicate nesting levels. For example: filters(contact:sex*eq)=male targets the sex field inside contact. filters(booking:extended_fields->team_name*eq)=Dev targets the team_name field inside the extended_fields object (represented with ->), which is inside booking.
     * @param string $sortsRole0      Sorts array. Template: sorts(field*order)=desc
     * @param int    $since           Timestamp to get guests updated/deleted since
     * @param bool   $includeSeats    Include each guest's table-seating assignments (seats) in the response. Defaults to false.
     */
    public function getGuests(
        mixed $eventUuid,
        ?int $perPage = null,
        ?int $page = null,
        ?string $search = null,
        ?string $filtersStatuseq = null,
        ?string $sortsRole0 = null,
        ?int $since = null,
        ?bool $includeSeats = null,
    ): Paginator {
        return $this->connector->paginate(new GetGuests($eventUuid, $perPage, $page, $search, $filtersStatuseq, $sortsRole0, $since, $includeSeats));
    }

    /**
     * @param mixed  $eventUuid          Event UUID
     * @param array  $booking            Booking details for guest
     * @param array  $contact            Contact details for guest
     * @param mixed  $guests             Either the string "all" to target every guest in the event (optionally narrowed by "filters"), or an explicit list of guest codes. The same attribute changes are applied to every targeted guest.
     * @param array  $filters            Optional. Only applied when "guests" is "all"; narrows which guests are targeted.
     * @param string $status             The guest status to set on all listed guests
     * @param array  $extendedFields     Extended field values mapped with their keys
     * @param bool   $sendAutomatedEmail Send the status-triggered automated email to every updated guest (defaults to false)
     * @param int    $maxCompanions      Maximum number of companions allowed for each guest
     * @param int    $maxRecommendations Maximum number of recommendations allowed for each guest
     * @param bool   $marketingOptIn     Whether the guests opted in to marketing emails
     * @param string $guestGroupId       UUID of the guest group the guests should belong to
     * @param array  $guestManagers      Array of guest manager UUIDs to assign to the guests
     */
    public function updateGuests(
        mixed $eventUuid,
        ?array $booking = null,
        ?array $contact = null,
        mixed $guests = null,
        ?array $filters = null,
        ?string $status = null,
        ?array $extendedFields = null,
        ?bool $sendAutomatedEmail = null,
        ?int $maxCompanions = null,
        ?int $maxRecommendations = null,
        ?bool $marketingOptIn = null,
        ?string $guestGroupId = null,
        ?array $guestManagers = null,
    ): Response {
        return $this->connector->send(new UpdateGuests($eventUuid, $booking, $contact, $guests, $filters, $status, $extendedFields, $sendAutomatedEmail, $maxCompanions, $maxRecommendations, $marketingOptIn, $guestGroupId, $guestManagers));
    }

    /**
     * @param mixed  $eventUuid          Event UUID
     * @param string $status             The guest status
     * @param array  $extendedFields     Extended fields values mapped with their keys
     * @param bool   $sendAutomatedEmail Send automated email to the guest with the booking details
     * @param array  $booking            Booking details for guest
     * @param array  $contact            Contact details for guest
     * @param string $role               Role of the created main guest. With guest_manager, companions are prohibited and send_automated_email must be omitted or false.
     * @param string $code               Optional custom guest code. Must be unique within the event.
     * @param int    $maxCompanions      Maximum number of companions allowed for this guest
     * @param int    $maxRecommendations Maximum number of recommendations allowed for this guest
     * @param bool   $marketingOptIn     Whether the guest opted in to marketing emails
     * @param string $guestGroupId       UUID of the guest group the guest should belong to
     * @param string $contactId          UUID of an existing contact of the event's company to link the guest to, instead of creating a new contact. Mutually exclusive with `contact` - sending both fails validation. To also correct the contact data, update the guest afterwards. The contact must not already have a guest in this event when the event has unique fields configured.
     * @param string $contactCode        Alternative to `contact_id` for callers that only hold the contact code, which is what the company API exposes as the public contact identifier (see getContactDetails). Resolved within the event's company. Mutually exclusive with both `contact` and `contact_id`.
     * @param array  $guestManagers      Array of guest manager UUIDs to assign to the guest
     * @param array  $companions         Array of companions of the main guest
     */
    public function createGuests(
        mixed $eventUuid,
        ?string $status = null,
        ?array $extendedFields = null,
        ?bool $sendAutomatedEmail = null,
        ?array $booking = null,
        ?array $contact = null,
        ?string $role = null,
        ?string $code = null,
        ?int $maxCompanions = null,
        ?int $maxRecommendations = null,
        ?bool $marketingOptIn = null,
        ?string $guestGroupId = null,
        ?string $contactId = null,
        ?string $contactCode = null,
        ?array $guestManagers = null,
        ?array $companions = null,
    ): Response {
        return $this->connector->send(new CreateGuests($eventUuid, $status, $extendedFields, $sendAutomatedEmail, $booking, $contact, $role, $code, $maxCompanions, $maxRecommendations, $marketingOptIn, $guestGroupId, $contactId, $contactCode, $guestManagers, $companions));
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
     * @param bool   $marketingOptIn     Whether the companion guest opted in to marketing emails
     * @param string $guestGroupId       UUID of the guest group the companion guest should belong to
     * @param array  $guestManagers      Array of guest manager UUIDs to assign to the companion guest
     */
    public function createCompanionGuest(
        mixed $eventUuid,
        mixed $mainGuestCode,
        ?string $status = null,
        ?array $extendedFields = null,
        ?array $contact = null,
        ?bool $sendAutomatedEmail = null,
        ?bool $marketingOptIn = null,
        ?string $guestGroupId = null,
        ?array $guestManagers = null,
    ): Response {
        return $this->connector->send(new CreateCompanionGuest($eventUuid, $mainGuestCode, $status, $extendedFields, $contact, $sendAutomatedEmail, $marketingOptIn, $guestGroupId, $guestManagers));
    }

    /**
     * @param mixed  $eventUuid          Event UUID
     * @param mixed  $mainGuestCode      The code of the main guest
     * @param string $status             Recommended guest status
     * @param array  $extendedFields     Extended fields values mapped with their keys
     * @param array  $booking            Booking details for guest
     * @param array  $contact            Contact details for guest
     * @param string $role               Role of the created recommended guest
     * @param string $code               Optional custom guest code. Must be unique within the event.
     * @param bool   $sendAutomatedEmail Send automated email to the guest with the booking details
     * @param int    $maxCompanions      Maximum number of companions allowed for this guest
     * @param int    $maxRecommendations Maximum number of recommendations allowed for this guest
     * @param bool   $marketingOptIn     Whether the recommended guest opted in to marketing emails
     * @param string $guestGroupId       UUID of the guest group the recommended guest should belong to
     * @param array  $guestManagers      Array of guest manager UUIDs to assign to the recommended guest
     */
    public function createRecommendedGuest(
        mixed $eventUuid,
        mixed $mainGuestCode,
        ?string $status = null,
        ?array $extendedFields = null,
        ?array $booking = null,
        ?array $contact = null,
        ?string $role = null,
        ?string $code = null,
        ?bool $sendAutomatedEmail = null,
        ?int $maxCompanions = null,
        ?int $maxRecommendations = null,
        ?bool $marketingOptIn = null,
        ?string $guestGroupId = null,
        ?array $guestManagers = null,
    ): Response {
        return $this->connector->send(new CreateRecommendedGuest($eventUuid, $mainGuestCode, $status, $extendedFields, $booking, $contact, $role, $code, $sendAutomatedEmail, $maxCompanions, $maxRecommendations, $marketingOptIn, $guestGroupId, $guestManagers));
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
    public function validateGuestCode(mixed $eventUuid, string $code): Response
    {
        return $this->connector->send(new ValidateGuestCode($eventUuid, $code));
    }

    /**
     * @param mixed  $eventUuid        Event UUID
     * @param string $uuid             Optional UUID for the media record. Must be unique within the media table.
     * @param array  $customProperties optional custom properties to store on the media record
     */
    public function createTemporaryUpload(
        mixed $eventUuid,
        ?string $uuid = null,
        string $key = '',
        string $bucket = '',
        string $name = '',
        int $size = 0,
        string $contentType = '',
        ?array $customProperties = null,
    ): Response {
        return $this->connector->send(new CreateTemporaryUpload($eventUuid, $uuid, $key, $bucket, $name, $size, $contentType, $customProperties));
    }
}

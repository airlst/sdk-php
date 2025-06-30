<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Client\Requests\Guests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getGuestAttachmentDownloadUrl.
 */
class GetGuestAttachmentDownloadUrl extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param mixed $eventUuid      Event UUID
     * @param mixed $guestCode      Guest code
     * @param mixed $attachmentUuid Guest attachment UUID
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $guestCode,
        protected mixed $attachmentUuid,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guests/{$this->guestCode}/attachments/{$this->attachmentUuid}/url";
    }
}

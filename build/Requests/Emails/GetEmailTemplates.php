<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Client\Requests\Emails;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * getEmailTemplates.
 */
class GetEmailTemplates extends Request
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
        return "/api/events/{$this->eventUuid}/emails/email-templates";
    }
}

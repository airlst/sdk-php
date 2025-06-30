<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Client\Requests\Events;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * sendEmailTemplate.
 */
class SendEmailTemplate extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed $eventUuid         Event UUID
     * @param mixed $emailTemplateUuid Email Template UUID
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $emailTemplateUuid,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/emails/email-templates/{$this->emailTemplateUuid}/send";
    }
}

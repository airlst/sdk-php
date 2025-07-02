<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Events;

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
     * @param mixed      $eventUuid         Event UUID
     * @param mixed      $emailTemplateUuid Email Template UUID
     * @param array|null $guests            Array of guest codes to which the email will be sent
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $emailTemplateUuid,
        protected ?array $guests = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/emails/email-templates/{$this->emailTemplateUuid}/send";
    }

    public function defaultBody(): array
    {
        return array_filter(['guests' => $this->guests]);
    }
}

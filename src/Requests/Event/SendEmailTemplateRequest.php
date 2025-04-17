<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Event;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class SendEmailTemplateRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param array<string, mixed> $data
     */
    public function __construct(
        protected string $eventUuid,
        protected string $emailTemplateUuid,
        protected array $data,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/events/{$this->eventUuid}/emails/email-templates/{$this->emailTemplateUuid}/send";
    }

    /**
     * @return array<string, mixed>
     */
    protected function defaultBody(): array
    {
        return $this->data;
    }
}

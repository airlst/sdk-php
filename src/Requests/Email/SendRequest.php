<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Email;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class SendRequest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param array<string, mixed> $data
     */
    public function __construct(protected string $uuid, protected array $data) {}

    public function resolveEndpoint(): string
    {
        return '/' . $this->uuid . '/send';
    }

    /**
     * @return array<string, mixed>
     */
    protected function defaultBody(): array
    {
        return $this->data;
    }
}

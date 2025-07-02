<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Requests\Guests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * validateGuestCode.
 */
class ValidateGuestCode extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed       $eventUuid Event UUID
     * @param string|null $code      The guest code
     */
    public function __construct(
        protected mixed $eventUuid,
        protected ?string $code = null,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guests/validate-code";
    }

    public function defaultBody(): array
    {
        return array_filter(['code' => $this->code]);
    }
}

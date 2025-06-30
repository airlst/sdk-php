<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Client\Requests\Guests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createRecommendedGuest.
 */
class CreateRecommendedGuest extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    /**
     * @param mixed $eventUuid     Event UUID
     * @param mixed $mainGuestCode The code of the main guest
     */
    public function __construct(
        protected mixed $eventUuid,
        protected mixed $mainGuestCode,
    ) {}

    public function resolveEndpoint(): string
    {
        return "/api/events/{$this->eventUuid}/guests/{$this->mainGuestCode}/recommendations";
    }
}

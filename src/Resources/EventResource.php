<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Contracts\EventResourceContract;
use AirLST\SdkPhp\Requests\Event\GetRequest;
use AirLST\SdkPhp\Requests\Event\ListRequest;
use AirLST\SdkPhp\Requests\Event\SendEmailTemplateRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class EventResource extends BaseResource implements EventResourceContract
{
    public function list(): Response
    {
        return $this->connector->send(new ListRequest());
    }

    public function get(string $eventId): Response
    {
        return $this->connector->send(new GetRequest($eventId));
    }

    public function sendEmailTemplate(string $eventUuid, string $emailTemplateUuid, array $body): Response
    {
        return $this->connector->send(new SendEmailTemplateRequest($eventUuid, $emailTemplateUuid, $body));
    }
}

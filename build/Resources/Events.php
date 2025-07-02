<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Requests\Events\GetEvent;
use AirLST\SdkPhp\Requests\Events\GetSignedStorageUrl;
use AirLST\SdkPhp\Requests\Events\SendEmailTemplate;
use AirLST\SdkPhp\Resource;
use Saloon\Http\Response;

class Events extends Resource
{
    /**
     * @param mixed $eventUuid         Event UUID
     * @param mixed $emailTemplateUuid Email Template UUID
     * @param array $guests            Array of guest codes to which the email will be sent
     */
    public function sendEmailTemplate(mixed $eventUuid, mixed $emailTemplateUuid, ?array $guests = null): Response
    {
        return $this->connector->send(new SendEmailTemplate($eventUuid, $emailTemplateUuid, $guests));
    }

    /**
     * @param mixed $eventUuid Event UUID
     */
    public function getSignedStorageUrl(mixed $eventUuid): Response
    {
        return $this->connector->send(new GetSignedStorageUrl($eventUuid));
    }

    /**
     * @param mixed $eventUuid Event UUID
     */
    public function getEvent(mixed $eventUuid): Response
    {
        return $this->connector->send(new GetEvent($eventUuid));
    }
}

<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Client\Resource;

use AirLST\SdkPhp\Client\Requests\Events\GetEvent;
use AirLST\SdkPhp\Client\Requests\Events\GetSignedStorageUrl;
use AirLST\SdkPhp\Client\Requests\Events\SendEmailTemplate;
use AirLST\SdkPhp\Client\Resource;
use Saloon\Http\Response;

class Events extends Resource
{
    /**
     * @param mixed $eventUuid         Event UUID
     * @param mixed $emailTemplateUuid Email Template UUID
     */
    public function sendEmailTemplate(mixed $eventUuid, mixed $emailTemplateUuid): Response
    {
        return $this->connector->send(new SendEmailTemplate($eventUuid, $emailTemplateUuid));
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

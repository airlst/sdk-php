<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Requests\Emails\GetEmailTemplates;
use AirLST\SdkPhp\Requests\Emails\SendEmailTemplate;
use AirLST\SdkPhp\Resource;
use Saloon\Http\Response;

class Emails extends Resource
{
    /**
     * @param mixed $eventUuid Event UUID
     */
    public function getEmailTemplates(mixed $eventUuid): Response
    {
        return $this->connector->send(new GetEmailTemplates($eventUuid));
    }

    /**
     * @param mixed $eventUuid         Event UUID
     * @param mixed $emailTemplateUuid Email Template UUID
     * @param array $guests            Array of guest codes to which the email will be sent
     */
    public function sendEmailTemplate(mixed $eventUuid, mixed $emailTemplateUuid, array $guests): Response
    {
        return $this->connector->send(new SendEmailTemplate($eventUuid, $emailTemplateUuid, $guests));
    }
}

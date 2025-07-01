<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Requests\Emails\GetEmailTemplates;
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
}

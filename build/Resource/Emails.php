<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Client\Resource;

use AirLST\SdkPhp\Client\Requests\Emails\GetEmailTemplates;
use AirLST\SdkPhp\Client\Resource;
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

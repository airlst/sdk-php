<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Requests\Events\GetEvent;
use AirLST\SdkPhp\Requests\Events\GetSignedStorageUrl;
use AirLST\SdkPhp\Resource;
use Saloon\Http\Response;

class Events extends Resource
{
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

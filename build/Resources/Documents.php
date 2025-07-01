<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Requests\Documents\GetEventDocuments;
use AirLST\SdkPhp\Requests\Documents\GetGuestsDocumentsUrls;
use AirLST\SdkPhp\Resource;
use Saloon\Http\Response;

class Documents extends Resource
{
    /**
     * @param mixed $eventUuid    Event UUID
     * @param mixed $documentUuid Document UUID
     */
    public function getGuestsDocumentsUrls(mixed $eventUuid, mixed $documentUuid): Response
    {
        return $this->connector->send(new GetGuestsDocumentsUrls($eventUuid, $documentUuid));
    }

    /**
     * @param mixed $eventUuid Event UUID
     */
    public function getEventDocuments(mixed $eventUuid): Response
    {
        return $this->connector->send(new GetEventDocuments($eventUuid));
    }
}

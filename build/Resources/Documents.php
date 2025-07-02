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
     * @param array $guests       Array of guest codes to which you want to download their documents
     */
    public function getGuestsDocumentsUrls(mixed $eventUuid, mixed $documentUuid, ?array $guests = null): Response
    {
        return $this->connector->send(new GetGuestsDocumentsUrls($eventUuid, $documentUuid, $guests));
    }

    /**
     * @param mixed $eventUuid Event UUID
     */
    public function getEventDocuments(mixed $eventUuid): Response
    {
        return $this->connector->send(new GetEventDocuments($eventUuid));
    }
}

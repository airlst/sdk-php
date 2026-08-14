<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Requests\Documents\DownloadGuestsDocuments;
use AirLST\SdkPhp\Requests\Documents\GetEventDocuments;
use AirLST\SdkPhp\Resource;
use Saloon\Http\Response;

class Documents extends Resource
{
    /**
     * @param mixed $eventUuid    Event UUID
     * @param mixed $documentUuid Document UUID
     * @param array $guests       Array of guest codes to generate the document for
     */
    public function downloadGuestsDocuments(mixed $eventUuid, mixed $documentUuid, array $guests): Response
    {
        return $this->connector->send(new DownloadGuestsDocuments($eventUuid, $documentUuid, $guests));
    }

    /**
     * @param mixed $eventUuid Event UUID
     */
    public function getEventDocuments(mixed $eventUuid): Response
    {
        return $this->connector->send(new GetEventDocuments($eventUuid));
    }
}

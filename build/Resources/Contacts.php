<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Requests\Contacts\GetContactDetails;
use AirLST\SdkPhp\Requests\Contacts\GetContactEvents;
use AirLST\SdkPhp\Requests\Contacts\ValidateContactCode;
use AirLST\SdkPhp\Resource;
use Saloon\Http\Response;

class Contacts extends Resource
{
    /**
     * @param mixed $contactCode Contact code
     */
    public function getContactEvents(mixed $contactCode): Response
    {
        return $this->connector->send(new GetContactEvents($contactCode));
    }

    /**
     * @param mixed $contactCode Contact code
     */
    public function getContactDetails(mixed $contactCode): Response
    {
        return $this->connector->send(new GetContactDetails($contactCode));
    }

    public function validateContactCode(): Response
    {
        return $this->connector->send(new ValidateContactCode());
    }
}

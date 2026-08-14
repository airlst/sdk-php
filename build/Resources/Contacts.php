<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Requests\Contacts\GetContactDetails;
use AirLST\SdkPhp\Requests\Contacts\GetContactEvents;
use AirLST\SdkPhp\Requests\Contacts\UpdateContact;
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

    /**
     * @param mixed $contactCode Contact code
     * @param array $contact     Contact details for guest
     */
    public function updateContact(mixed $contactCode, ?array $contact = null): Response
    {
        return $this->connector->send(new UpdateContact($contactCode, $contact));
    }

    /**
     * @param string $code The contact code
     */
    public function validateContactCode(string $code): Response
    {
        return $this->connector->send(new ValidateContactCode($code));
    }
}

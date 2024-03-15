<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\CoreApi;
use AirLST\SdkPhp\RequestMethod;

class Guest extends CoreApi
{
    /** 
     * @return array{'data': array{'code': string}}
     */
    public function validateCode(string $code): array
    {
        return $this->send(
            uri: "{$this->getEventURL()}/guests/validate-code", 
            method: RequestMethod::POST, 
            options: ['form_params' => ['code' => $code]]
        );
    }

    /** 
     * @return array{'data': array<mixed>}
     */
    public function get(string $code): array
    {
        return $this->send("{$this->getEventURL()}/guests/{$code}");
    }

    /** 
     * @param array<mixed> $data
     * @return array{'data': array<mixed>}
     */
    public function create(array $data): array
    {
        return $this->send(
            uri: "{$this->getEventURL()}/guests", 
            method: RequestMethod::POST, 
            options: ['form_params' => $data]
        );
    }

    /** 
     * @param array<mixed> $data
     * @return array{'data': array<mixed>}
     */
    public function update(string $code, array $data): array
    {
        return $this->send(
            uri: "{$this->getEventURL()}/guests/{$code}", 
            method: RequestMethod::PUT, 
            options: ['form_params' => $data]
        );
    }

    public function getEventURL(): string
    {
        return "/events/{$this->eventId}";
    }
}

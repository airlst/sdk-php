<?php

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\CoreApi;

class Event extends CoreApi
{
    /**
     * @return array<mixed>
     */
    public function get(): array
    {
        return $this->send("/events/{$this->eventId}");
    }
}
<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

class Resource
{
    public string $eventId;

    public function setEventId(string $eventId): void
    {
        $this->eventId = $eventId;
    }

    public function getEventURL(): string
    {
        return "/api/events/{$this->eventId}";
    }
}

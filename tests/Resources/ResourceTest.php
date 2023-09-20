<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Resources;

use AirLST\SdkPhp\Resources\Resource;
use PHPUnit\Framework\TestCase;

class ResourceTest extends TestCase
{
    protected Resource $resource;

    public function testSetTestEventId(): void
    {
        $this->resource->setEventId('event-uuid');

        $this->assertEquals('event-uuid', $this->resource->eventId);
    }

    public function testGetEventURL(): void
    {
        $this->resource->setEventId('event-uuid');

        $this->assertEquals('/api/events/event-uuid', $this->resource->getEventURL());
    }

    public function setUp(): void
    {
        $this->resource = new Resource();
    }
}

<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Resources;

use AirLST\SdkPhp\Resources\Event;
use AirLST\SdkPhp\Tests\TestCase;

class EventTest extends TestCase
{
    public function testList(): void
    {
        $expects = ['data' => [
            ['name' => 'event-name']
        ]];

        $this->fake($expects);

        $response = $this->api->get();

        $this->assertEquals($expects, $response);
        $this->assertCount(count($expects['data']), $response);
    }

    public function testGet(): void
    {
        $expects = ['data' => ['name' => 'event-name']];

        $this->fake($expects);

        $this->assertEquals($expects, $this->api->get());
    }

    protected function setUp(): void
    {
        $this->api = new Event();
        $this->api->setApiKey('api-key');
        $this->api->setEventId('event-id');
    }
}

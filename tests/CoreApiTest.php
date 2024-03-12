<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests;

use AirLST\SdkPhp\CoreApi;
use AirLST\SdkPhp\RequestMethod;

class CoreApiTest extends TestCase
{
    public function testSetBaseURL(): void
    {
        $this->api->setBaseURL('https://airlst.test');

        $this->assertEquals(
            'https://airlst.test',
            $this->api->baseURL
        );
    }

    public function testSetEventId(): void
    {
        $this->api->setEventId('event-id');

        $this->assertEquals('event-id', $this->api->eventId);
    }

    public function testSetApiKey(): void
    {
        $this->api->setApiKey('api-key');

        $this->assertEquals('api-key', $this->api->apiKey);
    }

    public function testSetLocale(): void
    {
        $this->api->setLocale('en-US');

        $this->assertEquals('en-US', $this->api->locale);
    }

    public function testGetEventUrl(): void
    {
        $this->api->setEventId('event-id');

        $this->assertEquals('event-id', $this->api->eventId);
    }

    public function testGetRequestHeaders(): void
    {
        $this->api->setApiKey('api-key')->setLocale('en-GB');

        $this->assertEquals([
            'content-type' => 'application/json',
            'accept' => 'application/json',
            'x-api-key' => 'api-key',
            'accept-language' => 'en-GB',
        ], $this->api->getRequestHeaders());
    }

    public function testSendSuccessful(): void
    {
        $expects = ['data' => [
            'event' => [
                'uuid' => 'event-uuid',
            ]       
        ]];

        $this->fake($expects);

        $this->api->setApiKey('api-key');
        $this->api->setEventId('event-id');

        $response = $this->api->send('/events/event-uuid', RequestMethod::GET);

        $this->assertEquals($expects, $response);
    }

    protected function setUp(): void
    {
        $this->api = new CoreApi();
    }
}
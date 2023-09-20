<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests;

use AirLST\SdkPhp\Client;
use AirLST\SdkPhp\RequestMethod;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    protected Client $client;

    public function testGetRequestHeaders(): void
    {
        $this->assertEquals([
            'content-type' => 'application/json',
            'accept' => 'application/json',
            'x-api-key' => 'api-key',
        ], $this->client->getRequestHeaders());
    }

    public function testSend(): void
    {
        $mock = new MockHandler([
            new Response(200, [], json_encode(['data' => ['event' => [
                'uuid' => 'event-uuid',
            ]]])),
        ]);

        $handlerStack = HandlerStack::create($mock);
        $this->client->setHandler($handlerStack);

        $response = $this->client->send('/events/event-uuid', RequestMethod::PUT, ['event' => [
            'uuid' => 'event-uuid',
        ]]);

        $this->assertEquals(['data' => [
            'event' => [
                'uuid' => 'event-uuid',
            ],
        ]], $response);
    }

    public function testSendThrowsExceptionOnHttpError(): void
    {
        $mock = new MockHandler([
            new RequestException('Error Communicating with Server', new Request(
                RequestMethod::GET->value,
                'test'
            )),
        ]);

        $handlerStack = HandlerStack::create($mock);
        $this->client->setHandler($handlerStack);

        $this->expectException(RequestException::class);
        $this->client->send('/events/event-uuid/guests/guest-code');
    }

    protected function setUp(): void
    {
        $this->client = new Client('https://example.com', 'api-key');
    }
}

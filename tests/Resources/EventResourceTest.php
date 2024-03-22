<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Requests\Event;

use AirLST\SdkPhp\CoreApi;
use AirLST\SdkPhp\Requests\Event\GetRequest;
use AirLST\SdkPhp\Requests\Event\ListRequest;
use AirLST\SdkPhp\Resources\EventResource;
use AirLST\SdkPhp\Tests\TestCase;
use Saloon\Http\Request;
use Saloon\Http\Response;

class EventResourceTest extends TestCase
{
    public function testList(): void
    {
        $expects = ['data' => ['events' => []]];

        $mockClient = $this->mock(ListRequest::class, $expects);

        $resource = $this->resource($this->core->withMockClient($mockClient));
        $result = $resource->list();
        
        $mockClient->assertSent(
            fn (Request $request, Response $response) => $result->body() === $response->body()
        );
    }

    public function testGet(): void
    {
        $expects = ['data' => ['event' => ['id' => 'event-id']]];

        $mockClient = $this->mock(GetRequest::class, $expects);

        $resource = $this->resource($this->core->withMockClient($mockClient));
        $result = $resource->get($expects['data']['event']['id']);

        $mockClient->assertSent(
            fn (Request $request, Response $response) => $result->body() === $response->body()
        );
    }

    protected function resource(CoreApi $core): EventResource
    {
        return new EventResource($core);
    }
}
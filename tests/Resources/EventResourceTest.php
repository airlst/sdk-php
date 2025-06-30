<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Resources;

use AirLST\SdkPhp\Client\CoreApi;
use AirLST\SdkPhp\Requests\Event\GetRequest;
use AirLST\SdkPhp\Requests\Event\ListRequest;
use AirLST\SdkPhp\Requests\Event\SendEmailTemplateRequest;
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

    public function testSendEmailTemplate(): void
    {
        $mockClient = $this->mock(request: SendEmailTemplateRequest::class, status: 204);

        $resource = $this->resource($this->core->withMockClient($mockClient));
        $result = $resource->sendEmailTemplate(
            'event-id',
            'email-template-id',
            ['guests' => [
                'ABCD1234',
                'ABCD2345'
            ]]
        );

        $mockClient->assertSent(
            fn (Request $request, Response $response) => $request instanceof SendEmailTemplateRequest && $result->status() === $response->status()
        );
    }

    protected function resource(CoreApi $core): EventResource
    {
        return new EventResource($core);
    }
}

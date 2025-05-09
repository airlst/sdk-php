<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Resources;

use AirLST\SdkPhp\CoreApi;
use AirLST\SdkPhp\Requests\Guest\CreateRequest;
use AirLST\SdkPhp\Requests\Guest\DeleteRequest;
use AirLST\SdkPhp\Requests\Guest\GetRequest;
use AirLST\SdkPhp\Requests\Guest\ListRequest;
use AirLST\SdkPhp\Requests\Guest\UpdateRequest;
use AirLST\SdkPhp\Requests\Guest\ValidateCodeRequest;
use AirLST\SdkPhp\Resources\GuestResource;
use AirLST\SdkPhp\Tests\TestCase;
use Saloon\Http\Request;
use Saloon\Http\Response;

class GuestResourceTest extends TestCase
{
    public function testList(): void
    {
        $mockClient = $this->mock(ListRequest::class, ['data' => ['guests' => []]]);

        $resource = $this->resource($this->core->withMockClient($mockClient));
        $result = $resource->list();

        $mockClient->assertSent(
            fn (Request $request, Response $response) => $request instanceof ListRequest && $result->body() === $response->body()
        );
    }

    public function testValidateCode(): void
    {
        $mockClient = $this->mock(ValidateCodeRequest::class, ['data' => ['valid' => true]]);

        $resource = $this->resource($this->core->withMockClient($mockClient));
        $result = $resource->validateCode('xyz');

        $mockClient->assertSent(
            fn (Request $request, Response $response) =>
            $request instanceof ValidateCodeRequest && $result->body() === $response->body()
        );
    }

    public function testGet(): void
    {
        $mockClient = $this->mock(GetRequest::class, ['data' => ['code' => 'xyz']]);

        $resource = $this->resource($this->core->withMockClient($mockClient));
        $result = $resource->get('xyz');

        $mockClient->assertSent(
            fn (Request $request, Response $response) =>
            $request instanceof GetRequest && $result->body() === $response->body()
        );
    }

    public function testCreate(): void
    {
        $mockClient = $this->mock(CreateRequest::class, ['data' => ['status' => 'confirmed']]);

        $resource = $this->resource($this->core->withMockClient($mockClient));
        $result = $resource->create([
            'name' => 'John Lennon',
            'email' => 'j.lennon@sdk.com',
            'status' => 'confirmed'
        ]);

        $mockClient->assertSent(
            fn (Request $request, Response $response) =>
            $request instanceof CreateRequest && $result->body() === $response->body()
        );
    }

    public function testUpdate(): void
    {
        $mockClient = $this->mock(UpdateRequest::class, ['data' => ['status' => 'confirmed']]);

        $resource = $this->resource($this->core->withMockClient($mockClient));
        $result = $resource->update('xyz', ['status' => 'confirmed']);

        $mockClient->assertSent(
            fn (Request $request, Response $response) =>
            $request instanceof UpdateRequest && $result->body() === $response->body()
        );
    }

    public function testDelete(): void
    {
        $mockClient = $this->mock(DeleteRequest::class);

        $resource = $this->resource($this->core->withMockClient($mockClient));
        $result = $resource->delete('xyz');

        $mockClient->assertSent(
            fn (Request $request, Response $response) =>
            $request instanceof DeleteRequest && $result->body() === $response->body()
        );
    }

    protected function resource(CoreApi $core): GuestResource
    {
        return new GuestResource($core);
    }
}

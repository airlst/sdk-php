<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Requests\Event;

use AirLST\SdkPhp\CoreAPI;
use AirLST\SdkPhp\Requests\Guest\CreateRequest;
use AirLST\SdkPhp\Requests\Guest\GetRequest;
use AirLST\SdkPhp\Requests\Guest\UpdateRequest;
use AirLST\SdkPhp\Requests\Guest\ValidateCodeRequest;
use AirLST\SdkPhp\Resources\GuestResource;
use AirLST\SdkPhp\Tests\TestCase;
use Saloon\Http\Request;
use Saloon\Http\Response;

class GuestResourceTest extends TestCase
{
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

    protected function resource(CoreAPI $core): GuestResource
    {
        return new GuestResource($core);
    }
}
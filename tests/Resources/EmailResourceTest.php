<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Resources;

use AirLST\SdkPhp\CoreApi;
use AirLST\SdkPhp\Requests\Email\SendRequest;
use AirLST\SdkPhp\Resources\EmailResource;
use AirLST\SdkPhp\Tests\TestCase;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * @internal
 */
final class EmailResourceTest extends TestCase
{
    public function testSend(): void
    {
        $mockClient = $this->mock(request: SendRequest::class, status: 204);

        $resource = $this->resource($this->core->withMockClient($mockClient));
        $result = $resource->send('email-template-uid', ['guests' => [
            'ABCD1234',
            'ABCD2345',
        ]]);

        $mockClient->assertSent(
            fn (Request $request, Response $response): bool => $request instanceof SendRequest && $result->status() === $response->status()
        );
    }

    private function resource(CoreApi $core): EmailResource
    {
        return new EmailResource($core);
    }
}

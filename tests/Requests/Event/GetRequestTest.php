<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Requests\Event;

use AirLST\SdkPhp\Requests\Event\GetRequest;
use AirLST\SdkPhp\Tests\TestCase;

/**
 * @internal
 */
final class GetRequestTest extends TestCase
{
    public function testResolveEndpoint(): void
    {
        $request = new GetRequest('event-id');
        $this->assertSame('/events/event-id', $request->resolveEndpoint());
    }

    public function testGet(): void
    {
        $mockClient = $this->mock(GetRequest::class);

        $this->core->withMockClient($mockClient)->send(new GetRequest('event-id'));

        $mockClient->assertSent(GetRequest::class);
    }
}

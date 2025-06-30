<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Requests\Event;

use AirLST\SdkPhp\Requests\Event\ListRequest;
use AirLST\SdkPhp\Tests\TestCase;

/**
 * @internal
 */
final class ListRequestTest extends TestCase
{
    public function testList(): void
    {
        $mockClient = $this->mock(ListRequest::class);

        $this->core->withMockClient($mockClient)->send(new ListRequest());

        $mockClient->assertSent(ListRequest::class);
    }
}

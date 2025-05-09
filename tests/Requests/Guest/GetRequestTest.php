<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Requests\Guest;

use AirLST\SdkPhp\Requests\Guest\GetRequest;
use AirLST\SdkPhp\Tests\TestCase;

class GetRequestTest extends TestCase
{
    public function testGet(): void
    {
        $mockClient = $this->mock(GetRequest::class);

        $this->core->withMockClient($mockClient)->send(new GetRequest('guest-code'));

        $mockClient->assertSent(GetRequest::class);
    }
}

<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Requests\Guest;

use AirLST\SdkPhp\Requests\Guest\ListRequest;
use AirLST\SdkPhp\Tests\TestCase;

class ListRequestTest extends TestCase
{
    public function testList(): void
    {
        $mockClient = $this->mock(ListRequest::class);

        $this->core->withMockClient($mockClient)->send(new ListRequest(['page' => 1]));
        
        $mockClient->assertSent(ListRequest::class);
    }
}

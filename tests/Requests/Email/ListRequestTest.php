<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Requests\Email;

use AirLST\SdkPhp\Requests\Email\ListRequest;
use AirLST\SdkPhp\Tests\TestCase;

class ListRequestTest extends TestCase
{
    public function testList(): void
    {
        $mockClient = $this->mock(ListRequest::class);
        
        $this->core
            ->withMockClient($mockClient)
            ->send(new ListRequest());
        
        $mockClient->assertSent(ListRequest::class);
    }
}

<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Requests\Guest;

use AirLST\SdkPhp\Requests\Guest\CreateRequest;
use AirLST\SdkPhp\Tests\TestCase;

class CreateRequestTest extends TestCase
{
    public function testCreate(): void
    {
        $mockClient = $this->mock(CreateRequest::class);
        
        $this->core->withMockClient($mockClient)->send(new CreateRequest(['status' => 'confirmed']));
        
        $mockClient->assertSent(CreateRequest::class);
    }
}

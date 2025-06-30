<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Requests\Guest;

use AirLST\SdkPhp\Requests\Guest\DeleteRequest;
use AirLST\SdkPhp\Tests\TestCase;

class DeleteRequestTest extends TestCase
{
    public function testDelete(): void
    {
        $mockClient = $this->mock(DeleteRequest::class);

        $this->core->withMockClient($mockClient)->send(new DeleteRequest('guest-code'));

        $mockClient->assertSent(DeleteRequest::class);
    }
}

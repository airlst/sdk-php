<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Requests\Email;

use AirLST\SdkPhp\Requests\Email\SendRequest;
use AirLST\SdkPhp\Tests\TestCase;

class SendRequestTest extends TestCase
{
    public function testUpdate(): void
    {
        $mockClient = $this->mock(SendRequest::class);
        
        $this->core
            ->withMockClient($mockClient)
            ->send(new SendRequest(
                'email-template-uid', ['guests' => [
                    "ABCD1234",
                    "ABCD2345"
                ]]
            ));
        
        $mockClient->assertSent(SendRequest::class);
    }
}

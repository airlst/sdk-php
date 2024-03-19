<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Requests\Guest;

use AirLST\SdkPhp\CoreAPI;
use AirLST\SdkPhp\Requests\Guest\ValidateCodeRequest;
use AirLST\SdkPhp\Tests\TestCase;

class ValidateCodeRequestTest extends TestCase
{
    public function testValidatesCode(): void
    {
        $mockClient = $this->mock(ValidateCodeRequest::class);
        
        $this->core->withMockClient($mockClient)->send(new ValidateCodeRequest('event-id'));
        
        $mockClient->assertSent(ValidateCodeRequest::class);
    }
}

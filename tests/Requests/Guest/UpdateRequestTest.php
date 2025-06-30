<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Requests\Guest;

use AirLST\SdkPhp\Requests\Guest\UpdateRequest;
use AirLST\SdkPhp\Tests\TestCase;

/**
 * @internal
 */
final class UpdateRequestTest extends TestCase
{
    public function testUpdate(): void
    {
        $mockClient = $this->mock(UpdateRequest::class);

        $this->core->withMockClient($mockClient)->send(new UpdateRequest('xyz', ['status' => 'confirmed']));

        $mockClient->assertSent(UpdateRequest::class);
    }
}

<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Build;

use AirLST\SdkPhp\Client\AirLST;
use AirLST\SdkPhp\Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

/**
 * @internal
 */
class AirLSTSDKTest extends TestCase
{
    #[Test]
    public function itSetsCorrectBaseUrl(): void
    {
        $this->assertInstanceOf(AirLST::class, $this->client);

        $this->assertSame('https://airlst.app', $this->client->resolveBaseUrl());
    }
}

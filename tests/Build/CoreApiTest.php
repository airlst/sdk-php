<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Build;

use AirLST\SdkPhp\CoreApi;
use AirLST\SdkPhp\Tests\TestCase;
use PHPUnit\Framework\Attributes\Test;

/**
 * @internal
 */
class CoreApiTest extends TestCase
{
    #[Test]
    public function itSetsCorrectBaseUrl(): void
    {
        $this->assertInstanceOf(CoreApi::class, $this->core);

        $this->assertSame('https://airlst.app', $this->core->resolveBaseUrl());
    }
}

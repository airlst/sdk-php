<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests;

use AirLST\SdkPhp\CoreAPI;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

class TestCase extends BaseTestCase
{
    protected CoreAPI $core;

    public function mock(string $class, array $expects = []): MockClient
    {
        return new MockClient([
            $class => MockResponse::make($expects, 200),
        ]);
    }

    public function setUp(): void
    {
        $this->core = new CoreAPI('api-key');
    }
}
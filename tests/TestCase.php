<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests;

use AirLST\SdkPhp\CoreApi;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Saloon\Config;

class TestCase extends BaseTestCase
{
    protected CoreApi $core;

    public function mock(
        string $request,
        array $expects = [],
        int $status = 200
    ): MockClient
    {
        return new MockClient([
            $request => MockResponse::make($expects, $status),
        ]);
    }

    protected function setUp(): void
    {
        parent::setUp();

        MockClient::destroyGlobal();
        Config::preventStrayRequests();

        $this->core = new CoreApi('api-key');
    }
}

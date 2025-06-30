<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests;

use AirLST\SdkPhp\Client\AirLST;
use AirLST\SdkPhp\CoreApi;
use PHPUnit\Framework\TestCase as BaseTestCase;
use Saloon\Config;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;

/**
 * @internal
 */
class TestCase extends BaseTestCase
{
    protected CoreApi $core;
    protected AirLST $client;

    public function mock(
        string $request,
        array $expects = [],
        int $status = 200
    ): MockClient {
        return new MockClient([
            $request => MockResponse::make($expects, $status),
        ]);
    }

    protected function setUp(): void
    {
        parent::setUp();

        Config::preventStrayRequests();

        $this->core = new CoreApi('api-key');
        $this->client = new AirLST('api-key');
    }
}

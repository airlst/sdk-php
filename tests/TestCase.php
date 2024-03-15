<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests;

use AirLST\SdkPhp\CoreApi;
use AirLST\SdkPhp\Resources\Event;
use AirLST\SdkPhp\Resources\Guest;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected CoreApi|Event|Guest $api;

    protected function fake(array $expects, ?int $status = 200): void
    {
        $this->api->setHandler(HandlerStack::create(
            new MockHandler([new Response($status, [], json_encode($expects))])
        ));
    }
}
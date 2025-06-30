<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests;

use AirLST\SdkPhp\Client\AirLST;
use AirLST\SdkPhp\CoreApi;
use AirLST\SdkPhp\Resources\EmailResource;
use AirLST\SdkPhp\Resources\EventResource;
use AirLST\SdkPhp\Resources\GuestResource;

/**
 * @internal
 */
class CoreApiTest extends TestCase
{
    protected CoreApi $core;

    public function testResolveBaseUrl(): void
    {
        $baseUrl = 'https://staging.airlst.app/api';

        $this->core->setBaseUrl($baseUrl);

        $this->assertSame($baseUrl, $this->core->resolveBaseUrl());
    }

    public function testEvent(): void
    {
        $this->assertInstanceOf(EventResource::class, $this->core->event());
    }

    public function testGuest(): void
    {
        $this->assertInstanceOf(
            GuestResource::class,
            $this->core->guest('event-id')
        );
    }

    public function testEmail(): void
    {
        $this->assertInstanceOf(
            EmailResource::class,
            $this->core->email('event-id')
        );
    }
}

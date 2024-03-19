<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests;

use AirLST\SdkPhp\CoreApi;
use AirLST\SdkPhp\Resources\EventResource;
use AirLST\SdkPhp\Resources\GuestResource;

class CoreApiTest extends TestCase
{
    protected CoreAPI $core;

    public function testResolveBaseUrl(): void
    {
        $baseUrl = 'https://staging.airlst.app/api';

        $this->core->setBaseUrl($baseUrl);

        $this->assertEquals($baseUrl, $this->core->resolveBaseUrl());
    }

    public function testEvent(): void
    {
        $this->assertInstanceOf(EventResource::class, $this->core->event());
    }

    public function testGuest(): void
    {
        $this->assertInstanceOf(GuestResource::class, $this->core->guest('event-id'));
    }
}
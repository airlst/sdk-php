<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Resources;

use AirLST\SdkPhp\Resources\Guest;
use AirLST\SdkPhp\Tests\TestCase;

class GuestTest extends TestCase
{
    public function testValidateCode(): void
    {
        $expects = ['data' => ['code' => 'guest-code']];

        $this->fake($expects);

        $this->assertEquals($expects, $this->api->validateCode('guest-code'));
    }

    public function testGet(): void
    {
        $expects = ['data' => ['code' => 'guest-code']];

        $this->fake($expects);

        $this->assertEquals($expects, $this->api->get('guest-code'));
    }

    public function testCreate(): void
    {
        $expects = [
            'data' => [
                'contact' => ['first_name' => 'John Lennon']
            ]
        ];

        $this->fake($expects);

        $this->assertEquals($expects, $this->api->create($expects));
    }

    public function testUpdate(): void
    {
        $code = 'guest-code';
        $expects = [
            'data' => [
                'contact' => ['first_name' => 'John Lennon']
            ]
        ];

        $this->fake($expects);

        $this->assertEquals($expects, $this->api->update($code, $expects));
    }

    public function testGetEventURL(): void
    {
        $this->api->setEventId('event-id');

        $this->assertEquals('/events/event-id', $this->api->getEventURL());
    }

    protected function setUp(): void
    {
        $this->api = new Guest();
        $this->api->setApiKey('api-key');
        $this->api->setEventId('event-id');
    }
}

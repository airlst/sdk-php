<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Resources;

use AirLST\SdkPhp\Client;
use AirLST\SdkPhp\Resources\Guest;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class GuestTest extends TestCase
{
    protected MockObject $client;
    protected Guest $guest;

    public function testValidateCode(): void
    {
        $this->client->expects($this->once())
            ->method('send')
            ->willReturn(['data' => ['code' => 'guest-code']]);

        $this->assertEquals(
            ['data' => ['code' => 'guest-code']],
            $this->guest->validateCode('guest-code')
        );
    }

    public function testGet(): void
    {
        $this->client->expects($this->once())
            ->method('send')
            ->willReturn(['data' => ['code' => 'guest-code']]);

        $this->assertEquals(
            ['data' => ['code' => 'guest-code']],
            $this->guest->get('guest-code')
        );
    }

    public function testCreate(): void
    {
        $data = ['contact' => ['first_name' => 'John Lennon']];

        $this->client->expects($this->once())
            ->method('send')
            ->willReturn(['data' => $data]);

        $this->assertEquals(
            ['data' => $data],
            $this->guest->create($data)
        );
    }

    public function testUpdate(): void
    {
        $code = 'guest-code';
        $data = ['contact' => ['first_name' => 'John Lennon']];

        $this->client->expects($this->once())
            ->method('send')
            ->willReturn(['data' => $data]);

        $this->assertEquals(
            ['data' => $data],
            $this->guest->update($code, $data)
        );
    }

    protected function setUp(): void
    {
        $this->client = $this->getMockBuilder(Client::class)
            ->setConstructorArgs([
                'baseURL' => 'https://example.com',
                'apiKey' => 'api-key',
            ])
            ->disableOriginalConstructor()
            ->getMock();

        $this->guest = new Guest($this->client);
        $this->guest->setEventId('event-uuid');
    }
}

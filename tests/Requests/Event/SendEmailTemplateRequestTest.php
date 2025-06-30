<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Tests\Requests\Event;

use AirLST\SdkPhp\Requests\Event\SendEmailTemplateRequest;
use AirLST\SdkPhp\Tests\TestCase;

class SendEmailTemplateRequestTest extends TestCase
{
    public function testResolveEndpoint(): void
    {
        $request = new SendEmailTemplateRequest(
            'event-id',
            'email-template-id',
            ['guests' => ['ABCD1234', 'ABCD2345']]
        );

        $this->assertSame(
            '/events/event-id/emails/email-templates/email-template-id/send',
            $request->resolveEndpoint()
        );
    }

    public function testSendEmailTemplate(): void
    {
        $mockClient = $this->mock(SendEmailTemplateRequest::class);

        $this->core->withMockClient($mockClient)->send(new SendEmailTemplateRequest(
            'event-id',
            'email-template-id',
            ['guests' => ['ABCD1234', 'ABCD2345']]
        ));

        $mockClient->assertSent(SendEmailTemplateRequest::class);
    }
}

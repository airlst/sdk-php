<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Contracts\EmailResourceContract;
use AirLST\SdkPhp\Requests\Email\SendRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class EmailResource extends BaseResource implements EmailResourceContract
{
    public function send(string $uuid, array $body): Response
    {
        return $this->connector->send(new SendRequest($uuid, $body));
    }
}
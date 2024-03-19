<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Contracts\GuestResourceContract;
use AirLST\SdkPhp\Requests\Guest\CreateRequest;
use AirLST\SdkPhp\Requests\Guest\GetRequest;
use AirLST\SdkPhp\Requests\Guest\UpdateRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use AirLST\SdkPhp\Requests\Guest\ValidateCodeRequest;

class GuestResource extends BaseResource implements GuestResourceContract
{
    public function validateCode(string $code): Response
    {
        return $this->connector->send(new ValidateCodeRequest($code));
    }

    public function get(string $code): Response
    {
        return $this->connector->send(new GetRequest($code));
    }

    public function create(array $data): Response
    {
        return $this->connector->send(new CreateRequest($data));
    }

    public function update(string $code, array $data): Response
    {
        return $this->connector->send(new UpdateRequest($code, $data));
    }
}
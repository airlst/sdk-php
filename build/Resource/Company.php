<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Client\Resource;

use AirLST\SdkPhp\Client\Requests\Company\GetCompanyEvents;
use AirLST\SdkPhp\Client\Resource;
use Saloon\Http\Response;

class Company extends Resource
{
    public function getCompanyEvents(): Response
    {
        return $this->connector->send(new GetCompanyEvents());
    }
}

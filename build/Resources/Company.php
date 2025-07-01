<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Requests\Company\GetCompanyEvents;
use AirLST\SdkPhp\Resource;
use Saloon\Http\Response;

class Company extends Resource
{
    public function getCompanyEvents(): Response
    {
        return $this->connector->send(new GetCompanyEvents());
    }
}

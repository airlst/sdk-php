<?php

declare(strict_types=1);

namespace AirLST\SdkPhp;

use Saloon\Http\Connector;

class Resource
{
    public function __construct(
        protected Connector $connector,
    ) {}
}

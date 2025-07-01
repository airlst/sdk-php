<?php

declare(strict_types=1);

namespace AirLST\SdkPhp;

class Resource
{
    public function __construct(
        protected CoreApi $connector,
    ) {}
}

<?php

declare(strict_types=1);

namespace AirLST\SdkPhp;

enum RequestMethod: string
{
    case GET = 'GET';
    case POST = 'POST';
    case PUT = 'PUT';
    case DELETE = 'DELETE';
}

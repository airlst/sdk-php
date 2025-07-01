![example workflow](https://github.com/airlst/sdk-php/actions/workflows/ci.yml/badge.svg)

# AirLST Core PHP SDK

This package provides a PHP SDK for the Core API, allowing developers to easily integrate AirLST Core services into their applications. 
It is built using AirLST OpenAPI specifications and is built with the help of crescat-io/saloon-sdk-generator tool.

## Requirements
- PHP >= 8.4 
- Composer


## Installation

``` bash
composer require airlst/sdk-php
```

## Usage
``` php
use AirLST\SdkPhp\CoreApi;

$connector = new CoreApi('api-key');

$response = $connector->guest()->getGuests('event-uuid');
```

## Contributing

If you want to contribute to this SDK, you can generate the SDK from the fresh OpenAPI specification using the following command:
``` bash
composer build
```

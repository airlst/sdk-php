# Core API SDK for PHP
This package is currently work in progress

## Requirements
- PHP 8.2
- Composer

## Installation
Add the package to your composer.json repositories array.
``` json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/airlst/sdk-php.git"
    }
]
```
Require the package.
``` bash
composer require airlst/sdk-php
```

## Usage
First, you need to set the API Key
``` php
use AirLST\SdkPhp\CoreApi;

$core = new Core('API-KEY-HERE');
```

## Event Resource
As of now there are only 2 available methods

### List all company events
> **Important:** This method requires the API key must be company bound!

``` php
$response = $core->event()->list();
$response->json(); // Get response data as array
```

### Get event details using UUID
``` php
$response = $core->event()->get('EVENT-UUID-HERE');
// Get response data as array
$response->json(); // Get response data as array
```


![example workflow](https://github.com/airlst/sdk-php/actions/workflows/ci.yml/badge.svg)

# Core API SDK for PHP

## Requirements
- PHP 8.2
- Composer


## Installation
Add the package to your composer.json repositories array.
``` json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/airlst/sdk-php"
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

$core = new Core('api-key-here');
```

## Event Resource
There are currently only 2 available methods

### List all company events
> **Important:** This method requires the API key must be company bound!

``` php
$response = $core->event()->list();

$response->json(); // Get response data as array
```

### Get event details using UUID
``` php
$response = $core->event()->get('event-uuid-here');

$response->json(); // Get response data as array
```

## Guest Resource

### Validate guest code
``` php
$response = $core->guest('event-uuid-here')->validateCode('guest-code');

$response->json(); // Get response data as array
```

### Get guest with code
``` php
$response = $core->guest('event-uuid-here')->get('guest-code');

$response->json(); // Get response data as array
```

### Create guest
``` php
$response = $core->guest('event-uuid-here')->create([
    'status' => 'confirmed',
    'contact' => [
        'first_name' => 'John',
        'last_name' => 'Doe'
    ]
]);

$response->json(); // Get response data as array
```

### Update existing guest with code
``` php
$response = $core->guest('event-uuid-here')->update('guest-code', [
    'status' => 'confirmed',
    'contact' => [
        'last_name' => 'Wick'
    ]
]);

$response->json(); // Get response data as array
```

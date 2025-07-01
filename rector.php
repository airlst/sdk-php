<?php

declare(strict_types=1);

use Rector\Caching\ValueObject\Storage\FileCacheStorage;

$factory = new Airlst\RectorConfig\Factory([
    'src',
    'build',
//    'tests',
]);

return $factory
    ->withLaravelRules()
    ->create()
    ->withCache('storage/framework/cache/rector', FileCacheStorage::class);

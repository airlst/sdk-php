<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Laravel;

use AirLST\SdkPhp\Client;
use Illuminate\Support\ServiceProvider;

class AirLSTSdkPhpServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../../config/config.php' => config_path('airlst.php'),
            ], 'config');
        }
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/config.php', 'airlst');

        $this->app->bind(Client::class, function () {
            return new Client(
                config('airlst.base_url'),
                config('airlst.api_key')
            );
        });
    }
}

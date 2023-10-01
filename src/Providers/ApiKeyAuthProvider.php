<?php
namespace PiratePixelX\LarapiKit\Providers;

use Illuminate\Support\ServiceProvider;

class ApiKeyAuthProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['router']->aliasMiddleware('lara.api', \PiratePixelX\LarapiKit\Middleware\ApiKeyAuthMiddleware::class);

        $this->publishes([
            __DIR__.'/../config/larapi.php' => config_path('larapi.php'),
        ], 'larapi-config');

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}

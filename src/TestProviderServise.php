<?php

namespace Alzugbieh\Pic;

use Illuminate\Support\ServiceProvider;

class TestProviderServise extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Alzugbieh\Pic\TestController');
        $this->LoadViewsFrom(__DIR__.'/views','hamza');

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';

    }
}

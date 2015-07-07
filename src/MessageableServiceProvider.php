<?php

namespace DraperStudio\Messageable;

use Illuminate\Support\ServiceProvider;

/**
 * Class MessageableServiceProvider.
 */
class MessageableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('/migrations'),
        ], 'migrations');
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }
}

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
        $fromPath = __DIR__.'/../database/migrations/';
        $toPath = database_path('/migrations/');

        $this->publishes([
            $fromPath.'create_messages_table.php' => $toPath.date('Y_m_d_His', time()).'_create_messages_table.php',
            $fromPath.'create_participants_table.php' => $toPath.date('Y_m_d_His', time()).'_create_participants_table.php',
            $fromPath.'create_threads_table.php' => $toPath.date('Y_m_d_His', time()).'_create_threads_table.php',
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

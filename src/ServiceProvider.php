<?php

namespace DraperStudio\Messageable;

use Illuminate\Support\ServiceProvider as IlluminateProvider;

/**
 * Class ServiceProvider.
 */
class ServiceProvider extends IlluminateProvider
{
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

    public function register()
    {
        //
    }
}

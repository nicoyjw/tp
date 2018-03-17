<?php

namespace Nick\BiboxApi;

use Illuminate\Support\ServiceProvider;

class BiboxClientServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //publish
        $this->publishes([
            __DIR__.'/config/bibox-api.php' => config_path('bibox-api.php'),
        ]);

    }


    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }
}

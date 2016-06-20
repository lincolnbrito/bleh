<?php

namespace LincolnBrito\Bleh;

use Illuminate\Support\ServiceProvider;

class BlehServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.DIRECTORY_SEPARATOR.'Config'.DIRECTORY_SEPARATOR.'bleh.php' => config_path('bleh.php'),
            __DIR__.DIRECTORY_SEPARATOR.'Config'.DIRECTORY_SEPARATOR.'bleh_config1.php' => config_path('bleh_config1.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // config
        $this->mergeConfigFrom(__DIR__.DIRECTORY_SEPARATOR.'Config'.DIRECTORY_SEPARATOR.'bleh.php', 'bleh');
        $this->mergeConfigFrom(__DIR__.DIRECTORY_SEPARATOR.'Config'.DIRECTORY_SEPARATOR.'bleh_config1.php', 'bleh');

        $this->app['bleh'] = $this->app->share(function($app){
            return new Bleh;
        });
    }
}

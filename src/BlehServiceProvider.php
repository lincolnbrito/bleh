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
        // Route
        include __DIR__.DIRECTORY_SEPARATOR.'/routes.php';

        // Lnaguage
        $this->loadTranslationsFrom(__DIR__.'/Lang', 'bleh');

        $this->publishes([
            __DIR__.DIRECTORY_SEPARATOR.'Config'.DIRECTORY_SEPARATOR.'bleh.php' => config_path('bleh.php'),
            __DIR__.DIRECTORY_SEPARATOR.'Config'.DIRECTORY_SEPARATOR.'bleh_config1.php' => config_path('bleh_config1.php')
        ], 'config');

        $this->publishes([
            __DIR__.'/path/to/views' => base_path('resources/views/vendor/courier')
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

        // view
        $this->loadViewsFrom(__DIR__.DIRECTORY_SEPARATOR.'Views', 'bleh');

        $this->app['bleh'] = $this->app->share(function($app){
            return new Bleh;
        });
    }
}

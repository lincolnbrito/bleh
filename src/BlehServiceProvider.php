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
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $DS = DIRECTORY_SEPARATOR;
        // config
        $this->mergeConfigFrom(__DIR__.$DS.'Config'.$DS.'bleh.php', 'bleh');
        
        $this->app['bleh'] = $this->app->share(function($app){
            return new Bleh;
        });
    }
}

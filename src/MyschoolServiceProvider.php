<?php

namespace Wonderapp\Yellowapp;

use Illuminate\Support\ServiceProvider;


class MyschoolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    protected $defer = false;


    public function boot()
    {
        //
        $this->publishes([
        __DIR__.'/views' => base_path('resources/views/vendor/yellowschool/myschool'),
    ] ,'myschool');

        // Establish Views Namespace
    if (is_dir(  base_path('resources/views/vendor/yellowschool/myschool' ) ) ) {
        // The package views have been published - use those views.
        $this->loadViewsFrom( base_path( 'resources/views/vendor/yellowschool/myschool' ), 'myschool');
    } else {
        // The package views have not been published. Use the defaults.
          $this->loadViewsFrom(__DIR__.'/views', 'myschool');
    }
        
       // $this->package('laraveldaily/timezones');

      //  $this->loadViewsFrom(__DIR__.'/views', 'timezones');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        include __DIR__.'/routes.php';
        $this->app->make('Wonderapp\Yellowapp\MyschoolController');

        $this->app->singleton('Myschool', function ()
        {
            return $this->app->make('Wonderapp\Yellowapp\Myschool');
        });

        // Shortcut so developers don't need to add an Alias in app/config/app.php
        $this->app->booting(function ()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Myschool', 'Wonderapp\Yellowapp\Facade\Myschool');
        });


    }

      /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
       // return ['Myschool'];
    }
}

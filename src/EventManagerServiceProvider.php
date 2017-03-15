<?php

namespace Duikb00t\EventManager;

use Strava\API\Factory;
use Illuminate\Support\ServiceProvider;

class EventManagerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function register()
    {   
        $this->loadRoutesFrom(__DIR__.'/../routes/routes.php');
        //$this->loadViewsFrom(__DIR__.'/resources/views', 'strava');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot() {
        
    }
}

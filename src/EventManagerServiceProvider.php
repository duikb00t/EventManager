<?php

namespace Duikb00t\EventManager;

use Strava\API\Factory;
use Illuminate\Support\ServiceProvider;

class EventManagerServiceProvider extends ServiceProvider
{
    
    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {   
        // Migrations
        if ( !$this->checkIfMigrationAlreadyBeenBulished()) {

            // Run the migration
            $timestamp = date('Y_m_d_His', time());

            $this->publishes([
                __DIR__ . "/../../migrations/create_managers_table.stub" => database_path("migrations/{$timestamp}_create_managers_table.php"),
                ], 'migrations');
        }


        // Setup the routes
        $this->loadRoutesFrom(__DIR__.'/../routes/routes.php');

        // Setup the views
        //$this->loadViewsFrom(__DIR__.'/resources/views', 'strava');



    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function register() {
        
    }

    /**
     * Check if the migration is already been executed or not.
     */
    public function checkIfMigrationAlreadyBeenBulished() {
        $files = glob(database_path('/migrations/*_create_managers_table.php'));
        return count($files) > 0;
    }
}

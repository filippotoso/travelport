<?php

namespace FilippoToso\Travelport;

use Illuminate\Support\ServiceProvider;

class TravelportServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/config.php' => config_path('travelport.php'),
            ], 'config');
        }
    }

    /** 
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'travelport');

        $this->app->singleton('travelport', function () {
            $loggerClass = config('travelport.logger');
            $logger = class_exists($loggerClass) ? new $loggerClass() : null;
            return new Travelport(config('travelport.user_id'), config('travelport.password'), config('travelport.target_branch'), config('travelport.region'), config('travelport.production'), $logger);
        });
    }
}

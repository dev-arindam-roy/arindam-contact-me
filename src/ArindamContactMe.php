<?php

namespace Arindam\ContactMe;

use Illuminate\Support\ServiceProvider;

class ArindamContactMe extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/web.php');

        $this->loadViewsFrom(__DIR__ , 'hiarindam');
    }
}
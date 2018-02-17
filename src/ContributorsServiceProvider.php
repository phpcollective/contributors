<?php

namespace PHPCollective\Contributors;

use Illuminate\Support\ServiceProvider;

class ContributorsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if(!$this->app->routesAreCached()){
            require __DIR__ . '/route.php';
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

    }
}
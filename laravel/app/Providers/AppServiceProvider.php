<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Gestion\PhotoGestionInterface', 
            'App\Gestion\PhotoGestion'
        );

        $this->app->bind(
            'App\Gestion\EmailRepositoryInterface', 
            'App\Gestion\EmailRepository'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

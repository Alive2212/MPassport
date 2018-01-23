<?php

namespace Alive2212\MPassport;

use Illuminate\Support\ServiceProvider;

class MPassportServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes/api.php';
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Carbon::setLocale(env('LOCALE', 'ca'));
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Determinar la carpeta "public".
        // Dinahosting empra la www
        // Comentar per treballar en local.
        $this->app->bind('path.public', function () {
            return base_path().'/www';
        });
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contacto;
use App\Conquista;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::share('contactos', Contacto::get()->first());
        \View::share('conquista', Conquista::get()->first());
    }
}

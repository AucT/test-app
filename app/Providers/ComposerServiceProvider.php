<?php

namespace App\Providers;


use App\Country;
use App\ProgrammingLanguage;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('auth.register', function ($view) {
            $view->with('countries', Country::getCached());
        });

        view()->composer('auth.register', function ($view) {
            $view->with('programmingLanguages', ProgrammingLanguage::getCached());
        });

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
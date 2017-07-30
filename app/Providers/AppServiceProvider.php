<?php

namespace AStoimenov\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.app', function ($view) {
            $view->with([
                'headerImage' => asset('images/header.jpg'),
                'title' => 'Analog life .. in a digital world',
                'description' => 'My first steps in the film photography.',
                'logo' => asset('images/avatar.png'),
            ]);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

<?php

namespace App\Providers;

use App\Models\cart;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class viewserviceprovider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('users.layout.index', function($view){
            $view->with('allcart' , cart::all());
        });
    }
}

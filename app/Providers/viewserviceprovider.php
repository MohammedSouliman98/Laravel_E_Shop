<?php

namespace App\Providers;

use App\Models\cart;
use Illuminate\Support\Facades\Auth;
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
            if(Auth::check()){
                $view->with('allcart' , cart::where('user_id' , Auth::user()->id)->get());
            }else{
                $view->with('allcart');
        }
        });

    
           
    }
}

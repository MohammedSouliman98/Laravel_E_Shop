<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\mainPageController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],function(){
    Route::get('/', [mainPageController::class , 'index']);
    
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    
    Route::middleware('auth')->group(function () {
        Route::get('/home' , [mainPageController::class , 'index'])->name('home');
        Route::get('/shop' , [mainPageController::class , 'shop'])->name('shop');
        Route::get('/detail' , [mainPageController::class , 'detail'])->name('detail');
        Route::get('/shopping-cart' , [mainPageController::class , 'cart'])->name('shopping-cart');
        Route::get('/contact' , [mainPageController::class , 'contact'])->name('contact');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    
    require __DIR__.'/auth.php';
});


<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\dashboardProductController;
use App\Http\Controllers\dashboardUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\mainPageController;
use App\Models\product;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],function(){
    Route::get('/', [mainPageController::class , 'index']);
    
    Route::middleware(['auth' , 'is_admin'])->group(function() {
        Route::resource('/user', dashboardUserController::class);
        Route::resource('/product', dashboardProductController::class);
    });
    
    Route::middleware('auth')->group(function () {
        Route::get('/home' , [mainPageController::class , 'index'])->name('home');
        Route::get('/shop' , [mainPageController::class , 'shop'])->name('shop');
        Route::get('/detail/{id}' , [mainPageController::class , 'detail'])->name('detail');
        Route::get('/shopping-cart' , [mainPageController::class , 'cart'])->name('shopping-cart');
        Route::get('/add_to_cart/{id}', [CartController::class , 'add'])->name('add_to_cart');
        Route::delete('/delete_from_cart/{id}', [CartController::class , 'delete'])->name('delete_from_cart');
        Route::get('/contact' , [mainPageController::class , 'contact'])->name('contact');
        Route::get('/filter',[mainPageController::class , 'filter'])->name('filter');
        Route::get('/search',[mainPageController::class , 'search'])->name('search');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    
    require __DIR__.'/auth.php';
});


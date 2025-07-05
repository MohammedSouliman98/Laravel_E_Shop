<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\dashboardProductController;
use App\Http\Controllers\dashboardUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\mainPageController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],function(){
    Route::get('/', [mainPageController::class , 'index']);
    
    Route::middleware(['auth' , 'is_admin'])->group(function() {
        
    Route::get('/dashboard', [dashboardUserController::class , 'show'])->name('dashboard');
    Route::get('/products', [dashboardProductController::class , 'showall'])->name('show_products');
    Route::get('/products/{id}', [dashboardProductController::class , 'show'])->name('show_product');
    Route::get('/product/edit/{id}', [dashboardProductController::class , 'edit'])->name('edit_product');
    Route::get('/create', [dashboardProductController::class , 'create'])->name('create_product');
    Route::post('/store', [dashboardProductController::class , 'store'])->name('store_product');
    });
    
    Route::middleware('auth')->group(function () {
        Route::get('/home' , [mainPageController::class , 'index'])->name('home');
        Route::get('/shop' , [mainPageController::class , 'shop'])->name('shop');
        Route::get('/detail/{id}' , [mainPageController::class , 'detail'])->name('detail');
        Route::get('/shopping-cart' , [mainPageController::class , 'cart'])->name('shopping-cart');
        Route::get('/add_to_cart/{id}', [CartController::class , 'add'])->name('add_to_cart');
        Route::get('/delete_from_cart/{id}', [CartController::class , 'delete'])->name('delete_from_cart');
        Route::get('/contact' , [mainPageController::class , 'contact'])->name('contact');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    
    require __DIR__.'/auth.php';
});


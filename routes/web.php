<?php

use App\Http\Controllers\front\CartController;
use App\Http\Controllers\front\CheckoutController;
use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/products', [ProductsController::class, 'index'])
    ->name('products.index');

Route::get('/products/{product:slug}', [ProductsController::class, 'show'])
    ->name('products.show');

Route::resource('/cart', CartController::class);


Route::get('checkout', [CheckoutController::class, 'create'])->name('checkout');
Route::post('checkout', [CheckoutController::class, 'store']);

require __DIR__ . '/auth.php';

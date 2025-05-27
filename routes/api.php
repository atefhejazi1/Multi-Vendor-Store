<?php

use App\Http\Controllers\Api\AccessTokensController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Middleware\CheckApiToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::middleware('check_api_token')->group(function () {
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return Auth::guard('sanctum')->user();
});

Route::controller(CategoriesController::class)->group(function () {
    Route::get('categories', 'index');
    Route::get('categories/{category}', 'show');

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('categories', 'store');
        Route::patch('categories/{category}', 'update');
        Route::delete('categories/{category}', 'destroy');
    });
});


// Route::apiResource('products', ProductController::class);
Route::controller(ProductController::class)->group(function () {
    Route::get('products', 'index');
    Route::get('products/{product}', 'show');

    Route::middleware('auth:sanctum')->group(function () {
        Route::post('products', 'store');
        Route::patch('products/{product}', 'update');
        Route::delete('products/{product}', 'destroy');
    });
});

Route::post('auth/access-tokens', [AccessTokensController::class, 'store'])
    ->middleware('guest:sanctum');

Route::delete('auth/access-tokens/{token?}', [AccessTokensController::class, 'destroy'])
    ->middleware('auth:sanctum');
// });

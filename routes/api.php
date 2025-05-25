<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::middleware('auth:sanctum')
//     ->prefix('v1')
//     ->group(function () {
//         Route::apiResource('products', 'Api\ProductController');
//         Route::apiResource('categories', 'Api\CategoryController');
//         Route::apiResource('stores', 'Api\StoreController');
//         Route::apiResource('tags', 'Api\TagController');
//     });


Route::apiResource('products', ProductController::class);
        // Route::apiResource('categories', 'Api\CategoryController');
        // Route::apiResource('stores', 'Api\StoreController');
        // Route::apiResource('tags', 'Api\TagController');

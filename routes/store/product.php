<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Store\ProductController;

Route::apiResource('products', ProductController::class);
Route::post('suppliers/{supplier}/products/{product}', 'ProductController@bind')->name('products.bind');
Route::delete('suppliers/{supplier}/products/{product}', 'ProductController@unbind')->name('products.unbind');

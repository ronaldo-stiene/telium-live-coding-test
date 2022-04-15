<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('products', 'Api\Store\ProductController');
Route::post('suppliers/{supplier}/products/{product}', 'Api\Store\ProductController@bind')->name('products.bind');
Route::delete('suppliers/{supplier}/products/{product}', 'Api\Store\ProductController@unbind')->name('products.unbind');

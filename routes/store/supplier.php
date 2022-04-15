<?php

use App\Http\Controllers\Api\Store\SupplierController;
use Illuminate\Support\Facades\Route;

Route::apiResource('suppliers', 'Api\Store\SupplierController');

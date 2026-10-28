<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;

Route::get('/', [OrderController::class, 'index']);
route::resource('customers', CustomerController::class);
Route::resource('orders', OrderController::class);
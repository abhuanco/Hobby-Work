<?php

use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Auth::routes();
Route::get('/', [HomeController::class, 'index']);
Route::resource('dashboard', DashboardController::class);
Route::resource('client', \App\Http\Controllers\Auth\ClientController::class);

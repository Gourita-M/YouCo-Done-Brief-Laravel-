<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\MenuController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/addRestaurant', [RestaurantController::class, 'index']);

Route::Post('/addRestaurant/store', [RestaurantController::class, 'addRestaurant'])->name('add.restaurant');

Route::get('/delete/{id}', [RestaurantController::class, 'deleteRestaurant']);

Route::get('/editRestaurant', [RestaurantController::class, 'editRestaurant']);

Route::get('/addMenu', [MenuController::class, 'addMenu']);
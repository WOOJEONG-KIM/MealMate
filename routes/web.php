<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MealController;
use App\Http\Controllers\CartController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/meal/{id}', [MealController::class, 'show'])->name('meal.show');
Route::post('/meal/{id}/add-to-cart', [MealController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.delete');
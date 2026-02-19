<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
    
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index']);
route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);
route::get('/sales', [SalesController::class, 'index']);
route::prefix('category')->group(function () {
    route::get('/food-beverage', [ProductController::class, 'foodBeverage']);
    route::get('/beauty-health', [ProductController::class, 'beautyHealth']);
    route::get('/home-Care', [ProductController::class, 'homeCare']);
    route::get('/baby-Kid', [ProductController::class, 'babyKid']);
});
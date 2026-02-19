<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PhotoController;
use Termwind\Components\Raw;

Route::get('/hello', [WelcomeController::class, 'Hello']);

Route::get('/world', [WelcomeController::class, 'World']);

Route::get('/test', [WelcomeController::class, 'Test']);

Route::get('/about', [WelcomeController::class, 'About']);

Route::get('/user/{name}', [WelcomeController::class, 'User']);

Route::get('/posts/{post}/comments/{comment}', [WelcomeController::class, 'Posts']);

// Route::get('/articles/{id}', [WelcomeController::class, 'Articles']);

Route::get('user/{name?}', function ($name = 'John') {
    return 'My Name is ' . $name;
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home']);
Route::get('/greetings', [App\Http\Controllers\HomeController::class, 'greetings']);
Route::get('/reminder', [App\Http\Controllers\HomeController::class, 'reminder']);
Route::get('/nasywa', [App\Http\Controllers\AboutController::class, 'nasywa']);
Route::get('/articles/{id}', [App\Http\Controllers\ArticleController::class, 'show']);

Route::resource('photos', PhotoController::class) -> only(['index', 'show']);
Route::resource('photos', PhotoController::class) -> except(['create', 'store', 'update', 'destroy', 'edit']);

Route::get('/greets', [WelcomeController::class, 'greets']);
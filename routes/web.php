<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/hello', [WelcomeController::class, 'Hello']);

Route::get('/world', function () {
    return 'World';
});

Route::get('/test', function () {
    return 'Welcome to Indomart';
});

Route::get('/about', function () {
    return 'Nasywa Qonita RH/244107020170';
});
Route::get('/user/{name}', function ($name) {
    return 'Hi, My Name is ' . $name . '!';
});
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post ID: ' . $postId . ', Comment ID: ' . $commentId;
});
Route::get('/articles/{id}', function ($id) {
    return 'Article Page: ' . $id;
});
Route::get('user/{name?}', function ($name = 'John') {
    return 'My Name is ' . $name;
});

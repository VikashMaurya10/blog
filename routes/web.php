<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);


// auth routes
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);


// posts routes
Route::get('/posts/post/{post:slug}', [PostController::class, 'showPost']);
Route::get('/authors/author/{author:name}', [PostController::class, 'postByAuthor']);
Route::get('/categories/category/{category:slug}', [PostController::class, 'postByCategory']);

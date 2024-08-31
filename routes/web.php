<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

// - Rutas con controladores
Route::get('/',                     HomeController::class);
Route::get('/posts',                [PostController::class, 'index']);
Route::get('/posts/create',         [PostController::class, 'create']);
Route::get('/posts/{post}',         [PostController::class, 'show']);
Route::post('/posts',               [PostController::class, 'store']);
Route::get('/posts/{post}/edit',    [PostController::class, 'edit']);
Route::put('/posts/{post}',         [PostController::class, 'update']);
Route::delete('/posts/{post}',      [PostController::class, 'destroy']);



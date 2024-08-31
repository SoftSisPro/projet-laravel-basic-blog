<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

// - Rutas con controladores
Route::get('/',                     HomeController::class)              ->name('home');
Route::get('/posts',                [PostController::class, 'index'])   ->name('posts.index');
Route::get('/articulos/create',         [PostController::class, 'create'])  ->name('posts.create');
Route::get('/posts/{post}',         [PostController::class, 'show'])    ->name('posts.show');
Route::post('/posts',               [PostController::class, 'store'])   ->name('posts.store');
Route::get('/posts/{post}/edit',    [PostController::class, 'edit'])    ->name('posts.edit');
Route::put('/posts/{post}',         [PostController::class, 'update'])  ->name('posts.update');
Route::delete('/posts/{post}',      [PostController::class, 'destroy']) ->name('posts.destroy');



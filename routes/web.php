<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

// - Rutas con funciones anónimas
Route::get('/',                     HomeController::class)              ->name('home');
/*
// - Rutas con controladores
Route::get('/posts',                [PostController::class, 'index'])   ->name('posts.index');
Route::get('/articulos/create',         [PostController::class, 'create'])  ->name('posts.create');
Route::get('/posts/{post}',         [PostController::class, 'show'])    ->name('posts.show');
Route::post('/posts',               [PostController::class, 'store'])   ->name('posts.store');
Route::get('/posts/{post}/edit',    [PostController::class, 'edit'])    ->name('posts.edit');
Route::put('/posts/{post}',         [PostController::class, 'update'])  ->name('posts.update');
Route::delete('/posts/{post}',      [PostController::class, 'destroy']) ->name('posts.destroy');
*/

//- Rutas con resource
Route::resource('posts', PostController::class);

/*
//- Rutas con resource y solo algunas rutas
Route::resource('posts', PostController::class)
    ->only(['index', 'show']);

//- Rutas con resource y excepto algunas rutas
Route::resource('posts', PostController::class)
    ->except(['index', 'show']);

//- Rutas con resource y prefijo
Route::resource('articulos', PostController::class)
    ->parameters(['posts' => 'post'])
    ->names('posts');
*/

//- Ruta para prueba de relaciones
Route::get('/prueba', function ()
{
    /* Creamos un telefono al usuario
    $phone = Phone::create([
        'number' => '1234567890',
        'user_id' => 1
    ]);

    return "Teléfono creado";
    */

    //- Trae el usuario con el telefono
    $user = User::where('id', 1)
        ->with('phone')
        ->first();

    //return $user;

    $phone = Phone::where('user_id', 1)
        ->with('user')
        ->first();

    return $phone;
});

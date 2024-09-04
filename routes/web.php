<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Comment;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Role;
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
## RELACION DE MUCHOS A MUCHOS

    //- Asignar un rol a un usuario
    /*
    $user = User::find(1);
    $role = Role::find(1);
    $user->roles()->attach($role); ## Agrega un registro a la tabla pivote
    return "Registro agregado";
    */

    //- Traer los roles de un usuario
    $user = User::where('id', 1)->with('roles')->first();
    $roles = $user;

    return $roles;

## RELACION DE UNO A MUCHOS
    /*
    //- Creamos un comentarios del post 1
    Comment::create([
        'content' => 'Comentario 2',
        'post_id' => 1
    ]);
    return "Comentario creado";


    $post = Post::where('id', 1)->with('comments')->first();
    //return $post;

    $comment = Comment::where('post_id', 1)->with('post')->first();
    return $comment;
    */

## RELACION DE UNO A UNO

    /* Creamos un telefono al usuario
    $phone = Phone::create([
        'number' => '1234567890',
        'user_id' => 1
    ]);
    return "Teléfono creado";
    */

    //- Trae el usuario con el telefono
    //$user = User::where('id', 1)->with('phone')->first();
    //return $user;

    //$phone = Phone::where('user_id', 1)->with('user')->first();
    //return $phone;


});

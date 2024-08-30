<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

// - Rutas con controladores
Route::get('/',             HomeController::class);
Route::get('/posts',        [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);


/* rutas directas
Route::get('/', function () {
    # Return view('welcome'); // return view
    return "Hello World";
});
*/

//- Creamos un ruta para cargar un modelo
Route::get('prueba', function (){

    $post  = Post::find(1); // Buscar un post por id
    /* return $post->created_at->format('d-m-Y'); //- Formatear la fecha */
    /* return $post->created_at->diffForHumans(); //- Formatear la fecha */
    /* return $post->published_at->format('d-m-Y'); //- Mostrar la fecha formateada y no tiene error */
    dd($post->is_active); //- Mostrar el estado del post

});

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
    // return "hola desde la ruta prueba"; Mostrar mensaje


    /* //- Crear un nuevo post desde el modelo en la ruta
    $post = new Post();

    $post->title = 'Mi tercer post ';
    $post->content = 'Contenido de mi tercer post';
    $post->categoria = 'categoria 3';

    $post->save();

    return $post; */

    /* //$post  = Post::find(2); // Buscar un post por id

    $post = Post::where('title', 'Mi primer post')->first(); // Buscar un post por titulo
    //- Actualizar un post en categoria
    $post->categoria = "Desarrollo web";
    $post->save();

    return $post; */

    //$post = Post::all(); // Mostrar todos los post

    /* //- Consultar compleja de post
    $post = Post::orderBy('categoria','asc') # Ordenar por categoria
                ->select('id','title','categoria') # Campos a mostrar
                ->take(2) # Limitar la cantidad de registros
                ->get(); //- Listar

    return $post; */

    /* //- Eliminar un post
    $post = Post::find(2);
    $post->delete(); */
});

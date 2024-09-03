<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //$posts = Post::all();
        $posts = Post::orderBy('id', 'desc')
                ->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show(Post $post)
    {
        //$post = Post::find($post);
        return view('posts.show', compact('post'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $post = new Post();

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->category = $request->category;

        $post->save();
        //return redirect('/posts'); // Redirecciona a la ruta anterior
        return redirect()->route('posts.index');
    }

    public function edit(Post $post)
    {
        //$post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        //$post = Post::find($postid); // No es necesario

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->category = $request->category;

        $post->save();
        //return redirect('/posts/'.$post); // Redirecciona a la ruta anterior
        return redirect()->route('posts.show', $post);
    }

    public function destroy(Post $post)
    {
        //$post = Post::find($post); // No es necesario
        $post->delete();
        //return redirect('/posts'); // Redirecciona a la ruta anterior
        return redirect()->route('posts.index');
    }
}

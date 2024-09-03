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
        $request->validate([
            'title' => 'required|min:5|max:255',
            'slug' => "required|unique:posts",
            'content' => 'required',
            'category' => 'required',
        ]);

        Post::create($request->all());
        return redirect()->route('posts.index');
        /*
        //dd($request->all());
        $post = new Post();

        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->category = $request->category;

        $post->save();
        //return redirect('/posts'); // Redirecciona a la ruta anterior
        */

    }

    public function edit(Post $post)
    {
        //$post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|min:5|max:255',
            'slug' => "required|unique:posts,slug,{$post->id}",
            'content' => 'required',
            'category' => 'required',
        ]);

        $post->update($request->all()); // Actualiza todos los campos
        return redirect()->route('posts.show', $post);
        /*
        //$post = Post::find($postid); // No es necesario
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->content = $request->content;
        $post->category = $request->category;
        $post->save();
        //return redirect('/posts/'.$post); // Redirecciona a la ruta anterior
        */
    }

    public function destroy(Post $post)
    {
        //$post = Post::find($post); // No es necesario
        $post->delete();
        //return redirect('/posts'); // Redirecciona a la ruta anterior
        return redirect()->route('posts.index');
    }
}

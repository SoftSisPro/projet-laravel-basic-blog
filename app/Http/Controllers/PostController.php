<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //$posts = Post::all();
        $posts = Post::orderBy('id', 'desc')->get();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show($post)
    {
        $post = Post::find($post);
        return view('posts.show', compact('post'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $post = new Post();

        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;

        $post->save();
        return redirect('/posts');

    }

    public function edit($post)
    {
        $post = Post::find($post);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $postid)
    {
        $post = Post::find($postid);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->category = $request->category;

        $post->save();
        return redirect('/posts/'.$postid);
    }

    public function destroy($post)
    {
        $post = Post::find($post);
        $post->delete();
        return redirect('/posts');
    }
}

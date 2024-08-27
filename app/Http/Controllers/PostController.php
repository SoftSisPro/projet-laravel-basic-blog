<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "List of posts";
    }

    public function create()
    {
        return "form to create a post";
    }

    public function show($post)
    {
        return "post with id: " . $post;
    }
}

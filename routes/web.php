<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    #Return view('welcome');
    return "Hello World";
});

Route::get('/posts', function () {
    return "List of posts";
});

Route::get('/posts/create', function () {
    return "form to create a post";
});

Route::get('/posts/{post}', function ($post) {
    return "post with id: " . $post;
});



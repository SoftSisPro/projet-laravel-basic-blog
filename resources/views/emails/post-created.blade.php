<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Post Creado</h1>
    <p>Se ha creado un nuevo post</p>

    <br><br>
    <h2>{{$post->title}}</h2>
    <p>{{$post->content}}</p>
    <p>{{$post->category}}</p>
    <p>{{$post->slug}}</p>
    <br>
    <a href="{{ route('posts.show', $post) }}">Ir al Posts</a>

</body>
</html>

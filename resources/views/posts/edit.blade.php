<x-app-layout>
    <h1>Editar Post</h1>
    <a href="/posts">Volver a los Posts</a>
    <br><br>
    <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method("PUT")
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{$post->title}}" required>
        <br><br>
        <label for="category">Categoria</label>
        <input type="text" name="category" id="category" value="{{$post->category}}" required>
        <br><br>
        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10" required>
            {{$post->content}}
        </textarea>
        <br><br>
        <button type="submit">Actualizar Post</button>
    </form>
</x-app-layout>

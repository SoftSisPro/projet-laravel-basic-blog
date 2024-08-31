<x-app-layout>
    <h1>Editar Post</h1>
    <a href="{{ route('posts.show',$post) }}">Volver al Post</a>
    <br><br>
    <form action="{{ route('posts.update',$post) }}" method="POST">
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

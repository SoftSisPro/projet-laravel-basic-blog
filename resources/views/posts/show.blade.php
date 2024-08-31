<x-app-layout>
    <a href="/posts">Volver a los post</a>
    <br>
    <h1>{{ $post->title }}</h1>
    <p>Categoria: <strong>{{ $post->category }}</strong></p>
    <p>{{ $post->content }}</p>
    <br>
    <a href="/posts/{{$post->id}}/edit" >Editar Post</a>
    <br>
    <br>
    {{-- Boton Eliminar --}}
    <form action="/posts/{{$post->id}}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Eliminar Post</button>
    </form>
</x-app-layout>

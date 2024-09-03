<x-app-layout>
    <a href="{{ route('posts.index') }}">Volver a los post</a>
    <br>
    <h1>{{ $post->title }}</h1>
    <p>Slug: <code>{{ $post->slug }}</code></p>
    <p>Categoria: <strong>{{ $post->category }}</strong></p>
    <p>{{ $post->content }}</p>
    <br>
    <a href="{{ route('posts.edit',$post) }}" >Editar Post</a>
    <br>
    <br>
    {{-- Boton Eliminar --}}
    <form action="{{ route('posts.destroy',$post) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Eliminar Post</button>
    </form>
</x-app-layout>

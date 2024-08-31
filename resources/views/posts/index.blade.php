<x-app-layout>
    <h1>Aqui me mostrara todos los posts</h1>

    <a href=" {{ route('posts.create') }}">Crear Nuevo Post</a>
    <br>
    <ul>
    @foreach ($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        </li>
    @endforeach
    </ul>
    {{ $posts->links() }}
</x-app-layout>


<x-app-layout>
    <h1>Aqui me mostrara todos los posts</h1>

    <a href="/posts/create">Crear Nuevo Post</a>
    <br>
    <ul>
    @foreach ($posts as $post)
        <li>
            <a href="/posts/{{$post->id}}">{{ $post->title }}</a>
        </li>
    @endforeach
    </ul>
    {{ $posts->links() }}
</x-app-layout>


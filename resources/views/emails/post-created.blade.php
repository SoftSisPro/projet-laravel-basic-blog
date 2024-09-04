<x-mail::message>

## Se ha creado un nuevo post

<x-mail::panel>
<h2>{{$post->title}}</h2>
<p>{{$post->content}}</p>
<p>{{$post->category}}</p>
<p>{{$post->slug}}</p>
</x-mail::panel>

<x-mail::button :url="route('posts.show', $post)" color="success">
    Ir al Posts
</x-mail::button>

</x-mail::message>

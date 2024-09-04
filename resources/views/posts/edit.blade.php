<x-app-layout>
    <h1>Editar Post</h1>

    <a href="{{ route('posts.show',$post) }}">Volver al Post</a>
    <br><br>
    <form action="{{ route('posts.update',$post) }}" method="POST">
        @csrf
        @method("PUT")
        {{-- Mostrar errores --}}
        @if($errors->any())
            <h5>Errores:</h5>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" value="{{old('title',$post->title)}}" >
        <br><br>
        <label for="title">Slug</label>
        <input type="text" name="slug" id="slug" value="{{old('slug',$post->slug)}}" >
        <br><br>
        <label for="category">Categoria</label>
        <input type="text" name="category" id="category" value="{{old('category',$post->category)}}" >
        <br><br>
        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10" >
            {{old('content', $post->content)}}
        </textarea>
        <br><br>
        <button type="submit">Actualizar Post</button>
        <br><br>
        {{ __('All rights reserved.') }}
    </form>
</x-app-layout>

<x-app-layout>
    <h1>Crear Nuevo Post</h1>
    <a href="{{ route('posts.index') }}">Volver a los Posts</a>
    <br><br>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
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
        <input type="text" name="title" id="title" value="{{old('title')}}" >
        @error('title')
            <small class='text-danger d-block'>{{$message}}</small>
        @enderror
        <br><br>
        <label for="title">Slug</label>
        <input type="text" name="slug" id="slug" value="{{old('slug')}}" >
        <br><br>
        <label for="category">Categoria</label>
        <input type="text" name="category" id="category" value="{{old('category')}}" >
        <br><br>
        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10" >{{old('content')}}</textarea>
        <br><br>
        <button type="submit">Crear Post</button>
    </form>
</x-app-layout>

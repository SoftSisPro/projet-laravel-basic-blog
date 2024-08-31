<x-app-layout>
    <h1>Crear Nuevo Post</h1>
    <a href="/posts">Volver a los Posts</a>
    <br><br>
    <form action="/posts" method="post">
        @csrf
        <label for="title">Titulo</label>
        <input type="text" name="title" id="title" required>
        <br><br>
        <label for="category">Categoria</label>
        <input type="text" name="category" id="category" required>
        <br><br>
        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10" required></textarea>
        <br><br>
        <button type="submit">Crear Post</button>
    </form>
</x-app-layout>

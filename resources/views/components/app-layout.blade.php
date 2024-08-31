<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projecto Blog Laravel @yield('title') </title>
</head>
<body>
    <header></header>

    {{-- Mostrar contenido --}}
    {{ $slot }}

    <footer></footer>
</body>
</html>

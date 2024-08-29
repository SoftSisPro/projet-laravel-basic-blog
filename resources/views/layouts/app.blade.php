<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projecto Blog Laravel @yield('title') </title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Stack para incrustar style --}}
    @stack('css')
</head>
<body class="container w-full h-screen mx-auto bg-slate-700 p-5 text-white">
    <header></header>
    {{-- Mostrar contenido --}}
    @yield('content')
    <footer></footer>
    {{-- Stack para incrustar javascript --}}
    @stack('js')
</body>
</html>

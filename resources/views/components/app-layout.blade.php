<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projecto Blog Laravel @yield('title') </title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class='container-fluid'>
    <div class="container">
        <header></header>
        <section class="mt-5">
            {{-- Mostrar contenido --}}
            {{ $slot }}
        </section>

        <footer></footer>
    </div>
</body>
</html>

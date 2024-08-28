<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Laravel 11</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto bg-slate-700 p-5 h-screen text-white">
        <h1 class='text-3xl'>Mi pagina de inicio</h1>
        {{-- Alerta component anonimo --}}
        <x-alert type="danger" class="mb-5">
            <x-slot name="title">Titulo de alerta</x-slot>
            Mi mensaje de alerta
        </x-alert>
        {{-- Alerta Componente de class --}}
        <x-alert2 type="warning" class="mb-5">
            <x-slot name="title">Titulo de alerta 2</x-slot>
            Mi mensaje de alerta
        </x-alert2>
        <p>Hola mundo</p>
    </div>
</body>
</html>

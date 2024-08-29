{{-- Hereda la plantilla app --}}
@extends('layouts.app')

{{-- Define la seccion title --}}
@section('title', ' - Inicio')

{{-- Incrusta css en la seccion css --}}
@push('css')
    <style>
        body{
            color: #a4dd48;
        }
    </style>
@endpush

{{-- Podemos agregar varias veces cuando usamos stack --}}
@push('css')
    <style>
        body{
            color: #a4dd48;
        }
    </style>
@endpush

{{-- Define la seccion content --}}
@section('content')
    <h1 class='text-3xl'>Mi pagina de inicio</h1>
    {{-- Alerta component anonimo --}}
    <x-alert type="danger" class="mb-5">
        <x-slot name="title">Titulo de alerta</x-slot>
        Mi mensaje de alerta
    </x-alert>
    {{-- Alerta Componente de class --}}
    <x-alert2 type="warning" class="mb-5">
        <x-slot name="title">Titulo de alerta 2</x-slot>
        Mi mensaje de alerta 2
    </x-alert2>
    <p>Hola mundo</p>
@endsection

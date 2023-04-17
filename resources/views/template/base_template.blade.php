<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    {{-- Подключаем HTML заголовоки --}}
    @include('template.sections.head')

<body class="bg-background font-main">

    {{-- Подключаем Header --}}
    @include('template.sections.header')

    {{-- Подключаем основкую секцию --}}
    @section('content')
    @show

    {{-- Подключаем Footer --}}
    {{-- Сюда бдем писать Footer //bg-footer container mx-auto// --}}

    {{-- Подключаем JavaScript файлы--}}
    @vite('resources/js/app.js')
</body>
</html>

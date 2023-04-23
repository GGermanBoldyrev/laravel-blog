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

{{--Подключаем кнопку up--}}
@include('components.up_button')
{{--Подключаем кнопку чата--}}
@include('components.chat_button')

{{-- Подключаем Footer --}}
{{-- Сюда бдем писать Footer //bg-footer container mx-auto// --}}

{{-- Подключаем JavaScript файлы--}}
@vite('resources/js/text_animation.js')
@vite('resources/js/up_button.js')
@vite('resources/js/arrow_down.js')
@vite('resources/js/chat_button')
</body>

</html>

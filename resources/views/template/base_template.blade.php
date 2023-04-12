<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    {{-- Including HTML head section --}}
    @include('template.sections.head')
<body class="bg-background font-main">
    {{-- Naigation --}}
    <div class="bg-header">
        <div class="container mx-auto">
            @include('template.sections.navigation')
        </div>
    </div>
    {{-- Main Content of the Page --}}
        @section('content')
        @show
    {{-- Footer --}}
    <div class="bg-footer">
        <div class="container mx-auto">
            {{-- Сюда бдем писать Footer --}}
        </div>
    </div>
    {{-- JavaScript files--}}
    @vite('resources/js/app.js')
</body>
</html>

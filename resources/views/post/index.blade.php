@extends('template.base_template')

@section('content')
    {{--Контейнер--}}
    <div class="container mx-auto min-h-screen-minus-header">
        <!--Шапка для страницы постов-->
        <div class="flex justify-between">
            <div>Все посты</div>
            <a href="/posts/create">Создать новый пост</a>
        </div>
        <!--Часть страницы с контентом-->
        <div class="flex justify-between">
            <!--Левая часть с постами-->
            <div class="">
                <!--Отдельный пост-->
                <div class="bg-red-500">
                    <!--Картинка-->
                    <img src="{{ asset('images/image.jpeg') }}" alt="Кратинка к посту">
                    <!--Заголовок-->
                    <div>Заголовок</div>
                    <!--Текст-->
                    <div>ВЫАалцщлаущлцущалщцулащлцущлащцулащлцущлащцлуащлцущалщцулащ</div>
                </div>
            </div>
            <!--Правая часть с фильтрами-->
            <div>
                Фильтры
            </div>
        </div>
    </div>
@endsection

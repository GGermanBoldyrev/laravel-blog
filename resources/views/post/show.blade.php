@extends('template.base_template')

@section('content')
    <main>
        <div class="container mx-auto min-h-screen-minus-header">
            <!--Кнопка назад-->
            <x-back_posts_button/>
            <!--Блок с постом-->
            <div class="flex justify-center translate-y-[50px]">
                <!--Пост-->
                <div class="rounded w-[750px]">
                    <!--Картинка-->
                    <div>
                        <img src="{{ asset('images/image.jpeg') }}" alt="Кратинка к посту"
                             class="h-[450px] w-[750px] object-cover">

                    </div>
                    <!--Заголовок-->
                    <div class="font-bold text-3xl my-5">
                        {{ $post->title }}
                    </div>
                    <!--Основной контент-->
                    <div class="font-medium text-xl">
                        {{ $post->content }}
                    </div>
                    <!--Дата создания-->
                    <div class="font-medium mt-5">
                        {{ $post->created_at->format('Y-m-d') }}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

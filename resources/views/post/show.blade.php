@extends('template.base_template')

@section('content')
    <main>
        <div class="container mx-auto min-h-screen-minus-header">
            <div class="mt-[50px]">
                <!--Кнопка назад-->
                <div>
                    <a href="/posts" class="text-white border rounded px-2 py-1 absolute
                                            hover:border-black hover:text-black duration-200">
                        🠔 Go back
                    </a>
                </div>
                <!--Блок с постом-->
                <div class="flex justify-center">
                    <!--Пост-->
                    <div class="rounded w-[750px]">
                        <!--Картинка-->
                        <img src="{{ asset('images/image.jpeg') }}" alt="Кратинка к посту"
                             class="h-[450px] w-[750px] object-cover">
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
        </div>
    </main>
@endsection

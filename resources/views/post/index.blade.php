@extends('template.base_template')

@section('content')
    <main>
        {{--Контейнер--}}
        <div class="container mx-auto min-h-screen-minus-header">
            <!--Шапка для страницы постов-->
            <ul class="flex items-center justify-between text-white my-4">
                <li class="text-2xl font-medium">
                    All posts
                </li>
                <li>
                    <a href="/posts/create" class="border py-1 px-2 rounded
                                                   hover:text-black hover:border-black duration-200">Add new post</a>
                </li>
            </ul>
            <!--Часть страницы с контентом-->
            <div class="flex justify-between">
                <!--Левая часть с постами-->
                <section class="w-full grid gap-[60px]
                                2xl:grid-cols-3 ">
                    {{--Пробегаемся по всем постам--}}
                    @foreach($posts as $post)
                        <!--Отдельный пост-->
                        <div class="bg-header rounded h-fit
                                    lg:w-[330px] xl:w-[400px] 2xl:w-[365px]">
                            <!--Картинка-->
                            <img src="{{ asset('images/image.jpeg') }}" alt="Кратинка к посту"
                                 class="h-[250px] w-full object-cover">
                            <!--Блок-->
                            <div class="py-2 px-2.5 relative hover:cursor-default">
                                <!--Заголовок-->
                                <div class="font-bold text-lg h-[84px] overflow-hidden
                                            md:h-[56px] lg:h-[84px]">
                                    {{ $post->title }}
                                </div>
                                <!--Текст-->
                                <div class="flex flex-col justify-between h-full">
                                    <div class="mt-2 overflow-hidden h-[260px]">
                                        {{ $post->content }}
                                    </div>
                                    <div class="flex items-center justify-between mt-5">
                                        <!--Ссылув на пост-->
                                        <a href="/posts/{{ $post->id }}">
                                            <div class="text-black border border-black w-fit px-2 py-1.5 rounded
                                                    hover:text-white hover:border-white duration-200">
                                                View full
                                            </div>
                                        </a>
                                        <!--Дата создания поста без времени-->
                                        <div>
                                            {{ $post->created_at->format('Y-m-d') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>

                <!--Правая часть с фильтрами-->
                <section class="w-[300px] h-fit flex justify-end">

                    {{--Кнопка показать фильтры--}}
                    <div class="border py-0.5 px-2 rounded w-fit border-black text-black
                                hover:text-white hover:border-white duration-200 hover:cursor-pointer" id="filter-open">
                        Show filters
                    </div>

                    {{--Секция с фильтрами--}}
                    <div id="filter-section" class="bg-header w-full px-2 py-1 rounded">
                        <!--Верх фильтров-->
                        <div class="flex items-center justify-between">
                            <div class="text-lg">Filters</div>
                            <img src="{{ asset('images/close.png') }}" alt="Send" id="filter-close"
                                 class="w-[15px] hover:cursor-pointer">
                        </div>
                        <!--Секция самих фильтров-->
                        <div>
                            <!--Фильтр по дате-->
                            <div class="mt-5">
                                <!--Заголовок-->
                                <div>Data</div>
                                <!--Варианты-->
                                <div class="mt-1">
                                    <div>
                                        <input type="checkbox" name="filter-new" id="filter-new">
                                        <span class="ml-1.5">Newer first</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="filter-old" id="filter-old">
                                        <span class="ml-1.5">Older first</span>
                                    </div>
                                </div>
                            </div>
                            <!--Фильтр по названию-->
                            <div class="mt-5">
                                <!--Заголовок-->
                                <div>Name</div>
                                <!--Варианты-->
                                <div class="mt-1">
                                    <div>
                                        <input type="checkbox" name="filter-name-asc" id="filter-name-asc">
                                        <span class="ml-1.5">A - z</span>
                                    </div>
                                    <div>
                                        <input type="checkbox" name="filter-name-desc" id="filter-name-desc">
                                        <span class="ml-1.5">Z - a</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection

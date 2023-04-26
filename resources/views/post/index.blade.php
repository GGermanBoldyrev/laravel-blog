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
                <section class="w-[500px]">
                    <!--Отдельный пост-->
                    <div class="bg-red-500">
                        <!--Картинка-->
                        <img src="{{ asset('images/image.jpeg') }}" alt="Кратинка к посту">
                        <!--Заголовок-->
                        <div>
                            Можно ехать дальше или нет? Сложная, но актуальная задача на знание ПДД
                        </div>
                        <!--Текст-->
                        <div>
                            Ситуация в свежей задаче из цикла «Оштрафуют или нет» на первый взгляд простая. У стоящего
                            слева от вас трамвая закрыты двери, а от остановки к нему не идут пешеходы — уступать дорогу
                            некому. Да и вообще кажется, что он просто ждёт зелёного сигнала светофора. Получается, вам
                            можно проехать мимо трамвая и встать у поворота направо или это будет нарушением Правил?
                        </div>
                    </div>
                </section>
                <!--Правая часть с фильтрами-->
                <section class="text-white w-[250px] h-fit flex justify-end">
                    {{--Кнопка показать фильтры--}}
                    <div class="border py-0.5 px-2 rounded w-fit border-black text-black
                                hover:text-white hover:border-white duration-200 hover:cursor-pointer" id="filter-open">
                        Show filters
                    </div>
                    {{--Секция с фильтрами--}}
                    <div id="filter-section" class="bg-header">
                        <div>
                            <div>Filters</div>
                            <img src="{{ asset('images/close.png') }}" alt="Close" id="filter-close"
                                 class="h-[15px] hover:cursor-pointer">
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection

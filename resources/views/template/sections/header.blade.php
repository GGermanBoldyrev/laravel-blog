{{--Массив по которому будеи итерироваться чтобы отрендерить элементы списка--}}
@php($titles = [
['href' => '/', 'title' => 'Home'],
['href' => '/about', 'title' => 'About'],
['href' => '/posts', 'title' => 'Blog']
])

{{--Основной код для header--}}
<div class="sticky z-10">
    {{--Помещаем header в container--}}
    <div class="container mx-auto">
        {{--Сам header--}}
        <div class="text-white flex justify-between h-76px items-center">
            {{--Левая часть header--}}
            <div class="font-logo text-6xl">
                <a href="/" class="hover:cursor-default">Car Blog</a>
            </div>
            {{--Правая часть header--}}
            <div class="text-2xl flex h-full items-center relative left-1.5">
                <ul class="flex justify-between items-center h-full w-250px
                           [&>li]:h-full [&>li]:flex [&>li]:items-center [&>li]:px-1.5 [&>li]:duration-300">
                    {{--Пробегаемся по массиву и отрисовываем ссылки--}}
                    @foreach($titles as $title)
                    <li {{--Если мы находимся на главной странице--}} @if(url()->current() === env("APP_URL"))
                        class="hover:text-slate-400"
                        {{--Если мы находимся на любой странице, кроме главной--}}
                        @else
                        class="hover:bg-background"
                        @endif>
                        <a href="{{ $title['href'] }}">
                            {{ $title['title'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
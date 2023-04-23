{{--Массив по которому будеи итерироваться чтобы отрендерить элементы списка--}}
@php($titles = [
['href' => '/', 'title' => 'Home'],
['href' => '/posts', 'title' => 'Blog'],
['href' => '/login', 'title' => 'Log in']
])

{{--Основной код для header--}}
<div
    {{--Если мы находимся на главной странице--}}
    @if(url()->current() === env("APP_URL"))
        class="absolute z-10 w-full"
    @else
        class="sticky top-0 bg-header w-full"
    @endif
>
    {{--Помещаем header в container--}}
    <div class="container mx-auto">
        {{--Сам header--}}
        <div class="text-white flex justify-between h-[76px] items-center">
            {{--Левая часть header--}}
            <div class="font-logo text-6xl">
                <a href="/" class="hover:cursor-default">Car Blog</a>
            </div>
            {{--Правая часть header--}}
            <div class="text-2xl flex h-full items-center relative left-1.5">
                <ul class="flex justify-between items-center h-full w-[250px]">
                    {{--Пробегаемся по массиву и отрисовываем ссылки--}}
                    @foreach($titles as $title)
                    <li class="h-full flex items-center">
                        {{--Отрисовываем ссылки--}}
                        <a href="{{ $title['href'] }}"
                           {{--Если мы находимся на главной странице--}}
                           @if(url()->current() === env("APP_URL"))
                               class="px-1.5 hover:text-slate-300 duration-300"
                           {{--Если мы находимся на любой странице, кроме главной--}}
                           @else
                               class="h-full flex items-center px-1.5 hover:bg-background duration-300"
                            @endif
                        >
                            {{ $title['title'] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

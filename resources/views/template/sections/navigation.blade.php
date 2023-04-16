{{--Массив по которому будеи итерироваться чтобы отрендерить элементы списка--}}
@php($titles = [
    ['href' => '/', 'title' => 'Home'],
    ['href' => '/about', 'title' => 'About'],
    ['href' => '/posts', 'title' => 'Blog']
    ])

<div class="text-white flex justify-between h-76px items-center">
    <div class="font-logo text-6xl">
        <a href="/">Car Blog</a>
    </div>
    <div class="text-2xl flex h-full items-center relative left-1.5">
        <ul class="flex justify-between items-center h-full w-250px
            [&>li]:h-full [&>li]:flex [&>li]:items-center [&>li]:px-1.5 [&>li]:duration-300">
            @foreach($titles as $title)
                <li
                    {{--Если мы находимся на главной странице--}}
                    @if(url()->current() !== env("APP_URL"))
                        class="hover:bg-background"
                    {{--Если мы находимся на любой странице, кроме главной--}}
                    @else
                        class="text-amber-600"
                   @endif>
                    <a href="{{ $title['href'] }}">
                        {{ $title['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>

@extends('template.base_template')

@section('content')
    <div class="bg-background h-[10000px]">

        {{--Блок с видео--}}
        <div class="relative bg-header">
            {{--Видео--}}
            <video autoplay muted preload="auto" loop class="grayscale opacity-40 w-screen">
                <source src="{{ asset('videos/porsche.mp4') }}" type="video/mp4">
            </video>
            {{--Блок текста welcome--}}
            <div class="top-1/2 absolute left-1/2 translate-x-minus-50% translate-y-minus-50% w-fit">
                {{--Welcome text--}}
                <div id="welcome-text" class="whitespace-nowrap opacity-80
                                              text-4xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl
                                              hover:cursor-default">
                    Glad to see
                </div>
                {{--Цитата--}}
                <div class="w-full flex justify-center text-slate-300 mt-3
                            text-sm md:text-base lg:text-lg xl:text-xl 2xl:text-2xl">
                    Genius is ninety-nine percent perspiration.
                </div>
            </div>
            {{--Блок c кнопкой и стрелкой вниз--}}
            <div class="w-fit text-slate-300 flex justify-between items-center flex-col h-1/4
                        absolute bottom-0 left-1/2 translate-x-minus-50%">
                {{--Кнопка "Get started"--}}
                <a href="/posts" class="p-3 border text-4xl w-fit rounded
                                        hover:scale-105 duration-300">
                    Get started
                </a>
                {{--Стрелка вниз--}}
                <div>
                    <img id="arrow-down" src="{{ asset('images/down-arrow.png') }}" alt="Down"
                         class="h-[50px] opacity-80
                                hover:cursor-pointer">
                </div>
            </div>
        </div>

        {{-- Основной контент после блока с видео --}}
        <div id="home-content">
            Content
        </div>
    </div>
@endsection

@extends('template.base_template')

@section('content')
    <div class="bg-background min-h-1000px">
        <div class="absolute top-0 bg-header">
            <div class="relative">
                {{--Видео--}}
                <video autoplay muted preload="auto" loop class="grayscale opacity-40 w-screen">
                    <source src="{{ asset('videos/porsche.mp4') }}" type="video/mp4">
                </video>
                {{--Анимированный welcome текст--}}
                <div id="welcome-text" class="whitespace-nowrap opacity-80 top-1/2 absolute left-1/2 translate-x-minus-50% translate-y-minus-50% w-fit
                                              text-4xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl
                                              hover:cursor-default">
                    Glad to see
                </div>
                {{--Блок текста с цитатой, кнопкой и стрелкой вниз--}}
                <div class="w-fit text-slate-300 flex justify-center items-center flex-col mt-3 bg-red-500 h-full">
                    {{--Цитата--}}
                    <div class="text-sm md:text-base lg:text-lg xl:text-xl 2xl:text-2xl">
                        Genius is ninety-nine percent perspiration.
                    </div>
                    {{--Кнопка--}}
                    <div class="border text-4xl w-fit">
                        Get started
                    </div>
                    {{--Стрелка вниз--}}
                    <div    >
                        ↓↓↓
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

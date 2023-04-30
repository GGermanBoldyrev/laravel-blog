@extends('template.base_template')

@section('content')
    <main>
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
                                        hover:scale-105 hover:text-white hover:border-white duration-300">
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
        {{--Основной контент после блока с видео--}}
        <div id="home-content" class="mt-[100px] container mx-auto scroll-m-[100px]">
            <!--Первый блок с заголовком-->
            <section class="text-white">
                <h1 class="text-center text-5xl">Why CarBlog?</h1>
                <p class="text-xl mt-[30px] text-center leading-9">
                    Our blog about cars is a great source of information for all car enthusiasts. We cover a range of
                    topics, including reviews of the latest car models, tips for car maintenance, updates on industry
                    news, and discussions about car culture. Whether you're into sports cars, electric vehicles, or
                    classic cars, our blog has something for everyone. We pride ourselves on providing accurate and
                    relevant information to help our readers make informed decisions about their cars. Plus, we love
                    cars just as much as our readers do!
                </p>
            </section>
            <!--Секция с преимуществами-->
            <section class="mt-[100px] bg-header rounded-2xl p-[100px]">
                {{--Блок по центру с преимуществами--}}
                <div class="grid grid-cols-2 gap-[100px]">
                    <!--Итерируемся по преимуществам-->
                    @foreach($benefits as $benefit)
                        <div class="flex">
                            <img src="images/{{ $benefit->img }}" alt="icon" class="w-[150px]">
                            <div class="ml-[30px]">
                                <h2 class="text-2xl text-slate-100">{{ $benefit->title }}</h2>
                                <p class="text-md mt-3 text-slate-300 w-[80%]">{{ $benefit->content }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </main>
@endsection

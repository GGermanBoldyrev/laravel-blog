@extends('template.base_template')

@section('content')
    <main>
        <div class="container mx-auto min-h-screen-minus-header justify-center items-center flex [&>div]:w-1/2">
            <div class="[&>p]:py-3">
                <p class="font-bold text-7xl text-white">Whoops!</p>
                <p class="font-medium text-5xl">This page got lost in conversation.</p>
                <p class="text-2xl">Not to worry. You can head over to our <a href="/"
                                                                              class="text-blue-700 hover:text-white duration-300">homepage.</a>
                </p>
            </div>
            <div>
                <img src="{{ asset('images/porsche.png') }}" alt="Porsche Picture">
            </div>
        </div>
    </main>
@endsection

@extends('template.base_template')

@section('content')
    <div class="bg-header min-h-screen-minus-header">
        <div class="relative">
            <video autoplay muted preload="auto" loop
                   class="grayscale opacity-40 w-screen">
                <source src="{{ asset('videos/porsche.mp4') }}" type="video/mp4">
            </video>
            <div id="welcome-text" class="whitespace-nowrap opacity-80 w-fit absolute top-1/2 left-1/2 translate-x-minus-50% translate-y-minus-50%
            text-4xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl
            ">
                Glad to see you . . .
            </div>
        </div>
    </div>
@endsection

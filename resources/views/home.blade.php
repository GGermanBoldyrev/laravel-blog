@extends('template.base_template')

@section('content')
    <div class="min-h-screen-minus-header bg-header">
        <video autoplay muted preload="auto" loop
               class="grayscale opacity-40 w-screen min-h-main-page">
            <source src="{{ asset('videos/porsche-slow.mp4') }}" type="video/mp4">
        </video>
    </div>
@endsection

@extends('template.base_template')

@section('content')
    <main>
        {{--Контейнер --}}
        <div class="container mx-auto">
            <!--Кнопка назад-->
            <x-back_posts_button/>
            <!--Блок с формой-->
            <div class="flex items-center justify-center min-h-screen-minus-header">
                <!--Форма создания поста-->
                <form action="{{ route('posts.store') }}" method="POST" class="w-[600px]">
                    @csrf
                    <!--Заголовок-->
                    <div class="text-5xl text-center">Edit your post</div>
                    <!--Ввод title-->
                    <div class="flex flex-col mt-[30px]">
                        <x-form-label for="title">Enter new title</x-form-label>
                        <x-form-textarea id="title" placeholder="New title" rows="2">{{ $post->title }}</x-form-textarea>
                    </div>
                    <!--Ввод content-->
                    <div class="flex flex-col mt-[30px]">
                        <x-form-label for="content">Enter new text</x-form-label>
                        <x-form-textarea id="content" placeholder="New text" rows="8">{{ $post->content }}</x-form-textarea>
                    </div>
                    {{--Прикрепить картинку--}}
                    <div class="mt-5">Add an image</div>
                    {{--Чекбокс вернуться к посту--}}
                    <div>
                        <input type="checkbox" name="checkbox" id="checkbox" class="mt-5">
                        <label for="checkbox" class="ml-1">Go to your post</label>
                    </div>
                    {{--Контейнер для кнопки submit--}}
                    <div class="w-full flex justify-center mt-5">
                        <!--Кнопка submit-->
                        <x-form-submit/>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection

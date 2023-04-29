@extends('template.base_template')

@section('content')
    <main>
        {{--Контейнер --}}
        <div class="container mx-auto min-h-screen-minus-header flex items-center justify-center">
            <!--Форма создания поста-->
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <!--Заголовок-->
                <div class="text-5xl">Create a new post</div>
                <!--Ввод title-->
                <div class="flex flex-col mt-5">
                    <label for="title" class="text-xl">Enter the title</label>
                    <input id="title" name="title" type="text" placeholder="Title..."
                           class="bg-background border rounded border-black outline-0 placeholder-black
                                      p-1.5">
                </div>
                <!--Ввод content-->
                <div class="flex flex-col mt-5">
                    <label for="content" class="text-xl">Enter the text</label>
                    <textarea id="content" name="content" type="text" placeholder="Text..." rows="6"
                              class="bg-background border rounded border-black outline-0 placeholder-black
                                         p-1.5 resize-none"></textarea>
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
                    <input type="submit" value="Submit" class="bg-header px-4 py-2 rounded border border-black
                                                               hover:cursor-pointer hover:bg-green-600 duration-200">
                </div>
            </form>
        </div>
    </main>
@endsection

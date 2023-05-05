@extends('template.base_template')

@section('content')
    <main>
        {{--Контейнер --}}
        <div class="container mx-auto">
            <!--Кнопка назад-->
            <x-button-back class="mt-[50px]"></x-button-back>
            <!--Блок с формой-->
            <div class="flex flex-col items-center justify-center min-h-screen-minus-header">
                <!--Заголовок-->
                <div class="text-5xl">Create a new post</div>
                <!--Форма создания поста-->
                <form action="{{ route('posts.store') }}" method="POST" class="w-[600px]">
                    @csrf

                    <!--Ввод title-->
                    <div class="flex flex-col mt-[50px]">
                        <!--Лейбл для title-->
                        <label for="create-post-title" class="text-xl mb-[5px]">Enter the title *</label>
                        <!--Ввод текста title-->
                        <textarea id="create-post-title" name="title" type="text" rows="2"
                                  {{--Если есть ошибки валидации--}}
                                  @if($errors->getBag('default')->first('title'))
                                      placeholder="{{ $errors->getBag('default')->first('title') }}"
                                      class="bg-background border rounded border-black outline-0 placeholder-red-800
                                             p-1.5 resize-none"
                                  @else
                                      placeholder="Title"
                                      class="bg-background border rounded border-black outline-0 placeholder-black p-1.5
                                             resize-none"
                            @endif
                        ></textarea>
                    </div>

                    <!--Ввод content-->
                    <div class="flex flex-col mt-[30px]">
                        <!--Лейбл для content-->
                        <label for="create-post-content" class="text-xl mb-[5px]">Enter the content *</label>
                        <!--Ввод текста для content-->
                        <textarea id="create-post-content" name="content" type="text" rows="8"
                                  {{--Если есть ошибки валидации--}}
                                  @if($errors->getBag('default')->first('content'))
                                      placeholder="{{ $errors->getBag('default')->first('content') }}"
                                      class="bg-background border rounded border-black outline-0 placeholder-red-800
                                             p-1.5 resize-none"
                                  @else
                                      placeholder="Content"
                                      class="bg-background border rounded border-black outline-0 placeholder-black p-1.5
                                             resize-none"
                            @endif
                        ></textarea>
                    </div>

                    {{--Прикрепить картинку--}}
                    <div class="flex flex-col mt-[30px]">
                        <!--Лейбл для картинки-->
                        <label for="create-post-image" class="text-xl mb-[5px]">Add an image *</label>
                        <!--Ввод картинки-->
                        <input name="img" id="create-post-image" type="text" class="bg-background border rounded
                                border-black outline-0 placeholder-black p-1.5 w-1/2" placeholder="Image">
                    </div>

                    {{--Чекбокс вернуться к посту--}}
                    <div class="mt-[30px]">
                        <input type="checkbox" name="checkbox" id="checkbox">
                        <label for="checkbox" class="ml-1">Go to your post</label>
                    </div>

                    {{--Контейнер для кнопки submit--}}
                    <div class="w-full flex justify-center mt-[30px]">
                        <!--Кнопка submit-->
                        <x-form-submit/>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection

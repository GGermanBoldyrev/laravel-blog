{{--Отдельный пост--}}

<div class="bg-header rounded h-fit lg:w-[330px] xl:w-[400px] 2xl:w-[365px]">
    <!--Картинка-->
    <div class="relative">
        <img src="{{ asset('images/image.jpeg') }}" alt="Кратинка к посту"
             class="h-[250px] w-full object-cover">
        <!--Секция редактировать, удалиить-->
        <div class="flex absolute top-0 right-0 mt-1.5">
            <!--Редактировать-->
            <a href="/posts/{{ $id }}/edit">
                <img src="{{ asset('images/edit.png') }}" alt="edit" class="h-[20px]">
            </a>
            <!--Удалить-->
            <form method="POST" action="/posts/{{ $id }}"
                  onsubmit="return confirm('Delete this post?')">
                @csrf
                @method('DELETE')
                <input type="image" src="{{ asset('images/delete.png') }}" alt="delete"
                       class="h-[20px] mx-1.5">
            </form>
        </div>
    </div>
    <!--Блок-->
    <div class="py-2 px-2.5 relative hover:cursor-default">
        <!--Заголовок-->
        <div class="font-bold text-lg h-[84px] overflow-hidden md:h-[56px] lg:h-[84px]">
            {{ $title }}
        </div>
        <!--Текст-->
        <div class="flex flex-col justify-between h-full">
            <div class="mt-2 overflow-hidden h-[260px]">
                {{ $content }}
            </div>
            <div class="flex items-center justify-between mt-5">
                <!--Ссылув на пост-->
                <a href="/posts/{{ $id }}">
                    <div class="text-black border border-black w-fit px-2 py-1.5 rounded
                                hover:text-white hover:border-white duration-200">
                        View full
                    </div>
                </a>
                <!--Дата создания поста без времени-->
                <div>
                    {{ $time }}
                </div>
            </div>
        </div>
    </div>
</div>

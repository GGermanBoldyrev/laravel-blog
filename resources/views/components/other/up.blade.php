{{--Позиция кнопки--}}
<div id="up-button" class="fixed bottom-10 right-10 hidden">
    {{--Общее оформление кнопки--}}
    <div class="h-[50px] w-[50px] border rounded-full text-black text-xl font-medium relative flex justify-center items-center
                hover:border-black hover:cursor-pointer">
        {{--На hover появляется текст--}}
        <div class="flex items-center justify-center w-full h-full rounded-full
                    before:content-['Up'] before:opacity-0
                    hover:before:opacity-100">
            {{--На hover пропадает стрелка вверх--}}
            <img class="p-2 h-full w-full rounded-full absolute hover:opacity-0"
                 src="{{ asset('images/up-arrow.png') }}" alt="Up">
        </div>
    </div>
</div>

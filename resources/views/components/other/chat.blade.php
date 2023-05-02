<!--Расположение кнопки на странице-->
<div class="fixed bottom-10 left-10">
    <!--Через js на клик будем скрывать кнопку чата и показывать блок-->

    <!--Кнопка для чата-->
    <div id="chat-open" class="px-[15px] py-[5px] border rounded text-white text-2xl flex-none
                                 hover:cursor-pointer hover:border-black hover:text-black duration-200">
        Chat
    </div>

    <!--Блок чата-->
    <div id="chat-section" class="px-[20px] py-[10px] bg-chat w-[400px] h-[700px] flex justify-between flex-col
                                border-black rounded-xl border">
        <!--Верхняя часть чата-->
        <div class="flex justify-between items-center">
            <div class="text-xl">Online chat</div>
            <img src="{{ asset('images/close.png') }}" alt="Close" id="chat-close" class="h-[15px]
                                                                                          hover:cursor-pointer">
        </div>
        <!--Тело чата, где выводятся сообщения-->
        <div class="my-5 overflow-y-scroll scrollbar-hide">
            <!--Если пользователь авторизован, то выводим чат, иначе выводим просьбу авторизоваться-->
            @if (false)
                <!--Будем выводить сообщения-->
                @for ($i = 0; $i < 6; $i++)
                    <div class="mb-3.5">
                        <!--Шапка сообщения-->
                        <div class="flex justify-between items-center">
                            <div class="text-xl">Герман Болдырев</div>
                            <div class="text-sm">23:12 - 12 feb</div>
                        </div>
                        <div class="mt-1 text-stone-800">
                            Здравствуйте, хочу купить вашу клавиатуру
                            Здравствуйте, хочу купить вашу клавиатуру
                            Здравствуйте, хочу купить вашу клавиатуру
                            Здравствуйте, хочу купить вашу клавиатуру
                        </div>
                    </div>
                @endfor
            @else
                <div class="text-center text-xl">
                    Сhat is available only to authorized users
                </div>
            @endif
        </div>
        <!--Блок для набора текста, только для авторизованных пользователей-->
        @if (false)
            <div class="flex justify-between items-center">
                <input type="text" placeholder="Enter your message"
                    class="bg-chat px-[10px] py-[3px] rounded border border-black outline-0 placeholder-black w-full mr-[20px]
                            focus:border-slate-300">
                <div class="relative">
                    <img src="{{ asset('images/upward-black.png') }}" alt="Send" id="send-message"
                        class="border border-black rounded-full p-1.5  hover:border-white hover:cursor-pointer hover:opacity-0 duration-200">
                    <img src="{{ asset('images/upward-white.png') }}" alt="Send" id="send-message"
                        class="border border-white rounded-full p-1.5 absolute translate-y-[-100%] opacity-0 hover:cursor-pointer hover:opacity-90 duration-200">
                </div>
            </div>
        @else
            <div class="w-full flex justify-center">
                <a href="/login" class="border rounded border-black py-1.5 px-2 w-fit
                                        hover:text-slate-300 hover:border-slate-300 duration-300">Log in</a>
            </div>
        @endif
    </div>
</div>

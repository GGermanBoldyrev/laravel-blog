{{--Расположение кнопки на странице--}}
<div class="fixed bottom-10 left-10">
    <!--Через js на клик будем скрывать кнопку чата и показывать блок-->

    <!--Кнопка для чата-->
    <div id="chat-button" class="px-[15px] py-[5px] border rounded text-white text-2xl flex-none
                                 hover:cursor-pointer hover:border-black hover:text-black duration-200">
        Chat
    </div>

    <!--Блок чата-->
    <div id="chat-block" class="px-[20px] py-[10px] bg-chat w-[400px] h-[700px] flex justify-between flex-col
                                border-black rounded-xl border">
        <!--Верхняя часть чата-->
        <div class="flex justify-between items-center">
            <div class="text-xl">Online chat</div>
            <img src="{{ asset('images/close.png') }}" alt="Close" id="chat-close" class="h-[15px]
                                                                                          hover:cursor-pointer">
        </div>
        <!--Тело чата, где выводятся сообщения-->
        <div class="my-5 overflow-y-scroll scrollbar-hide">
            <!--Будем выводить сообщения-->
            @for ($i = 0; $i < 6; $i++)
                <div class="bg-message rounded mb-3">
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
        </div>
        <!--Блок для набора текста-->
        <div class="flex justify-between items-center">
            <input type="text" placeholder="Enter your message"
                   class="bg-chat px-[10px] py-[3px] rounded border border-black outline-0 placeholder-black w-full mr-[20px]
                          focus:border-slate-300">
            <div class="relative">
                <img src="{{ asset('images/upward-black.png') }}" alt="Send" id="send-message"
                     class="border border-black rounded-full p-1.5  hover:border-white hover:opacity-0 duration-200">
                <img src="{{ asset('images/upward-white.png') }}" alt="Send" id="send-message"
                     class="border border-white rounded-full p-1.5 absolute translate-y-[-100%] opacity-0 hover:opacity-100 duration-200">
            </div>
        </div>
    </div>
</div>

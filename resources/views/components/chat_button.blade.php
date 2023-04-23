{{--Расположение кнопки на странице--}}
<div class="fixed bottom-10 left-10">
    <!--Через js на клик будем скрывать кнопку чата и показывать блок-->

    <!--Кнопка для чата-->
    <div id="chat-button" class="px-[15px] py-[5px] border rounded text-white text-2xl
                                 hover:cursor-pointer hover:border-black hover:text-black duration-200">
        Chat
    </div>

    <!--Блок чата-->
    <div id="chat-block" class="px-[20px] py-[10px] bg-header w-[400px] h-[700px] flex justify-between flex-col
                                border-black rounded-xl border">
        <!--Верхняя часть чата-->
        <div class="flex justify-between items-center">
            <div class="text-xl">Online chat</div>
            <img src="{{ asset('images/close.png') }}" alt="Close" id="chat-close" class="h-[15px]
                                                                                          hover:cursor-pointer">
        </div>
        <!--Тело чата, где выводятся сообщения-->
        <div>
            Тут будлут смс
        </div>
        <!--Блок для набора текста-->
        <div class="flex justify-between items-center">
            <div>Введите смс</div>
            <img src="{{ asset('images/paper-plane.png') }}" alt="Send" id="send-message" class=" h-[20px]">
        </div>
    </div>
</div>

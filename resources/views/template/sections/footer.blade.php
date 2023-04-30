<footer>
    {{--Основные стили для футера--}}
    <div class="bg-footer h-[150px] text-white flex items-center justify-center">
        <!--Контейнер-->
        <div class="container mx-auto">
            <div class="flex justify-between">
                <!--Левая часть с иконками-->
                <span class="flex">
                    {{--Ссылка на vk--}}
                    <a href="https://vk.com/zuzuka2001" target="_blank" class="mr-3">
                        <img src="{{ asset('images/vk.png') }}" alt="vk icon">
                    </a>
                    {{--Ссылка на tg--}}
                    <a href="https://t.me/ggerman1337" target="_blank" class="mr-3">
                        <img src="{{ asset('images/telegram.png') }}" alt="telegram icon">
                    </a>
                </span>
                <!--Центральный текст-->
                <span>© 2023 CarBlog Author</span>
                <!--Правая часть с иконкой-->
                <span>
                    <a href="https://github.com/GGermanBoldyrev" target="_blank">
                        <img src="{{ asset('images/github.png') }}" alt="github icon">
                    </a>
                </span>
            </div>
        </div>
    </div>
</footer>

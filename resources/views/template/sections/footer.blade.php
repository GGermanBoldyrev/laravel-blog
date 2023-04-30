<footer class="mt-[50px]">
    {{--Основные стили для футера--}}
    <div class="bg-footer h-[150px] text-white flex items-center justify-center">
        <!--Контейнер-->
        <div class="container mx-auto">
            <div class="flex justify-between items-center">
                <!--Левая часть с иконками-->
                <span class="flex">
                    {{--Ссылка на vk--}}
                    <a href="https://vk.com/zuzuka2001" target="_blank" class="mr-3">
                        <img src="{{ asset('images/vk.png') }}" alt="vk icon">
                    </a>
                    {{--Ссылка на tg--}}
                    <a href="https://t.me/ggerman1337" target="_blank">
                        <img src="{{ asset('images/telegram.png') }}" alt="telegram icon">
                    </a>
                </span>
                <!--Центральный текст-->
                <span class="relative">© 2023 CarBlog Author</span>
                <!--Правая часть с иконкой-->
                <span class="flex w-[76px] justify-end">
                    <a href="https://github.com/GGermanBoldyrev" target="_blank">
                        <img src="{{ asset('images/github.png') }}" alt="github icon">
                    </a>
                </span>
            </div>
            <div class="flex justify-center absolute left-[50%] translate-x-[-50%] mt-2">
                <ul class="flex text-header">
                    <li><a href="https://www.linuxfoundation.org/legal/terms" target="_blank"
                           class="hover:text-header-hover duration-200">Terms</a></li>
                    <li class="mx-2">|</li>
                    <li><a href="https://www.linuxfoundation.org/legal/trademark-usage" target="_blank"
                           class="hover:text-header-hover duration-200">Trademark</a></li>
                    <li class="mx-2">|</li>
                    <li><a href="https://www.linuxfoundation.org/legal/privacy-policy" target="_blank"
                           class="hover:text-header-hover duration-200">Privacy</a></li>
                    <li class="mx-2">|</li>
                    <li><a href="https://github.com/GGermanBoldyrev/laravel-blog" target="_blank"
                           class="hover:text-header-hover duration-200">License</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

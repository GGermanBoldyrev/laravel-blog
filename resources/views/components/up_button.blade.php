{{--Button position--}}
<div class="fixed bottom-10 right-10">
    {{--Button round properties--}}
    <div class="h-60px w-60px border rounded-full text-white text-2xl font-medium">
        {{--Arrow, прячем на hover--}}
        <div class="w-full h-full rounded-full flex justify-center items-center
                    hover:opacity-0">
            {{--Arrow image--}}
            <img src="{{ asset('images/up-arrow.png') }}" alt="Up" class="h-arrow-height">
        </div>
        {{--Up текст скрыт, на hover видимый--}}
        <div class="absolute invisible top-1/2 left-1/2 -mt-[16px] -ml-[17.68px]
                    hover:inline-block">Up</div>
    </div>
</div>

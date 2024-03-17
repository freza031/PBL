<nav class="sticky top-0 z-10">
    <div class="flex flex-row justify-between px-10 py-2 bg-[#CCD5AE]">
        <div class="w-64 flex justify-center items-center">
            <a href="{{ asset('/') }}"><img class="w-20" src="{{ asset('img/logonav.png')}}" alt=""></a>
        </div>
        <div class="w-50 flex flex-row gap-7 align-middle justify-center px-10 py-3">
            <a href="#">
                <img class="w-8" src="{{ asset('img/love.png') }}" alt="">
            </a>
            <a href="#">
                <img class="w-8" src="{{ asset('img/cart.png') }}" alt="">
            </a>
            <a href="#" class="text-[#FE5F55] font-bold font-roboto-condensed text-3xl">
                Contact
            </a>
            <span class="text-[#FE5F55] font-bold font-roboto-condensed text-3xl">
                Nama_user
            </span>
            <a href="#">
                <img class="w-8" src="{{ asset('img/user.png') }}" alt="">
            </a>
        </div>
    </div>
</nav>
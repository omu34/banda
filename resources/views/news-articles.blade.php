<x-app-layout>
    @show
    @section('content')
    <div class="min-h-[500px]" style="background:url({{ asset('assets/images/article-banner.webp') }});background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="flex max-w-screen-xl mx-auto">
            <div class="justify-start md:mt-[80px] mt-4">
                <div>
                    <h1 class="banner-word">
                        News $ Articles
                    </h1>
                </div>
                <div class="ml-2">
                    <h4 class="banner-h2">
                        Access Bandari DT Sacco <br />services fast and easy
                    </h4>
                </div>
                <div class="ml-2 mt-4">
                    <a href="{{ route('register') }}" class="text-white">
                        <button class="text-white uppercase hover:bg-blue-300 ring-1  ring-white rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                            Open Account
                            <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="flex mb-4 ">
            <div class="w-4/5 h-12"></div>
            <div class="w-1/5 h-12 md:mt-20 justify-end ">
                <img class="h-12 " src="{{ asset('assets/images/Chat.webp') }}" alt="" srcset="">
            </div>
        </div>
    </div>


    <div class=" bg-white pt-10 pb-10">
        <div class="max-w-screen-xl mx-auto">


            <div class="flex flex-wrap justify-center text-center gap-3 pb-5">
                <a href="{{ route('register') }}" class="text-white ">
                    <button style="background: var(--Hues-Light-Blue, #99CFFF);" class="rounded-md px-2 py-0.5 text-xs ">
                        <p class="n-m-buttons text-left uppercase">All</p>
                    </button>
                </a>
                <a href="{{ route('register') }}" class="text-white ">
                    <button style="background: var(--Hues-Light-Blue, #99CFFF);" class="rounded-md px-2 py-0.5 text-xs ">
                        <p class="n-m-buttons text-left uppercase">products</p>
                    </button>
                </a>
                <a href="{{ route('register') }}" class="text-white ">
                    <button style="background: var(--Hues-Light-Blue, #99CFFF);" class="rounded-md px-2 py-0.5 text-xs ">
                        <p class="n-m-buttons text-left uppercase">insights</p>
                    </button>
                </a>
                <a href="{{ route('register') }}" class="text-white ">
                    <button style="background: var(--Hues-Light-Blue, #99CFFF);" class="rounded-md px-2 py-0.5 text-xs ">
                        <p class="n-m-buttons text-left uppercase">events</p>
                    </button>
                </a>

            </div>

            <div class="  grid md:grid-cols-2 grid-cols-1 gap-10 bg-white">
                <div class="w-full justify-self-center md:justify-self-center lg:justify-self-start">
                    <div class="mt-3">
                        <div class="">
                            <div class="">
                                <img class="w-full" src="{{ asset('assets/images/n-m-1.webp') }}">
                            </div>
                            <div class="mt-3">
                                <h1 class="n-m-title">
                                    Sunt qui esse pariatur duis deserunt mollit
                                </h1>
                            </div>
                            <div class="mt-3">

                                <button style="background: var(--Hues-Light-Blue, #99CFFF);" class="rounded-lg px-6 py-1">
                                    <p class="n-m-button text-left">Products</p>
                                </button>

                                <button style="background: var(--Hues-Light-Blue, #99CFFF); " class="rounded-lg px-6 py-1">
                                    <p class="n-m-button text-left">02/12/2023</p>
                                </button>

                            </div>



                        </div>

                        <div class="p-services-paragraph mt-3">
                            <p class="">Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Quia
                                eos maiores
                                impedit et vero tenetur, accusantium sequi sint?</p>
                        </div>

                    </div>
                    <div class="mt-3">
                        <div class="">
                            <div class="">
                                <img class="w-full" src="{{ asset('assets/images/n-m-2.webp') }}">
                            </div>
                            <div class="mt-3">
                                <h1 class="n-m-title">
                                    Sunt qui esse pariatur duis deserunt mollit
                                </h1>
                            </div>
                            <div class="mt-3">

                                <button style="background: var(--Hues-Light-Blue, #99CFFF);
                        " class="rounded-lg px-6 py-1">
                                    <p class="n-m-button text-left">Products</p>
                                </button>

                                <button style="background: var(--Hues-Light-Blue, #99CFFF);
                        " class="rounded-lg px-6 py-1">
                                    <p class="n-m-button text-left">02/12/2023</p>
                                </button>

                            </div>

                        </div>

                        <div class="p-services-paragraph mt-3">
                            <p class="">Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Quia
                                eos maiores
                                impedit et vero tenetur, accusantium sequi sint?</p>
                        </div>

                    </div>

                    <div class="mt-3">
                        <div class="">
                            <div class="">
                                <img class="w-full" src="{{ asset('assets/images/n-m-1.webp') }}">
                            </div>
                            <div class="mt-3">
                                <h1 class="n-m-title">
                                    Sunt qui esse pariatur duis deserunt mollit
                                </h1>
                            </div>
                            <div class="mt-3">

                                <button style="background: var(--Hues-Light-Blue, #99CFFF);" class="rounded-lg px-6 py-1">
                                    <p class="n-m-button text-left">Products</p>
                                </button>

                                <button style="background: var(--Hues-Light-Blue, #99CFFF); " class="rounded-lg px-6 py-1">
                                    <p class="n-m-button text-left">02/12/2023</p>
                                </button>

                            </div>

                        </div>

                        <div class="p-services-paragraph mt-3">
                            <p class="">Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Quia
                                eos maiores
                                impedit et vero tenetur, accusantium sequi sint?</p>
                        </div>

                    </div>
                </div>


                <div class="w-full justify-self-center md:justify-self-center lg:justify-self-end ">
                    <div class="mt-3">
                        <div class="">
                            <div class="">
                                <img class="w-full" src="{{ asset('assets/images/n-m-3.webp') }}">
                            </div>
                            <div class="mt-3">
                                <h1 class="n-m-title">
                                    Sunt qui esse pariatur duis deserunt mollit
                                </h1>
                            </div>
                            <div class="mt-3">

                                <button style="background: var(--Hues-Light-Blue, #99CFFF);
                        " class="rounded-lg px-6 py-1">
                                    <p class="n-m-button text-left">Products</p>
                                </button>

                                <button style="background: var(--Hues-Light-Blue, #99CFFF);
                        " class="rounded-lg px-6 py-1">
                                    <p class="n-m-button text-left">02/12/2023</p>
                                </button>

                            </div>

                        </div>

                        <div class="p-services-paragraph mt-3">
                            <p class="">Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Quia
                                eos maiores
                                impedit et vero tenetur, accusantium sequi sint?</p>
                        </div>

                    </div>
                    <div class="mt-3">
                        <div class="">
                            <div class="">
                                <img class="w-full" src="{{ asset('assets/images/n-m-4.webp') }}">
                            </div>
                            <div class="mt-3">
                                <h1 class="n-m-title">
                                    Sunt qui esse pariatur duis deserunt mollit
                                </h1>
                            </div>
                            <div class="mt-3">

                                <button style="background: var(--Hues-Light-Blue, #99CFFF);
                        " class="rounded-lg px-6 py-1">
                                    <p class="n-m-button text-left">Products</p>
                                </button>

                                <button style="background: var(--Hues-Light-Blue, #99CFFF);
                        " class="rounded-lg px-6 py-1">
                                    <p class="n-m-button text-left">02/12/2023</p>
                                </button>

                            </div>

                        </div>

                        <div class="p-services-paragraph mt-3">
                            <p class="">Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Quia
                                eos maiores
                                impedit et vero tenetur, accusantium sequi sint?</p>
                        </div>

                    </div>

                    <div class="mt-3">
                        <div class="">
                            <div class="">
                                <img class="w-full" src="{{ asset('assets/images/n-m-3.webp') }}">
                            </div>
                            <div class="mt-3">
                                <h1 class="n-m-title">
                                    Sunt qui esse pariatur duis deserunt mollit
                                </h1>
                            </div>
                            <div class="mt-3">

                                <button style="background: var(--Hues-Light-Blue, #99CFFF);
                        " class="rounded-lg px-6 py-1">
                                    <p class="n-m-button text-left">Products</p>
                                </button>

                                <button style="background: var(--Hues-Light-Blue, #99CFFF);
                        " class="rounded-lg px-6 py-1">
                                    <p class="n-m-button text-left">02/12/2023</p>
                                </button>

                            </div>

                        </div>

                        <div class="p-services-paragraph mt-3">
                            <p class="">Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Quia
                                eos maiores
                                impedit et vero tenetur, accusantium sequi sint?</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="flex justify-center md:justify-center lg:justify-end ">
                <button style="background: var(--Brand-Dark-Blue, #005AA9);" class="text-white uppercase  hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                    next page
                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                    </svg>
                </button>
            </div>
        </div>

    @show
</x-app-layout>

<x-guest-layout>
    @show
    @section('content')
    <body class="bg-slate-200">
        <div class="max-w-screen mx-auto  gap-6 overflow-hidden">
            <div class="h-fit fixed-top">
                <nav class="w-full z-20" style="background-color:#FFCC26;">
                    <div class="max-w-screen-xl mx-auto  grid grid-cols-5 items-center justify-between p-6">
                        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse lg:justify-end md:justify-center justify-center">
                            <div class="mr-2">
                                <a href="{{ route('register') }}" class="text-white ">
                                    <button type="button" class="text-white  hover:bg-blue-200 ring-1 focus:outline-none ring-white font-medium rounded-lg text-sm px-4 py-1 text-center uppercase">
                                        Join Us
                                    </button>
                                </a>
                                <button type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                                    <span class="sr-only"></span>
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                                    </svg>
                                </button>
                            </div>
                            <div class="">
                                <button type="button" class="text-white  hover:bg-blue-200 ring-1 focus:outline-none ring-white font-medium rounded-lg text-sm px-4 py-1 text-center uppercase">
                                    Member Portal
                                </button>
                                <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                                    <span class="sr-only">Open main menu</span>
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="md:-ml-9">
                            <a href="https://www.google.com/maps/dir/Bandari+sacco+nairobi+branch/MV6H%2BWCM+Bandari+sacco+nairobi+branch,+Nairobi/@-1.3375742,36.8372475,13z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x182f131e12bc20e5:0x41d8bae60685f5f1!2m2!1d36.878533!2d-1.3376604!1m5!1m1!1s0x182f131e12bc20e5:0x41d8bae60685f5f1!2m2!1d36.878533!2d-1.3376604!3e2?authuser=0&entry=ttu" class=" ">
                                <button class="text-black -ml-5 hover:bg-blue-500   rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    <img class="h-8" src="{{ asset('assets/images/badge_3.webp') }}">
                                    <p class="h-paragraph text-white ml-2 text-left">Bandari Sacco
                                        Building, <br> Moi
                                        Avenue, Mombasa</p>
                                </button>
                            </a>
                        </div>

                        <div class="">
                            <a href="tel:+245724002525" class=" ">
                                <button class="text-black -ml-5 hover:bg-blue-500   rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    <img class="h-8" src="{{ asset('assets/images/badge.webp') }}">
                                    <p class="h-paragraph text-white ml-2">(+254)-724-002-525</p>
                                </button>
                            </a>
                        </div>


                        <div class="">
                            <a href="mailto:info@bandari.co.ke" class=" ">
                                <button class="text-black -ml-5 hover:bg-blue-500   rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    <img class="h-8" src="{{ asset('assets/images/badge_2.webp') }}">
                                    <p class="h-paragraph text-white ml-2">info@bandari.co.ke</p>
                                </button>
                            </a>
                        </div>


                        <div class="grid grid-cols-5 gap-2 pr-4">
                            <div class=" ">
                                <img class="w-6 h-auto" src="{{ asset('assets/images/social.webp') }}">

                            </div>
                            <div class="  ">
                                <img class="w-6 h-auto" src="{{ asset('assets/images/social_1.webp') }}">

                            </div>
                            <div class=" ">
                                <img class="h-auto w-6" src="{{ asset('assets/images/social_2.webp') }}">

                            </div>
                            <div class=" ">
                                <img class="h-auto w-6 rounded-full bg-red-600" src="{{ asset('assets/images/mdi_youtube.webp') }}">

                            </div>
                            <div class=" ">
                                <img class="h-auto w-6" src="{{ asset('assets/images/social_4.webp') }}">

                            </div>
                        </div>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="bg-cover w-full min-h-[500px] bg-no-repeat bg-center pb-10" style="background:url({{ asset('assets/images/home-banner.webp') }});background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="flex max-w-screen-2xl mx-auto items-start ">
                    <div class="w-1/6 md:-ml-24"></div>
                    <div class="justify-start  md:mt-[80px] mt-4 ">
                        <div class="">
                            <h1 class="banner-word">
                                Bandari DT SACCO
                            </h1>
                        </div>
                        <div class="ml-2">
                            <h4 class="banner-h2">
                                Access Bandari DT Sacco <br />services fast and easy
                            </h4>
                        </div>
                        <div class="ml-2 mt-4">
                            <a href="{{ route('register') }}" class="text-white ">
                                <button class="text-white uppercase hover:bg-blue-300 ring-1  ring-white rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    Click To Start
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>

                    </div>
                </div>

                <div class="flex mb-4 max-w-screen-xl mx-auto ">
                    <div class="w-4/5  h-12"></div>
                    <div class="w-1/5  h-12 md:mt-20 ">
                        <img class="" src="{{asset('assets/images/Chat.webp')}}" alt="" srcset="">
                    </div>
                  </div>
            </div>


            <div class="bg-white min-h-[390px] ">
                <div class="max-w-screen-xl mx-auto">
                    <div class=" flex ">
                        <div class="w-full -mr-1">
                            <hr class="h-0.5" style="background: var(--Hues-Light-Blue, #99CFFF);">
                        </div>
                        <div class="w-20 -mt-3">
                            <img class="" src="{{ asset('assets/images/star.webp') }}">
                        </div>
                        <div class="w-full -ml-4">
                            <hr class="h-0.5" style="background: var(--Hues-Light-Blue, #99CFFF);">
                        </div>
                    </div>

                    <div class=" mt-[10px]">
                        <div class="flex justify-center">
                            <h1 class="our-branches text-blue-600">
                                Engage Us
                            </h1>
                        </div>


                        <div class="mt-[60px] grid lg:grid-cols-6 md:grid-cols-3 grid-cols-2 gap-4 p-8 lg:justify-normal md:justify-self-center justify-self-center">
                            <div class="">
                                <a href="" class="footer-p">
                                    <div class="flex gap-2 ">
                                        <div class="">
                                            <img class="h-6" src="{{ asset('assets/images/social.webp') }}">

                                        </div>
                                        <div class="">
                                            <div class="">
                                                <p class="footer-p2 text-blue-400">
                                                    Facebook
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="">
                                <a href="" class="footer-p">
                                    <div class="flex gap-2 ">
                                        <div class="">
                                            <img class="h-6" src="{{ asset('assets/images/social_1.webp') }}">

                                        </div>
                                        <div class="">
                                            <div class="">
                                                <p class="footer-p2 text-blue-400">
                                                    Instagram
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="">
                                <a href="" class="footer-p">
                                    <div class="flex gap-2 ">
                                        <div class="">
                                            <img class="h-6" src="{{ asset('assets/images/social_2.webp') }}">

                                        </div>
                                        <div class="">
                                            <div class="">
                                                <p class="footer-p2">
                                                    X
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="">
                                <a href="" class="footer-p">
                                    <div class="flex gap-2 ">
                                        <div class="">
                                            <img class="h-6" src="{{ asset('assets/images/social_3.webp') }}">

                                        </div>
                                        <div class="">
                                            <div class="">
                                                <p class="footer-p2">
                                                    LinkedIn
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="">
                                <a href="" class="footer-p">
                                    <div class="flex gap-2 ">
                                        <div class="">
                                            <img class="h-6" src="{{ asset('assets/images/social_4.webp') }}">

                                        </div>
                                        <div class="">
                                            <div class="">
                                                <p class="footer-p">
                                                    WhatsApp
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="">
                                <a href="" class="footer-p">
                                    <div class="flex gap-2 ">
                                        <div class="">
                                            <img class="h-6 rounded-full bg-red-500" src="{{ asset('assets/images/mdi_youtube.webp') }}">

                                        </div>
                                        <div class="">
                                            <div class="">
                                                <p class="footer-p">
                                                    You-Tube
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>


                        <div class="flex justify-center">
                            <h1 class=" text-blue-600">
                                © <a href="" class="text-blue-300">Bandari Sacco</a>, all
                                rights reserved - Made
                                by <a href="" class="text-blue-300">Belva Digital</a>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative sm:flex sm:justify-center sm:items-center  bg-dots-darker bg-center  selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                @else
                <a href="{{ route('login') }}" class="font-semibold title-s text-white hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>

                <a href="{{ route('logout') }}" class="font-semibold title-s text-white hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>


                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-white hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"></a>
                @endif
                @endauth
            </div>
            @endif
        </div>
        </div>
        @show
</x-guest-layout>

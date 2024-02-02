<x-app-layout>
    @show
    @section('content')

    <div class="min-h-[500px]" style="background:url({{ asset('assets/images/event-banner.webp') }});background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="flex max-w-screen-xl mx-auto">
            <div class="justify-start md:mt-[80px] mt-4">
                <div>
                    <h1 class="banner-word">
                        Events
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
    <div class=" bg-white">
        <div class="max-w-screen-xl mx-auto ">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="rounded-xl mt-8  " style="background: var(--Hues-Light-Blue, #99CFFF);height:fit-content">
                    <div class="p-4 ">
                        <div class="">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/event-badge.webp') }}">

                        </div>
                        <div class="mt-4">
                            <h1 class="p-s11">
                                Investment Insights: Sacco Calendar Highlights
                            </h1>
                        </div>
                        <div class="mt-4">
                            <p class="p-s2">
                                Odio euismod lacinia at quis. Amet purus gravida
                                quis blandit
                                turpis.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('register') }}" class="-ml-5 ">
                                <button class="text-black  uppercase hover:bg-white   rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    View
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="rounded-xl mt-8  " style="background: var(--Hues-Light-Blue, #99CFFF);height:fit-content">
                    <div class="p-4 ">
                        <div class="">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/event-badge.webp') }}">

                        </div>
                        <div class="mt-4">
                            <h1 class="p-s11">
                                Thriving Together: Sacco Social & Financial Wellbeing
                            </h1>
                        </div>
                        <div class="mt-4">
                            <p class="p-s2">
                                Odio euismod lacinia at quis. Amet purus gravida
                                quis blandit
                                turpis.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('register') }}" class="-ml-5 ">
                                <button class="text-black  uppercase hover:bg-white   rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    View
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl mt-8  " style="background: var(--Hues-Light-Blue, #99CFFF);height:fit-content">
                    <div class="p-4 ">
                        <div class="">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/event-badge.webp') }}">

                        </div>
                        <div class="mt-4">
                            <h1 class="p-s11">
                                Savings Summit: Navigating Financial Peak
                            </h1>
                        </div>
                        <div class="mt-4">
                            <p class="p-s2">
                                Odio euismod lacinia at quis. Amet purus gravida
                                quis blandit
                                turpis.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('register') }}" class="-ml-5 ">
                                <button class="text-black  uppercase hover:bg-white   rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    view
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>





            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="rounded-xl mt-8  " style="background: var(--Hues-Light-Blue, #99CFFF);height:fit-content">
                    <div class="p-4 ">
                        <div class="">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/event-badge.webp') }}">

                        </div>
                        <div class="mt-4">
                            <h1 class="p-s11">
                                Investment Insights: Sacco Calendar Highlights
                            </h1>
                        </div>
                        <div class="mt-4">
                            <p class="p-s2">
                                Odio euismod lacinia at quis. Amet purus gravida
                                quis blandit
                                turpis.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('register') }}" class="-ml-5 ">
                                <button class="text-black  uppercase hover:bg-white   rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    View
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="rounded-xl mt-8  " style="background: var(--Hues-Light-Blue, #99CFFF);height:fit-content">
                    <div class="p-4 ">
                        <div class="">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/event-badge.webp') }}">

                        </div>
                        <div class="mt-4">
                            <h1 class="p-s11">
                                Thriving Together: Sacco Social & Financial Wellbeing
                            </h1>
                        </div>
                        <div class="mt-4">
                            <p class="p-s2">
                                Odio euismod lacinia at quis. Amet purus gravida
                                quis blandit
                                turpis.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('register') }}" class="-ml-5 ">
                                <button class="text-black  uppercase hover:bg-white   rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    View
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl mt-8  " style="background: var(--Hues-Light-Blue, #99CFFF);height:fit-content">
                    <div class="p-4 ">
                        <div class="">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/event-badge.webp') }}">

                        </div>
                        <div class="mt-4">
                            <h1 class="p-s11">
                                Savings Summit: Navigating Financial Peak
                            </h1>
                        </div>
                        <div class="mt-4">
                            <p class="p-s2">
                                Odio euismod lacinia at quis. Amet purus gravida
                                quis blandit
                                turpis.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('register') }}" class="-ml-5 ">
                                <button class="text-black  uppercase hover:bg-white   rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    view
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="rounded-xl mt-8  " style="background: var(--Hues-Light-Blue, #99CFFF);height:fit-content">
                    <div class="p-4 ">
                        <div class="">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/event-badge.webp') }}">

                        </div>
                        <div class="mt-4">
                            <h1 class="p-s11">
                                Investment Insights: Sacco Calendar Highlights
                            </h1>
                        </div>
                        <div class="mt-4">
                            <p class="p-s2">
                                Odio euismod lacinia at quis. Amet purus gravida
                                quis blandit
                                turpis.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('register') }}" class="-ml-5 ">
                                <button class="text-black  uppercase hover:bg-white   rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    View
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="rounded-xl mt-8  " style="background: var(--Hues-Light-Blue, #99CFFF);height:fit-content">
                    <div class="p-4 ">
                        <div class="">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/event-badge.webp') }}">

                        </div>
                        <div class="mt-4">
                            <h1 class="p-s11">
                                Thriving Together: Sacco Social & Financial Wellbeing
                            </h1>
                        </div>
                        <div class="mt-4">
                            <p class="p-s2">
                                Odio euismod lacinia at quis. Amet purus gravida
                                quis blandit
                                turpis.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('register') }}" class="-ml-5 ">
                                <button class="text-black  uppercase hover:bg-white   rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    View
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl mt-8  " style="background: var(--Hues-Light-Blue, #99CFFF);height:fit-content">
                    <div class="p-4 ">
                        <div class="">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/event-badge.webp') }}">

                        </div>
                        <div class="mt-4">
                            <h1 class="p-s11">
                                Savings Summit: Navigating Financial Peak
                            </h1>
                        </div>
                        <div class="mt-4">
                            <p class="p-s2">
                                Odio euismod lacinia at quis. Amet purus gravida
                                quis blandit
                                turpis.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('register') }}" class="-ml-5 ">
                                <button class="text-black  uppercase hover:bg-white   rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    view
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>





            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <div class="rounded-xl mt-8  " style="background: var(--Hues-Light-Blue, #99CFFF);height:fit-content">
                    <div class="p-4 ">
                        <div class="">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/event-badge.webp') }}">

                        </div>
                        <div class="mt-4">
                            <h1 class="p-s11">
                                Investment Insights: Sacco Calendar Highlights
                            </h1>
                        </div>
                        <div class="mt-4">
                            <p class="p-s2">
                                Odio euismod lacinia at quis. Amet purus gravida
                                quis blandit
                                turpis.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('register') }}" class="-ml-5 ">
                                <button class="text-black  uppercase hover:bg-white   rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    View
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="rounded-xl mt-8  " style="background: var(--Hues-Light-Blue, #99CFFF);height:fit-content">
                    <div class="p-4 ">
                        <div class="">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/event-badge.webp') }}">

                        </div>
                        <div class="mt-4">
                            <h1 class="p-s11">
                                Thriving Together: Sacco Social & Financial Wellbeing
                            </h1>
                        </div>
                        <div class="mt-4">
                            <p class="p-s2">
                                Odio euismod lacinia at quis. Amet purus gravida
                                quis blandit
                                turpis.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('register') }}" class="-ml-5 ">
                                <button class="text-black  uppercase hover:bg-white   rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    View
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="rounded-xl mt-8  " style="background: var(--Hues-Light-Blue, #99CFFF);height:fit-content">
                    <div class="p-4 ">
                        <div class="">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/event-badge.webp') }}">

                        </div>
                        <div class="mt-4">
                            <h1 class="p-s11">
                                Savings Summit: Navigating Financial Peak
                            </h1>
                        </div>
                        <div class="mt-4">
                            <p class="p-s2">
                                Odio euismod lacinia at quis. Amet purus gravida
                                quis blandit
                                turpis.
                            </p>
                        </div>
                        <div class="mt-4">
                            <a href="{{ route('register') }}" class="-ml-5 ">
                                <button class="text-black  uppercase hover:bg-white   rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    view
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    @show
</x-app-layout>

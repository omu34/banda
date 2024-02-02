<x-app-layout>
    @show
    @section('content')
    <div class="min-h-[500px]" style="background:url({{ asset('assets/images/download-banner.webp') }});background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="flex max-w-screen-xl mx-auto">
            <div class="justify-start md:mt-[80px] mt-4">
                <div>
                    <h1 class="banner-word">
                        Our Downloads
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



    <div class=" bg-white pb-5 md:pb-16">
        <div class="max-w-screen-xl mx-auto">

            <div class="">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-10 pt-10">
                    <div class="w-full justify-self-center md:justify-self-start">
                        <div class="">
                            <h1 class="p-s1">
                                Downloads
                            </h1>
                        </div>
                    </div>
                    <div class="w-full md:justify-self-end  justify-self-center">
                        <div class="flex justify-center md:justify-center lg:justify-end ">
                            <button style="background: var(--Brand-Dark-Blue, #005AA9);" class="text-white uppercase  hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                view all
                                <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>






            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="rounded-xl mt-8  " style="background: var(--Hues-Light-Blue, #99CFFF);height:fit-content">
                    <div class="p-4 ">
                        <div class=" ">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/resource-badge.webp') }}">

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
                                    more
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
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/resource-badge.webp') }}">

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
                                    more
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
                        <div class=" ">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/resource-badge.webp') }}">

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
                                    more
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
                        <div class=" ">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/resource-badge.webp') }}">

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
                                    more
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="rounded-xl mt-8  " style="background: var(--Hues-Light-Blue, #99CFFF);height:fit-content">
                    <div class="p-4 ">
                        <div class=" ">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/resource-badge.webp') }}">

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
                                    more
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
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/resource-badge.webp') }}">

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
                                    more
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
                        <div class=" ">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/resource-badge.webp') }}">

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
                                    more
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
                        <div class=" ">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/resource-badge.webp') }}">

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
                                    more
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>









            <div class=" bg-white pt-10 pb-10">
                <div class="max-w-screen-xl mx-auto">
                    <div class="flex">
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

                </div>
            </div>




            <div class="">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-10">
                    <div class="w-full justify-self-center md:justify-self-start">
                        <div class="">
                            <h1 class="p-s1">
                                Financial Reports
                            </h1>
                        </div>
                    </div>
                    <div class="w-full md:justify-self-end  justify-self-center">
                        <div class="flex justify-center md:justify-center lg:justify-end ">
                            <button style="background: var(--Brand-Dark-Blue, #005AA9);" class="text-white uppercase  hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                view all
                                <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>





            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                <div class="rounded-xl mt-8  " style="background: var(--Hues-Light-Blue, #99CFFF);height:fit-content">
                    <div class="p-4 ">
                        <div class=" ">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/resource-badge.webp') }}">

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
                                    more
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
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/resource-badge.webp') }}">

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
                                    more
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
                        <div class=" ">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/resource-badge.webp') }}">

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
                                    more
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
                        <div class=" ">
                            <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/resource-badge.webp') }}">

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
                                    more
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>









            <div class=" bg-white pt-10 pb-10">
                <div class="max-w-screen-xl mx-auto">
                    <div class="flex">
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

                </div>
            </div>












            <div class="pb-10 pt-10 ">
                <div class="bandaripesa-body-paragraph w-full p-2">
                    <div class="flex">
                        <div class="flex justify-start pr-10">
                            <div class="pr-2">
                                <img src="{{ asset('assets/images/resource-badge.webp') }}" alt="" srcset="">
                            </div>
                            <div class="">
                                <p class="resource-date-text">Title</p>
                                <p class="p-s2">Request for proposal (RFP) for provision of website design & development consultancy</p>
                            </div>
                        </div>


                        <div class="flex  pr-10">
                            <div class="">
                                <p class="resource-date-text">upload date</p>
                                <p class="p-s2">18/12/2023</p>
                            </div>
                            <div class="">
                                <p class="resource-date-text">Closing date</p>
                                <p class="p-s2">29/12/2023 at 12:00 noon</p>
                            </div>

                        </div>
                        <div class="flex justify-start">
                            <button style="" class="text-blue-800 uppercase ring-1 ring-blue-500  font-bold rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                download
                                <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bandaripesa-body-paragraph w-full mt-4 p-2">
                    <div class="flex">
                        <div class="flex pr-10">
                            <div class="pr-2">
                                <img src="{{ asset('assets/images/resource-badge.webp') }}" alt="" srcset="">
                            </div>
                            <div class="">
                                <p class="resource-date-text">Title</p>
                                <p class="p-s2">Request for proposal (RFP) for provision of website design & development consultancy</p>
                            </div>
                        </div>


                        <div class="flex pr-10">
                            <div class="">
                                <p class="resource-date-text">upload date</p>
                                <p class="p-s2">18/12/2023</p>
                            </div>
                            <div class="">
                                <p class="resource-date-text">Closing date</p>
                                <p class="p-s2">29/12/2023 at 12:00 noon</p>
                            </div>
                        </div>

                        <div class="flex justify-start">
                            <button style="" class="text-blue-800 uppercase ring-1 ring-blue-500  font-bold rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                download
                                <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bandaripesa-body-paragraph w-full mt-4 p-2">
                    <div class="flex">
                        <div class="flex pr-10">
                            <div class="pr-2">
                                <img src="{{ asset('assets/images/resource-badge.webp') }}" alt="" srcset="">
                            </div>
                            <div class="">
                                <p class="resource-date-text">Title</p>
                                <p class="p-s2">Request for proposal (RFP) for provision of website design & development consultancy</p>
                            </div>
                        </div>


                        <div class="flex pr-10 ">
                            <div class="">
                                <p class="resource-date-text">upload date</p>
                                <p class="p-s2">18/12/2023</p>
                            </div>
                            <div class="">
                                <p class="resource-date-text">Closing date</p>
                                <p class="p-s2">29/12/2023 at 12:00 noon</p>
                            </div>

                        </div>

                        <div class="flex ">
                            <button style="" class=" text-blue-800  uppercase ring-1 ring-blue-500  font-bold rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                download
                                <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>


        </div>











        <div class=" bg-slate-100">
            <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 pt-3 pb-3 gap-10 ">
                <div class="">
                    <div class="">
                        <h1 class="why-join text-blue-400">
                            Need Help?
                        </h1>
                    </div>
                    <div class="flex mt-10 gap-5">
                        <div class="">
                            <img class="" src="{{ asset('assets/images/badge.webp') }}">
                        </div>
                        <div class="ml-2">
                            <p class="p-account">+254 123 456 789</p>
                            <p class="membership mt-2">Support Hotline</p>
                        </div>
                    </div>


                    <div class="flex  mt-10 gap-5">
                        <div class="">
                            <img class="" src="{{ asset('assets/images/badge_1.webp') }}">
                        </div>
                        <div class="ml-2">
                            <p class="p-account">+254 123 456 789</p>
                            <p class="membership mt-2">email@mail.com </p>
                        </div>
                    </div>


                    <div class="mt-5">
                        <div class="flex justify-start">
                            <button style="" class="text-blue-800 uppercase ring-1 ring-blue-500  font-bold rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                support
                                <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>


                <div class="">
                    <div class="grid divide-y divide-neutral-200  mx-auto">
                        <div class="py-5">
                            <details class="group">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span class="-ml-3 p-account"> What’s required for
                                        WhatsApp Business
                                        API approval?</span>
                                    <span class="ml-2 transition group-open:rotate-45">
                                        <img class="" src="{{ asset('assets/images/add-fill.webp') }}">

                                    </span>

                                </summary>
                                <p class="text-neutral-600 membership mt-3 group-open:animate-fadeIn">
                                    You require a verified Facebook Business Manager
                                    (https://www.facebook.com/business/help/2058515294227817)
                                    and a phone number
                                    to be used for WhatsApp (a new number is preferred as
                                    previous conversations
                                    will be automatically deleted after integration)

                                </p>
                            </details>
                        </div>
                        <div class="py-5">
                            <details class="group">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span class="-ml-3 p-account"> What’s the Whatsapp
                                        message
                                        pricing?</span>
                                    <span class="ml-2 transition group-open:rotate-45">
                                        <img class="" src="{{ asset('assets/images/add-fill.webp') }}">

                                    </span>
                                </summary>
                                <p class="text-neutral-600 membership mt-3 group-open:animate-fadeIn">
                                    Our price starts from $0.002/Ksh .25/UGX 8 and it’s based on
                                    volume of
                                    sessional message exchanged between the brand and user. </p>

                            </details>
                        </div>
                        <div class="py-5">
                            <details class="group">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span class="-ml-3 p-account">What’s Sessional
                                        messaging?</span>
                                    <span class="ml-2 transition group-open:rotate-45">
                                        <img class="" src="{{ asset('assets/images/add-fill.webp') }}">

                                    </span>
                                </summary>
                                <p class="text-neutral-600 membership mt-3 group-open:animate-fadeIn">
                                    Sessional messages are initiated by a user to the brand’s
                                    WhatsApp account.
                                    Subsequent interactions are called sessional messages and
                                    are allowed within
                                    a 24 hour period. After that, the user will be required to
                                    initiate the
                                    conversation. </p>

                            </details>
                        </div>
                        <div class="py-5">
                            <details class="group">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span class="-ml-3 p-account"> How many messages per
                                        second can I
                                        send?</span>
                                    <span class="ml-2 transition group-open:rotate-45">
                                        <img class="" src="{{ asset('assets/images/add-fill.webp') }}">

                                    </span>
                                </summary>
                                <p class="text-neutral-600 membership mt-3 group-open:animate-fadeIn">
                                    The maximum tested outbound message rate is 20 messages per
                                    second.
                                </p>
                            </details>
                        </div>
                        <div class="py-5">
                            <details class="group">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span class="-ml-3 p-account"> What message type can
                                        be sent?</span>
                                    <span class="ml-2 transition group-open:rotate-45">
                                        <img class="" src="{{ asset('assets/images/add-fill.webp') }}">

                                    </span>
                                </summary>
                                <p class="text-neutral-600 membership mt-3 group-open:animate-fadeIn">
                                    You can send both text and media through the WhatsApp API
                            </details>
                        </div>
                    </div>
                </div>
            </div>




            @show
</x-app-layout>

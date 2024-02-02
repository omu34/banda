<x-app-layout>
    @show
    @section('content')
    <div class="min-h-[500px]" style="background:url({{ asset('assets/images/mobile-banner.webp') }});background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="flex max-w-screen-xl mx-auto">
            <div class="justify-start md:mt-[80px] mt-4">
                <div>
                    <h1 class="banner-word">
                        Mobile Banking
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

    <div class=" bg-white pt-10">
        <div class="max-w-screen-xl mx-auto">
            <div class="">
                <h4 class="why-join">
                    BandariPesa
                </h4>
            </div>
            <div class="grid grid-1 md:grid-cols-2 gap-6">
                <div class="">

                    <div class="">
                        <img class="" src=" {{ asset('assets/images/band-pesa.webp') }}" alt="" srcset="">
                    </div>

                </div>
                <div class="rounded-lg bandaripesa-body-paragraph p-4">

                    <p class="bandaripesa-paragraph">
                        M-Sacco is a mobile banking platform which enables our FOSA members to transact through their mobile phones at the comfort of their work places/homes. Services offered via this platforms includes Cash withdrawal, cash deposit, Mini-statements, Balance Enquiry Etc.
                    </p>

                    <div class="flex mt-[40px] ">
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

                    <div class="mt-3">
                        <p class="bandaripesa-s-titles">
                            Key Requiquirements</p>
                        </p>
                        <div class="ml-4  mt-4">

                            <li class="bandaripesa-paragraph">
                                FOSA Savings accounts holder

                            </li>
                            <li class="bandaripesa-paragraph">
                                Registration for the service – application forms available online (downloads)/ Note: Registration applies to M-PESA registered Safaricom lines only

                            </li>
                            <li class="bandaripesa-paragraph">
                                Your MPESA PIN (required for Deposit)

                            </li>
                            <li class="bandaripesa-paragraph">
                                MSACCO PIN (Required for Withdrawals)

                            </li>
                        </div>
                    </div>

                    <div class="flex mt-[20px] ">
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


                    <p class="bandaripesa-s-titles">
                        Way to Access Service
                    </p>

                    <div class="">
                        <div class="grid divide-y divide-neutral-200  mx-auto">
                            <div class="py-5">
                                <details class="group details">
                                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none relative">
                                        <span class=" p-account"> M-Sacco Deposits</span>
                                        <span class="ml-2 transition group-open:rotate-45 absolute right-0">
                                            <img class="" src="{{ asset('assets/images/add-fill.webp') }}">
                                        </span>
                                    </summary>
                                    <p class="text-neutral-600 p-account mt-3 group-open:animate-fadeIn bandaripesa-paragraph">
                                        This option is NOT available on the M-Sacco menu when you dial *346#. But it can be accessed through M-PESA menu PAYBILL option. I.e. Deposit via Safaricom’s PAYBILL No. >146320; >FOSA Account No.; >Amount to Deposit: > MPESA PIN. You will receive a confirmation message of the deposit made.
                                    </p>
                                </details>
                            </div>


                            <div class="flex mt-[40px] ">
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
                            <div class="py-5">
                                <details class="group deatils">
                                    <summary class="flex justify-between items-center font-medium cursor-pointer list-none relative">
                                        <span class=" p-account">
                                            Withdrawal and Enquiries
                                        </span>
                                        <span class="ml-2 transition group-open:rotate-45 absolute right-0">
                                            <img class="" src="{{ asset('assets/images/add-fill.webp') }}">
                                        </span>
                                    </summary>
                                    <p class="text-neutral-600 p-account mt-3 group-open:animate-fadeIn bandaripesa-paragraph">
                                        You require a verified Facebook Business Manager
                                        (https://www.facebook.com/business/help/2058515294227817)
                                        and a phone number
                                        to be used for WhatsApp (a new number is preferred as
                                        previous conversations
                                        will be automatically deleted after integration)
                                    </p>
                                </details>
                            </div>

                        </div>
                    </div>





                </div>
            </div>




            <div class="mt-[20px]">
                <div class="">
                    <h4 class="why-join">
                        Lipa na MPESA
                    </h4>
                </div>
                <div class="grid grid-1 md:grid-cols-2 gap-10">
                    <div class="">

                        <div class="">
                            <img class="" src=" {{ asset('assets/images/mpesa.webp') }}" alt="" srcset="">
                        </div>
                        <div class="flex object absolute lg:-mt-[120px] ml-0.5">
                            <img class="w-full pr-2" src=" {{ asset('assets/images/lipa_na_mpesa.webp') }}" alt="" srcset="">
                        </div>

                    </div>
                    <div class="rounded-lg bandaripesa-body-paragraph p-4 " style="border-radius: 16px;
                    border: 1px solid var(--Brand-Blue, #0095D9);
                    background: var(--Hues-Very-Light-Blue, #DDEFFF);">

                        <p class="bandaripesa-paragraph">
                            To transfer money from MPESA to your Bandari Sacco Account Via M-Pesa Pay Bill Number 146320
                        </p>

                        <div class="flex mt-[20px] ">
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



                        <div class="">
                            <p class="bandaripesa-s-titles">
                                Steps
                            </p>
                            </p>
                            <div class="ml-4  mt-4">

                                <li class="bandaripesa-paragraph">
                                    Go To Mpesa Menu

                                </li>
                                <li class="bandaripesa-paragraph">
                                    Select Lipa Na M-Pesa

                                </li>
                                <li class="bandaripesa-paragraph">
                                    Select ‘’Pay Bill’’

                                </li>
                                <li class="bandaripesa-paragraph">
                                    Select ‘’Enter Business Number’’

                                </li>

                                <li class="bandaripesa-paragraph">
                                    Enter Bandari Sacco Pay Bill Number 146320

                                </li>
                                <li class="bandaripesa-paragraph">
                                    Select ‘’Enter Account No’’ And Enter Your Bandari Sacco Account No…….

                                </li>
                                <li class="bandaripesa-paragraph">
                                    Enter Amount You Wish To Deposit

                                </li>
                                <li class="bandaripesa-paragraph">
                                    Enter Your M-Pesa Pin And Press ‘’Ok’’

                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex mt-[40px] mb-[40px] ">
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





        <div class=" bg-white pb-10">
            <div class="max-w-screen-lg mx-auto">

                <p class=" justify-center text-center band-p font-bold">
                    With our USSD code <b class="band-n">*636#</b> , unlock a world of banking services at your fingertips. Manage your accounts, transfer funds, and access vital information with just a few taps on your mobile device.
                </p>
            </div>
        </div>

        <div class=" bg-white pb-10 pt-10">
            <div class="max-w-screen-xl mx-auto">
                <div class="flex ">
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


        <div class=" bg-white pb-5 md:pb-16">
            <div class="max-w-screen-xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">

                    <div class="">


                        <div class="flex gap-1">
                            <div class="">
                                <img class="" src="{{ asset('assets/images/savings-logo.webp') }}" alt="" srcset="">

                            </div>

                            <div class="justify-center">
                                <h4 class="band-n">
                                    Download our App BandariPesa
                                </h4>

                                <p class="mt-3 p-services-paragraph">
                                    Occaecat laboris consequat laboris minim mollit dolor tempor quis commodo sit exercitation ullamco ex. In est fugiat duis id cupidatat elit minim sit enim incididunt dolore anim elit aute in.
                                </p>


                                <div class="flex mt-4">
                                    <div class="mt-2">
                                        <img class="" src="{{ asset('assets/images/apple-badge.webp') }}" alt="" srcset="">

                                    </div>
                                    <div class="">
                                        <img class="" src="{{ asset('assets/images/google-badge.webp') }}" alt="" srcset="">

                                    </div>

                                </div>


                            </div>


                        </div>
                    </div>


                    <div class="flex">

                        <div class="flex pr-4">
                            <div class="-mr-8">
                                <img class="" src="{{ asset('assets/images/Ellipse_3.webp') }}" alt="" srcset="">
                            </div>
                            <div class="-mr-4">

                                <img src=" {{ asset('assets/images/Ellipse-4.webp') }}" alt="" srcset="">
                            </div>
                            <div class="">

                                <img src="{{ asset('assets/images/Ellipse_5.webp') }}" alt="">
                            </div>
                        </div>

                        <div class="pr-4">
                            <p class="bandari-app">5k +</p>
                            <p class="bandari-pesa-paragraph">Downloads</p>
                        </div>
                        <div class=" pr-4 mt-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="3" height="49" viewBox="0 0 3 49" fill="none">
                                <path d="M1.43457 47.8187L1.43457 1.93938" stroke="#000911" stroke-width="2.36768" stroke-linecap="round" />
                            </svg>
                        </div>
                        <div class="pr-4">
                            <p class="bandari-app">4/5</p>
                            <div class="flex">
                                <div class="">
                                    <img src="{{ asset('assets/images/star.webp') }}" alt="" srcset="">
                                </div>
                                <div class="">
                                    <img src="{{ asset('assets/images/star.webp') }}" alt="" srcset="">
                                </div>
                                <div class="">
                                    <img src="{{ asset('assets/images/star.webp') }}" alt="" srcset="">
                                </div>
                                <div class="">
                                    <img src="{{ asset('assets/images/star.webp') }}" alt="" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class=" bg-white pb-5 md:pb-16">
            <div class="max-w-screen-xl mx-auto">
                <div class="flex  pt-10 pb-10">
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
            </div </div>



            <div class=" bg-white pb-5 md:pb-16">
                <div class="max-w-screen-xl mx-auto">


                    <div class="">
                        <h4 class="why-join">
                            Our Products
                        </h4>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-5">



                        <div class="rounded-xl mt-8  " style="background: var(--Hues-Light-Blue, #99CFFF);height:fit-content">
                            <div class="p-4 ">
                                <div class="">
                                    <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/icons.svg') }}">

                                </div>
                                <div class="mt-4">
                                    <h1 class="p-s11">
                                        Share Capital
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
                                    <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/icons_2.svg') }}">

                                </div>
                                <div class="mt-4">
                                    <h1 class="p-s11">
                                        Loans
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
                                    <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/icons_3.svg') }}">

                                </div>
                                <div class="mt-4">
                                    <h1 class="p-s11">
                                        Web Portal
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
                                    <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/icons_4.svg') }}">

                                </div>
                                <div class="mt-4">
                                    <h1 class="p-s11">
                                        Savings $ Deposit
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
                                    <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/icons_5.svg') }}">

                                </div>
                                <div class="mt-4">
                                    <h1 class="p-s11">
                                        Other Services
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
                </div>
            </div>





            <div class="max-w-screen-2xl mx-auto bg-slate-100">
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

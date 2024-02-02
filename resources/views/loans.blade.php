<x-app-layout>
    @show
    @section('content')
    <div class="min-h-[500px]" style="background:url({{ asset('assets/images/loan-banner.webp') }});background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="flex max-w-screen-xl mx-auto">
            <div class="justify-start md:mt-[80px] mt-4">
                <div>
                    <h1 class="banner-word">
                        Loans
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
    <div class=" bg-white  pt-10">
        <div class="max-w-screen-xl mx-auto ">
            <div class="grid md:grid-cols-2 grid-cols-2 gap-5">
                <div class="">
                    <div class="pt-10 l">
                        <h4 class="band-n ">
                            Biashara Personal Loan
                        </h4>
                    </div>
                    <div class="">
                        <img class="w-full" src="{{ asset('assets/images/loan-image.webp') }}" alt="" srcset="">
                    </div>
                    <div class="mt-2 bandaripesa-body-paragraph pt-10 pb-10 p-4">
                        This is a loan product aimed at supporting members with small-to-medium scale registered legal businesses.
                    </div>
                </div>
                <div class="md:mt-10 mt-4">
                    <div class="">
                        <h4 class="band-n">
                            BOSA One Month Loan
                        </h4>
                    </div>
                    <div class="">
                        <img class="w-full" src="{{ asset('assets/images/loan-image3.webp') }}" alt="" srcset="">

                    </div>
                    <div class="mt-2 bandaripesa-body-paragraph   p-7">
                        This is an advance against a long-term loan on process. Amount granted are subject to administratively guidelines as revised from time to time. Loan is granted and repaid within a month and at a fee.
                    </div>
                </div>
            </div>

        </div>



        <div class=" bg-white pt-10 pb-10">
            <div class="max-w-screen-xl mx-auto">

                <div class="flex  ">
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





        <div class=" bg-white pb-10">
            <div class="max-w-screen-xl mx-auto">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-5 ">
                    <div class="">
                        <div class="">
                            <h4 class="band-n">
                                Emergency Loan
                            </h4>
                        </div>
                        <div class="">
                            <img class="w-full" src="{{ asset('assets/images/loan-image1.webp') }}" alt="" srcset="">


                        </div>
                        <div class="mt-2 bandaripesa-body-paragraph  p-7">
                            The loan facility is available for members to meet urgent needs such as sudden hospitalization, death, natural disasters, fire and robbery or any other specified reasons.
                        </div>
                    </div>
                    <div class="">
                        <div class="">
                            <h4 class="band-n">
                                Asset Financing
                            </h4>
                        </div>
                        <div class="">
                            <img class="w-full" src="{{ asset('assets/images/loan-image2.webp') }}" alt="" srcset="">

                        </div>
                        <div class="mt-2 bandaripesa-body-paragraph  p-4">
                            This product is intended to support our members to acquire assets of various descriptions as provided for in the collateral management policy as approved by the Board of Directors. Such assets may include Land, motor vehicle and machinery. All the assets must have verifiable legal form of ownership.
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class=" bg-white pb-10 pt-10 ">
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


        <div class=" bg-white ">
            <div class="max-w-screen-xl mx-auto">
                <div class="grid md:grid-cols-2 grid-cols-1 gap-10">
                    <div class="">
                        <div class="">
                            <h4 class="band-n">Loan Calculator</h4>
                            <p class="p-services-paragraph mt-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dui accumsan sit amet nulla facilisi morbi.
                            </p>
                        </div>
                        <div class="mt-4">
                            <h4 class="band-n">
                                How it Works
                            </h4>
                            <p class="p-services-paragraph mt-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dui accumsan sit amet nulla facilisi morbi.

                            </p>
                        </div>

                        <div class="grid grid-cols-1  md:grid-cols-2  gap-6  mt-4">
                            <div class="">
                                <div class="mt-2">
                                    <select id="locations" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                        <option class="f-p" selected>Select Product</option>
                                        <option value="US">United States</option>
                                        <option value="CA">Canada</option>
                                        <option value="FR">France</option>
                                        <option value="DE">Germany</option>
                                    </select>
                                </div>
                                <div class="mt-2">
                                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:border-blue-500">
                                        <option class="f-p" selected>Select Interest Rate (%) </option>
                                        <option value="US">Apartments</option>
                                        <option value="CA">Canada</option>
                                        <option value="FR">France</option>
                                        <option value="DE">Germany</option>
                                    </select>
                                </div>
                            </div>
                            <div class=" ">
                                <div class="mt-2">
                                    <form class="">
                                        {{-- <input class="p-2.5 px-16 rounded-lg bg-gray-50 border border-gray-300 text-gray-900 text-sm" type="number" name="loan-amount" id="loan-amount" placeholder="Loan Amount" required>  --}}
                                        <input type="number" id="number-input" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Loan Amount " required>
                                    </form>
                                </div>

                                <div class="mt-2">
                                    <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:border-blue-500">
                                        <option class="f-p" selected>Payment Terms (Years) </option>
                                        <option value="US">Apartments</option>
                                        <option value="CA">Canada</option>
                                        <option value="FR">France</option>
                                        <option value="DE">Germany</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="flex justify-start">
                                <button style="" class="text-white bg-blue-800 uppercase   font-bold rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    calculate
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class=" bandaripesa-body-paragraph p-4  ">
                        <div class="justify-center text-center">
                            <p class="p-services-paragraph mt-2">Amount Requested</p>
                            <p class="band-n mt-2">KES. 400,000</p>
                            <p class="p-services-paragraph mt-2">Estimated Monthly Repayment</p>
                            <p class="band-n mt-2">KES. 7,718</p>
                            <p class="p-services-paragraph mt-2">Total Interest Paid (15% rate)</p>
                            <p class="band-n mt-2">KES. 70,411</p>
                            <p class="p-services-paragraph mt-2">Loan Duration</p>
                            <p class="band-n mt-2">4 years</p>
                            <p class="p-services-paragraph mt-2">Contact us for loan application</p>

                        </div>
                        <div class="mt-2">
                            <div class="flex justify-center">
                                <button style="" class="text-white uppercase bg-blue-800  font-bold rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    Contact us
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </div>
                        </div>
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

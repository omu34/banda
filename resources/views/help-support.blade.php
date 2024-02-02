<x-app-layout>
    @show
    @section('content')
    <div class="min-h-[500px]" style="background:url({{ asset('assets/images/help-banner.webp') }});background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="flex max-w-screen-xl mx-auto">
            <div class="justify-start md:mt-[80px] mt-4">
                <div>
                    <h1 class="banner-word">
                        Help $ Support
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
        <div class="max-w-screen-xl mx-auto">
            <div class="pt-10 pb-10">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3 pb-2  bandaripesa-body-paragraph p-4">
                    <div class="">
                        <h4 class="p-s3">
                            Still have some questions?
                        </h4>
                        <p class="membership">
                            We are here to help.
                        </p>

                    </div>


                    <div class="flex ml-3">
                        <div class="pr-2">
                            <img src="{{ asset('assets/images/help-badge.webp') }}" alt="" class="">
                        </div>

                        <div class="-mt-2">

                            <p class="membership">
                                Support Hotline
                            </p>
                            <p class=" p-account">
                                (+254)-724-002-525
                            </p>

                        </div>

                    </div>

                    <div class="flex justify-end">
                        <div class="pr-2">
                            <img src="{{ asset('assets/images/help-badge1.webp') }}" alt="" class="">
                        </div>

                        <div class="-mt-2 ">

                            <p class="membership">
                                Support Email
                            </p>
                            <p class=" p-account">
                                info@bandari.co.ke
                            </p>

                        </div>

                    </div>

                    <div class="flex justify-center md:justify-center lg:justify-end ">
                        <a href="" class="">
                            <button style="background: var(--Brand-Dark-Blue, #005AA9);" class="text-white uppercase  hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                submit ticket
                                <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                            </button>
                        </a>
                    </div>
                </div>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-2 ">
                <div class="justify-self-start">
                    <h4 class="p-account">Categories</h4>
                    <p class="membership">Products</p>
                    <p class="membership">Membership</p>
                    <p class="membership ">Account</p>

                </div>

                <div class="justify-self-endend">
                    <div class="">
                        <div class="">
                            <div class="flex -ml-4">
                                <div class="pr-2">
                                    <img src="{{ asset('assets/images/help-badge_2.webp') }}" alt="" class="">
                                </div>
                                <div class="">
                                    <h4 class="p-s1">
                                        Products
                                    </h4>
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
                                            <span class="-ml-3 p-account">
                                                How many messages per
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


                    <div class="max-w-screen-2xl mx-auto bg-white pt-10 pb-10">
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
                        <div class="">
                            <div class="flex -ml-4">
                                <div class="pr-2">
                                    <img src="{{asset('assets/images/help-badge_2.webp')}}" alt="" class="">
                                </div>
                                <div class="">
                                    <h4 class="p-s1">
                                        Membership
                                    </h4>
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


                    <div class="max-w-screen-2xl mx-auto bg-white pt-10 pb-10">
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
                        <div class="">
                            <div class="flex -ml-4">
                                <div class="pr-2">
                                    <img src="{{asset('assets/images/help-badge_2.webp')}}" alt="" class="">
                                </div>
                                <div class="">
                                    <h4 class="p-s1">
                                        Account
                                    </h4>
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


                    <div class="max-w-screen-2xl mx-auto bg-white pt-4 pb-4">
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
                        <div class="">
                            <div class="flex -ml-4">
                                <div class="pr-2">
                                    <img src="{{ asset('assets/images/help-badge_3.webp') }}" alt="" class="">
                                </div>
                                <div class="p-s1">
                                    Share Your Feedback
                                </div>
                            </div>
                        </div>

                        <div class="pt-4 pb-4 ">
                            <p class="p-account">
                                How satisfied are you with the information you’ve received?
                            </p>
                        </div>

                        <div class="flex pt-4 pb-4 gap-4">
                            <div class="rounded-lg border border-spacing-y-10 hover:bg-blue-200 px-3 py-1 border-yellow-400 border-r-1 text-white bg-blue-900">1</div>
                            <div class="rounded-lg border border-spacing-y-10 hover:bg-blue-200 px-3 py-1 border-yellow-400 border-r-1 text-white bg-blue-900">2</div>
                            <div class="rounded-lg border border-spacing-y-10 hover:bg-blue-200 px-3 py-1 border-yellow-400 border-r-1 text-white bg-blue-900">3</div>
                            <div class="rounded-lg border border-spacing-y-10 hover:bg-blue-200 px-3 py-1 border-yellow-400 border-r-1 text-white bg-blue-900">4</div>
                            <div class="rounded-lg border border-spacing-y-10 hover:bg-blue-200 px-3 py-1 border-yellow-400 border-r-1 text-white bg-blue-900">5</div>
                            <div class="rounded-lg border border-spacing-y-10 hover:bg-blue-200 px-3 py-1 border-yellow-400 border-r-1 text-white bg-blue-900">6</div>
                            <div class="rounded-lg border border-spacing-y-10 hover:bg-blue-200 px-3 py-1 border-yellow-400 border-r-1 text-white bg-blue-900">7</div>
                            <div class="rounded-lg border border-spacing-y-10 hover:bg-blue-200 px-3 py-1 border-yellow-400 border-r-1 text-white bg-blue-900">8</div>
                            <div class="rounded-lg border border-spacing-y-10 hover:bg-blue-200 px-3 py-1 border-yellow-400 border-r-1 text-white bg-blue-900">9</div>
                            <div class="rounded-lg border border-spacing-y-10 hover:bg-blue-200 px-3 py-1 border-yellow-400 border-r-1 text-white bg-blue-900">10</div>
                        </div>

                        <div class="flex">
                            <div class="justify-start">
                                <p class="p-s2">
                                    Not satisfied at all
                                </p>
                            </div>

                            <div class="justify-end">
                                <p class="p-s2">

                                    Not satisfied at all
                                </p>
                            </div>
                        </div>

                        <div class="pt-4 pb-4">
                            <p class="p-account pb-4">
                                Do you have any comments you’d want to share?
                            </p>

                            <textarea class="border border-blue-200" name="name" id="" cols="72" rows="5" placeholder="Your Comments">

                            </textarea>
                        </div>
                        <div class="flex justify-center md:justify-center lg:justify-start pt-2">
                            <a href="" class="">
                                <button style="background: var(--Brand-Dark-Blue, #005AA9);" class="text-white uppercase  hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    share your feedback
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </div </div>
                </div>
            </div>


            @show
</x-app-layout>

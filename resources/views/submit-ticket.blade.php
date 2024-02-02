<x-app-layout>
    @show
    @section('content')
    <div class="">
        <div class="min-h-[500px]" style="background:url({{ asset('assets/images/submit-banner.webp') }});background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="flex max-w-screen-xl mx-auto">
                    <div class="justify-start md:mt-[80px] mt-4">
                        <div>
                            <h1 class="banner-word">
                                Submit Ticket
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
    </div>


    <div class=" bg-white pt-10 pb-10">
        <div class="max-w-screen-xl mx-auto pb-10">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">

                <div class="">
                    <div class="pt-4">
                        <h4 class="message">
                            Create New Ticket
                        </h4>
                    </div>

                    <div class="pt-4">
                        <p class="message-p">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dui accumsan sit amet nulla facilisi morbi.
                        </p>
                    </div>

                    <div class="pt-4">
                        <img src="{{asset('assets/images/submit.webp')}}" alt="" class="w-full">
                    </div>
                </div>

                <div class="pt-5">
                    <form class="">
                        <div class="grid grid-cols-2 gap-2">
                            <div class="">
                                <div class="pb-5">
                                    <input type="name" id="name" class="bg-gray-50 h-16 border border-blue-500 text-sm rounded-lg  block w-full p-2.5" placeholder="name" required>
                                </div>

                                <div class="pb-5 pt-5">
                                    <select id="countries" class="bg-gray-50 h-16 border border-blue-500 text-gray-300 text-sm rounded-lg  block w-full p-2.5 ">

                                        <option>Support Category</option>
                                        <option>Canada</option>
                                        <option>France</option>
                                        <option>Germany</option>
                                    </select>
                                </div>

                            </div>
                            <div class="">
                                <div class="pb-5">
                                    <input type="email" id="email" class="bg-gray-50 h-16 border border-blue-500 text-gray-300 text-sm rounded-lg  block w-full p-2.5" placeholder="name@gmail.com" required>
                                </div>
                                <div class="pt-5">
                                    <select id="countries" class="bg-gray-50 h-16 border border-blue-500 text-gray-300 text-sm rounded-lg  block w-full p-2.5 ">

                                        <option>Priority</option>
                                        <option>Canada</option>
                                        <option>France</option>
                                        <option>Germany</option>
                                    </select>
                                </div>

                            </div>

                        </div>

                        <div class="pt-5">
                            <textarea id="ticket-message" rows="4" cols="80" class="block p-2.5 w-full text-sm text-gray-300 bg-gray-50 rounded-lg border border-blue-500 " placeholder="Ticket  Message..."></textarea>

                        </div>




                        <div class="flex items-center justify-center w-full pt-10">
                            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-120 border border-blue-500 rounded-lg cursor-pointer bg-gray-50 ">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <svg class="w-8 h-8 mb-4 text-gray-300 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                    </svg>
                                    <p class="mb-2 text-sm text-gray-300 "><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                </div>
                                <input id="dropzone-file" type="file" class="hidden" />
                            </label>
                        </div>




                        <div class="flex pt-5 justify-center md:justify-center lg:justify-start">
                            <a href="" class="">
                                <button type="submit" style="background: var(--Brand-Dark-Blue, #005AA9);" class="text-white uppercase  hover:bg-blue-800 font-bold rounded-lg text-xs px-3 py-1.5 text-center inline-flex items-center">
                                    create ticket
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </form>

                </div>
            </div>



        </div>






        <div class=" bg-slate-100 pt-10 pb-10">
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

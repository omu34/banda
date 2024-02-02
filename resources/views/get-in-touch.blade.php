<x-app-layout>
    @show
    @section('content')

    <div class="min-h-[500px]" style="background:url({{ asset('assets/images/get-banner.webp') }});background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="flex max-w-screen-xl mx-auto">
            <div class="justify-start md:mt-[80px] mt-4">
                <div>
                    <h1 class="banner-word">
                        Get In Touch
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
        <div class="max-w-screen-xl mx-auto ">
            <div class="pt-10 pb-10">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-3  bandaripesa-body-paragraph p-4 pb-4 justify-between">
                    <div class="flex">
                        <div class="pr-2">
                            <img src="{{ asset('assets/images/help-badge1.webp') }}" alt="" class="">
                        </div>

                        <div class="-mt-2">

                            <p class="membership">
                                Moi Avenue
                            </p>
                            <p class=" p-account">
                                Bandari Sacco Building
                            </p>

                        </div>

                    </div>


                    <div class="flex">
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

                        <div class="-mt-2">

                            <p class="membership">
                                P.O. BOX
                            </p>
                            <p class=" p-account">
                                95011-80104
                            </p>

                        </div>

                    </div>


                    <div class="flex justify-end">
                        <div class="pr-2">
                            <img src="{{ asset('assets/images/help-badge1.webp') }}" alt="" class="">
                        </div>

                        <div class="-mt-2">

                            <p class="membership">
                                Support Email
                            </p>
                            <p class=" p-account">
                                info@bandari.co.ke
                            </p>

                        </div>

                    </div>



                </div>
            </div>



            <div class="grid grid-cols-1 md:grid-cols-2">

                <div class="">

                    <div class="pt-4">
                        <h4 class="message">
                            Leave us a Message
                        </h4>
                        <p class="pt-5 message-p">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dui accumsan sit amet nulla facilisi morbi.
                        </p>
                    </div>




                    <div class="max-w-screen-2xl mx-auto bg-white pt-4 pb-2">
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
                        <h4 class="message">
                            Opening Hours
                        </h4>
                        <p class="pt-5 message-p">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Dui accumsan sit amet nulla facilisi morbi.
                        </p>
                    </div>

                </div>





                <div class="pt-5">
                    <form class="max-w-sm mx-auto">
                        <div class="grid grid-cols-2 gap-2">
                            <div class="">
                                <div class="pb-3">
                                    <input type="name" id="name" class="bg-gray-50 border border-blue-500 text-sm rounded-lg  block w-full p-2.5" placeholder="name" required>
                                </div>
                                <div class="pt-3">
                                    <input type="text" id="phone" class="bg-gray-50 border border-blue-500 text-sm rounded-lg  block w-full p-2.5" placeholder="phone number" required>

                                </div>
                            </div>
                            <div class="">
                                <div class="pb-3">
                                    <input type="email" id="email" class="bg-gray-50 border border-blue-500  text-sm rounded-lg block w-full p-2.5" placeholder="name@gmail.com" required>
                                </div>
                                <div class="pt-3">
                                    <input type="text" id="subject" class="bg-gray-50 border border-blue-500 text-sm rounded-lg  block w-full p-2.5" placeholder="subject" required>

                                </div>
                            </div>

                        </div>

                        <div class="pt-3">
                            <textarea id="message" rows="2" cols="80" class="block p-2.5 w-full text-sm text-gray-300 bg-gray-50 rounded-lg border border-blue-500 " placeholder="Leave a message..."></textarea>

                        </div>

                        <div class="flex items-start mb-5 pt-3">
                            <div class="flex items-center h-5 ">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-blue-500 rounded bg-gray-50 " required>
                            </div>
                            <label for="remember" class="ms-2 text-sm pr-4 font-medium text-gray-300 ">Phone call</label>
                            <div class="flex items-center h-5">
                                <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-blue-500 rounded bg-gray-50 " required>
                            </div>
                            <label for="remember" class="ms-2 text-sm font-medium text-gray-300 ">Email</label>

                        </div>

                        <div class="flex justify-center md:justify-center lg:justify-start">
                            <a href="" class="">
                                <button type="submit" style="background: var(--Brand-Dark-Blue, #005AA9);" class="text-white uppercase  hover:bg-blue-800 font-bold rounded-lg text-xs px-3 py-1.5 text-center inline-flex items-center">
                                    send message
                                    <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </form>









                </div>

            </div>


            <div class="flex pt-10 justify-center">
                <img src="{{asset('assets/images/get-map.webp')}}" alt="" class="">
            </div>



        </div>





        @show
</x-app-layout>

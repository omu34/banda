<div class="ml-4 mr-4">
    <div class="hidden  md:block lg:block justify-center pt-2" style="background-color:#005AA9;">
        <div class="flex  md:gap-2 lg:gap-5  lg:max-w-screen-xl md:max-w-screen-lg mx-auto">
            <div class="flex -ml-6">
                <a class="" href="https://www.google.com/maps/dir/Bandari+sacco+nairobi+branch/MV6H%2BWCM+Bandari+sacco+nairobi+branch,+Nairobi/@-1.3375742,36.8372475,13z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x182f131e12bc20e5:0x41d8bae60685f5f1!2m2!1d36.878533!2d-1.3376604!1m5!1m1!1s0x182f131e12bc20e5:0x41d8bae60685f5f1!2m2!1d36.878533!2d-1.3376604!3e2?authuser=0&entry=ttu">
                    <button class="text-black  hover:text-yellow-500  rounded-lg text-sm px-8 py-2 text-center inline-flex items-center" type="button">
                        <img class="h-8" src="{{ asset('assets/images/badge_3.webp') }}">
                        <p class="h-paragraph text-white ml-2 text-left">
                            Bandari Sacco Building, Moi Avenue, Mombasa
                        </p>
                    </button>
                </a>

                <a href="tel:+245724002525" class="justify-start -ml-4 hidden md:block lg:block">
                    <button class="text-black  hover:text-yellow-500  rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                        <img class="h-8" src="{{ asset('assets/images/badge.webp') }}">
                        <p class="h-paragraph text-white ml-2">(+254)-724-002-525</p>
                    </button>
                </a>

                <a href="mailto:info@bandari.co.ke" class=" hidden md:hidden lg:block ">
                    <button class="text-black  rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                        <img class="h-8" src="{{ asset('assets/images/badge_2.webp') }}">
                        <p class="h-paragraph text-white ml-2">info@bandari.co.ke</p>
                    </button>
                </a>
            </div>
            <div class="flex gap-2 ">
                <a href="#" class="block py-2 px-3 md:p-0 mt-2 md:hidden lg:block">
                    <img class="w-7 h-auto" src="{{ asset('assets/images/social.webp') }}">
                </a>

                <a href="#" class="block py-2 px-3 md:p-0 mt-2 md:hidden lg:block">
                    <img class="w-7 h-auto" src="{{ asset('assets/images/social_1.webp') }}">
                </a>
                <a href="#" class="block py-2 px-3 md:p-0 mt-2 md:hidden lg:block ">
                    <img class="w-7 h-auto" src="{{ asset('assets/images/social_2.webp') }}">
                </a>
                <a href="#" class="block py-2 px-3 md:p-0 mt-2 md:hidden lg:block ">
                    <img class="w-7 h-auto" src="{{ asset('assets/images/social_3.webp') }}">
                </a>

                <a href="#" class="block py-2 px-3 md:p-0 mt-2 rounded-full  md:hidden lg:block ">
                    <img class="h-auto w-7 bg-red-600 rounded-full" src="{{ asset('assets/images/mdi_youtube.webp') }}">
                </a>

                <a href="#" class="block py-2 px-3 md:p-0 mt-2 md:hidden lg:block">
                    <img class="w-7 h-auto" src="{{ asset('assets/images/social_4.webp') }}">
                </a>
            </div>

            <div class="flex gap-2  mt-2 mr-4 ml-4">
                <a href="{{ route('register') }}" class="text-white">
                    <button type="button" class="text-white w-[100px] hidden md:block hover:bg-blue-400 ring-1 ring-white font-medium rounded-lg text-sm px-4 py-1 text-center focus:ring-blue-800 uppercase">
                        Join Us
                    </button>
                </a>

                <a href="{{ route('register') }}" class="text-white">
                    <button type="button" class=" w-[170px] text-white hover:bg-blue-400 ring-1 ring-white font-medium rounded-lg text-sm px-4 py-1 text-center focus:ring-blue-800 uppercase">
                        Members Portal
                    </button>
                </a>
            </div>

        </div>
    </div>


    <div class="p-4" style="background-color:#005AA9;">
        <!-- Toggle Button for Small Screens -->
        <div class="flex justify-end">
            <!-- Apply 'justify-end' directly to the 'flex' class -->
            <button id="toggleMenuBtn1" class="md:hidden text-white hover:text-yellow-500 rounded-lg text-sm px-4 py-2 text-center inline-flex items-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
                <span class="ml-2">Menu1</span>
            </button>
            <button id="toggleMenuBtn2" class="md:hidden inline-flex text-gray-900 hover:text-blue-500 rounded-lg text-sm px-4 py-2 text-center items-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
                <span class="ml-2">Menu2</span>
            </button>
        </div>

        <div id="mobileMenu1" class="hidden md:hidden w-1/2 absolute top-4 left-4  bg-slate-400 shadow-md rounded-md">
            <!-- Add your dropdown menu items here -->
            <div class="">
                <a class="" href="https://www.google.com/maps/dir/Bandari+sacco+nairobi+branch/MV6H%2BWCM+Bandari+sacco+nairobi+branch,+Nairobi/@-1.3375742,36.8372475,13z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x182f131e12bc20e5:0x41d8bae60685f5f1!2m2!1d36.878533!2d-1.3376604!1m5!1m1!1s0x182f131e12bc20e5:0x41d8bae60685f5f1!2m2!1d36.878533!2d-1.3376604!3e2?authuser=0&entry=ttu">
                    <button class="text-black  hover:text-yellow-500  rounded-lg text-sm px-8 py-2 text-center inline-flex items-center" type="button">
                        <img class="h-8" src="{{ asset('assets/images/badge_3.webp') }}">
                        <p class="h-paragraph text-white ml-2 text-left">
                            Bandari Sacco Building, Moi Avenue, Mombasa
                        </p>
                    </button>
                </a>
            </div>
            <div class="">
                <a href="tel:+245724002525" class="justify-start md:block lg:block">
                    <button class="text-black  hover:text-yellow-500  rounded-lg text-sm px-8 py-2 text-center inline-flex items-center" type="button">
                        <img class="h-8" src="{{ asset('assets/images/badge.webp') }}">
                        <p class="h-paragraph text-white ml-2">(+254)-724-002-525</p>
                    </button>
                </a>
            </div>
            <div class="">
                <a href="mailto:info@bandari.co.ke" class="  md:hidden lg:block ">
                    <button class="text-black  hover:text-yellow-500  rounded-lg text-sm px-8 py-2 text-center inline-flex items-center" type="button">
                        <img class="h-8" src="{{ asset('assets/images/badge_2.webp') }}">
                        <p class="h-paragraph text-white ml-2">info@bandari.co.ke</p>
                    </button>
                </a>
            </div>
            <div class="mt-2 ml-2 justify-items-center">
                <a href="{{ route('register') }}" class="text-white">
                    <button type="button" class="text-white w-[100px]    hover:bg-blue-400 ring-1 ring-white font-medium rounded-lg text-sm px-4 py-1 items-center text-center focus:ring-blue-800 uppercase">
                        Join Us
                    </button>
                </a>
            </div>
            <div class="mt-2 ml-2">
                <a href="{{ route('register') }}" class="text-white">
                    <button type="button" class=" w-auto text-white hover:bg-blue-400 ring-1 ring-white font-medium rounded-lg text-sm px-4 py-1 text-center focus:ring-blue-800 uppercase">
                        Members Portal
                    </button>
                </a>
            </div>


            <div class="flex -gap-2">
                <a href="#" class="hidden py-2 px-3 md:p-0 mt-2 md:hidden lg:block">
                    <img class="w-16 h-7" src="{{ asset('assets/images/social.webp') }}">
                </a>

                <a href="#" class=" py-2 px-3 md:p-0 mt-2 md:hidden lg:block">
                    <img class="w-16 h-7" src="{{ asset('assets/images/social_1.webp') }}">
                </a>
                <a href="#" class="block py-2 px-3 md:p-0 mt-2 md:hidden lg:block ">
                    <img class="w-16 h-7" src="{{ asset('assets/images/social_2.webp') }}">
                </a>
                <a href="#" class="block py-2 px-3 md:p-0 mt-2 md:hidden lg:block ">
                    <img class="w-16 h-7" src="{{ asset('assets/images/social_3.webp') }}">
                </a>

                <a href="#" class=" py-2 hidden px-3 md:p-0 mt-2 rounded-full  md:hidden lg:block ">
                    <img class="w-20 h-7 bg-red-600 rounded-full" src="{{ asset('assets/images/mdi_youtube.webp') }}">
                </a>

                <a href="#" class="block py-2 px-3 md:p-0 mt-2 md:hidden lg:block">
                    <img class="w-16 h-7" src="{{ asset('assets/images/social_4.webp') }}">
                </a>
            </div>
        </div>
        <div id="mobileMenu2" class="hidden md:hidden w-1/2 absolute top-4 left-4  bg-white shadow-md rounded-md">
            <!-- Add your dropdown menu items here -->
            <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100">me</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100">Item 2</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-800 hover:bg-gray-100">Item 3</a>
        </div>
    </div>






    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var toggleMenuBtn = document.getElementById('toggleMenuBtn1');
            var mobileMenu = document.getElementById('mobileMenu1');

            toggleMenuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        });

    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var toggleMenuBtn = document.getElementById('toggleMenuBtn2');
            var mobileMenu = document.getElementById('mobileMenu2');

            toggleMenuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
            });
        });

    </script>




    <div class="hidden md:block  lg:block justify-center p-4 pt-6 pb-6 " style="background-color:#FFCC26;">
        <div class="flex md:gap-2 lg:gap-12  lg:max-w-screen-xl  md:max-w-screen-lg mx-auto">
            <div class=" lg:-mt-7 md:-mt-7 justify-start">
                <div class="flex ">
                    <div class="">
                        <a href="/" class="-ml-3">
                            <img class="h-10" src="{{ asset('assets/images/logo.webp') }}">
                        </a>
                    </div>
                    <div class="ml-2  w-36">
                        <a href="/" class="-ml-3">
                            <p class="band-logo">Bandari DT Sacco</p>
                            <button class="power-to-succeed px-1 py-0.5 bg-blue-700 mt-2 rounded-xl">
                                Power to Succeed
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            <div class=" flex justify-center gap-10 mt-2">
                <div class=" ">
                    <button id="multiLevelDropdownButton" data-dropdown-toggle="multi-dropdown" class="menu-text w-24 text-center inline-flex items-center" type="button">
                        <a href="{{ url('/about') }}" class="hover:text-blue-700"> About us</a>
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="CurrentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <div id="multi-dropdown" class="z-10 hidden bg-slate-100 divide-y divide-gray-100 rounded-lg shadow w-56">
                        <ul class=" p-10 pb-10" aria-labelledby="multiLevelDropdownButton">
                            <li>
                                <a href="{{ url('/membership') }}" class="footer-p ">Our Membership</a>
                            </li>

                            <li>
                                <a href="{{ url('/board-directors') }}" class="footer-p ">Board of Directors</a>
                            </li>
                            <li>
                                <a href="{{url('/senior-management')}}" class="footer-p ">Senior Directors</a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="">

                    <button id="dropdownBgHoverButton" data-dropdown-toggle="dropdownBgHover" class="menu-text  text-center inline-flex items-center" type="button">
                        <a href="{{ url('/our-products') }}" class=""> products</a>
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownBgHover" class="z-10 hidden bg-slate-100 divide-y divide-gray-100 rounded-lg shadow w-56">
                        <ul class=" p-10 pb-10" aria-labelledby="dropdownBgHoverButton">

                            <li>
                                <a href="{{url('/mobile-banking')}}" class="footer-p ">Mobile Banking</a>
                            </li>
                            <li>
                                <a href="{{url('/loans')}}" class="footer-p ">Loans</a>
                            </li>


                        </ul>
                    </div>

                </div>



                <div class="">
                    <button id="dropdownUsersButton" data-dropdown-toggle="dropdownUsers" data-dropdown-placement="bottom" class="menu-text  text-center inline-flex items-center" type="button">
                        <a href="{{ url('/our-resources') }}" class=""> Resources</a>
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownUsers" class="z-10 hidden bg-slate-100 divide-y divide-gray-100 rounded-lg shadow w-56">
                        <ul class=" p-10 pb-10" aria-labelledby="dropdownUsersButton">

                            <li>
                                <a href="{{url('/our-downloads')}}" class="footer-p ">Our Downloads</a>
                            </li>
                            <li>
                                <a href="{{url('/our-careers')}}" class="footer-p ">Our Careers</a>
                            </li>
                            <li>
                                <a href="{{url('/tenders')}}" class="footer-p ">Tenders</a>
                            </li>

                        </ul>
                    </div>
                </div>

                <div class="md:hidden lg:block">
                    <button id="dropdownRadioHelperButton" data-dropdown-toggle="dropdownRadioHelper" class="menu-text  text-center inline-flex items-center" type="button">
                        <a href="{{ url('/news-media') }}" class=""> News $ Media</a>
                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <!-- Dropdown menu -->
                    <div id="dropdownRadioHelper" class="z-10 hidden bg-slate-100 divide-y divide-gray-100 rounded-lg shadow w-56">
                        <ul class=" p-10 pb-10" aria-labelledby="dropdownRadioHelperButton">

                            <li>
                                <a href="{{url('events')}}" class="footer-p ">Events</a>
                            </li>
                            <li>
                                <a href="{{url('gallery')}}" class="footer-p ">Gallery</a>
                            </li>
                            <li>
                                <a href="{{url('news-articles')}}" class="footer-p ">News $ Articles</a>
                            </li>
                            <li>
                                <a href="{{url('single-news-article')}}" class="footer-p ">Single News Article</a>
                            </li>

                        </ul>
                    </div>
                </div>


                <div class="">
                    <a href="{{url('help-support')}}" class="menu-text text-center inline-flex items-center">Support</a>

                </div>
                <div class="md:hidden lg:block">
                    <a href="{{('get-in-touch')}}" class="menu-text  text-center inline-flex items-center">Contact</a>

                </div>
                <div class="md:hidden lg:block">
                    <a href="{{('submit-ticket')}}" class="menu-text text-center inline-flex items-center">Submit
                        ticket
                    </a>
                </div>
            </div>
            <div class="justify-end flex-shrink-0">
                <a href="" class="">
                    <button type="button" class=" px-4 py-2 text-center">
                        <img class="w-fit " src="{{ asset('assets/images/search.webp') }}">
                    </button>
                </a>
            </div>
        </div>
    </div>


</div>

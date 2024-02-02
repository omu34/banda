<x-app-layout>
    @show
    @section('content')
    <div class="min-h-[500px]" style="background:url({{ asset('assets/images/gallery-banner.webp') }});background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="flex max-w-screen-xl mx-auto">
            <div class="justify-start md:mt-[80px] mt-4">
                <div>
                    <h1 class="banner-word">
                        Gallery
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
        <div class="max-w-screen-xl mx-auto ">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

                <div class="">
                    <div class="">
                        <img src="{{ asset('assets/images/gallery.webp') }}" alt="" srcset="">
                    </div>
                    <div class="mt-8">
                        <img src="{{ asset('assets/images/gallery1.webp') }}" alt="" srcset="">

                    </div>
                    <div class="mt-8">
                        <img src="{{ asset('assets/images/gallery2.webp') }}" alt="" srcset="">

                    </div>
                </div>

                <div class="">
                    <div class="">
                        <img src="{{ asset('assets/images/gallery.webp') }}" alt="" srcset="">
                    </div>
                    <div class="mt-8">
                        <img src="{{ asset('assets/images/gallery1.webp') }}" alt="" srcset="">

                    </div>
                    <div class="mt-8">
                        <img src="{{ asset('assets/images/gallery2.webp') }}" alt="" srcset="">

                    </div>
                </div>


                <div class="">
                    <div class="">
                        <img src="{{ asset('assets/images/gallery.webp') }}" alt="" srcset="">
                    </div>
                    <div class="mt-8">
                        <img src="{{ asset('assets/images/gallery1.webp') }}" alt="" srcset="">

                    </div>
                    <div class="mt-8">
                        <img src="{{ asset('assets/images/gallery2.webp') }}" alt="" srcset="">

                    </div>
                </div>

            </div>


        </div>













        @show
</x-app-layout>

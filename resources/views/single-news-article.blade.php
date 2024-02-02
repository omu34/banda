<x-app-layout>
    @show
    @section('content')

    <div class="min-h-[500px]" style="background:url({{ asset('assets/images/single-banner.webp') }});background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="flex max-w-screen-xl mx-auto">
            <div class="justify-start md:mt-[80px] mt-4">
                <div>
                    <h1 class="single-word">
                        Sunt qui esse pariatur duis deserunt mollit
                    </h1>
                </div>
                <div class="ml-2  single-h2 mt-4">

                    <p class="">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod

                    </p>
                    <p class="">
                        tempor incididunt ut labore et dolore magna aliqua. Dui

                    </p>
                    <p class="">
                        accumsan sit amet nulla facilisi morbi.

                    </p>

                </div>
                <div class="ml-2 mt-4 md:mt-8">
                    <a href="{{ route('register') }}" class="text-white ">
                        <button style="background: var(--Hues-Light-Blue, #99CFFF);" class="rounded-lg px-6 py-1">
                            <p class="n-m-button text-left uppercase">Insights</p>
                        </button>
                    </a>
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






        {{--  <div class="">
            <div class="min-h-[500px]" style="background:url({{ asset('assets/images/single-banner.webp') }});background-size: cover; background-position: center; background-repeat: no-repeat;">

                <div class="flex max-w-screen-xl items-start ">
                    <div class="w-1/6 md:-ml-24"></div>
                    <div class="justify-start  md:mt-[80px] mt-4 ">
                        <div class=" md:mt-10">
                            <h1 class="single-word">
                                Sunt qui esse pariatur duis deserunt mollit
                            </h1>
                        </div>
                        <div class="ml-2  single-h2 mt-4">

                            <p class="">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod

                            </p>
                            <p class="">
                                tempor incididunt ut labore et dolore magna aliqua. Dui

                            </p>
                            <p class="">
                                accumsan sit amet nulla facilisi morbi.

                            </p>

                        </div>
                        <div class="ml-2 mt-4 md:mt-8">
                            <a href="{{ route('register') }}" class="text-white ">
                                <button style="background: var(--Hues-Light-Blue, #99CFFF);" class="rounded-lg px-6 py-1">
                                    <p class="n-m-button text-left uppercase">Insights</p>
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
        </div>  --}}
        <div class=" bg-white pt-10 pb-10">
            <div class="max-w-screen-xl mx-auto">
                <div class="max-w-screen-md mx-auto">

                    <div class="">
                        <div class="">
                            <h4 class="single-header">
                                Et malesuada fames ac turpis
                            </h4>
                        </div>

                        <div class="p-services-paragraph justify-between mt-4">
                            <p class="">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Morbi blandit cursus risus at ultrices mi tempus imperdiet nulla. Odio morbi quis commodo odio. Et malesuada fames ac turpis egestas sed tempus urna. Mi in nulla posuere sollicitudin aliquam ultrices sagittis orci a. Fringilla ut morbi tincidunt augue interdum. Ultrices in iaculis nunc sed augue lacus viverra.

                            </p>
                            <p class="mt-2">
                                Erat imperdiet sed euismod nisi porta. Morbi blandit cursus risus at ultrices mi tempus imperdiet nulla. Cras sed felis eget velit aliquet sagittis. Amet commodo nulla facilisi nullam vehicula ipsum a arcu cursus. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue. Blandit aliquam etiam erat velit scelerisque in dictum. In hac habitasse platea dictumst vestibulum rhoncus. Molestie ac feugiat sed lectus vestibulum.

                            </p>
                            <p class="mt-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Morbi blandit cursus risus at ultrices mi tempus imperdiet nulla. Odio morbi quis commodo odio. Et malesuada fames ac turpis egestas sed tempus urna. Mi in nulla posuere sollicitudin aliquam ultrices sagittis orci a. Fringilla ut morbi tincidunt augue interdum. Ultrices in iaculis nunc sed augue lacus viverra.

                            </p>
                            <p class="mt-2">
                                Erat imperdiet sed euismod nisi porta. Morbi blandit cursus risus at ultrices mi tempus imperdiet nulla. Cras sed felis eget velit aliquet sagittis. Amet commodo nulla facilisi nullam vehicula ipsum a arcu cursus. Ullamcorper dignissim cras tincidunt lobortis feugiat vivamus at augue. Blandit aliquam etiam erat velit scelerisque in dictum. In hac habitasse platea dictumst vestibulum rhoncus. Molestie ac feugiat sed lectus vestibulum.

                            </p>
                        </div>



                        <div class="mt-4">
                            <img src="{{ asset('assets/images/p-image.webp') }}" alt="" srcset="">
                        </div>

                        <div class="mt-4">
                            <h4 class="single-header">
                                Nascetur ridiculus mus
                            </h4>
                        </div>


                        <div class="p-services-paragraph mt-4">
                            <p class="">
                                Sed vulputate odio ut enim blandit volutpat maecenas. Sagittis orci a scelerisque purus semper eget duis at. Porta lorem mollis aliquam ut porttitor leo a diam. In fermentum et sollicitudin ac orci phasellus egestas tellus. Mauris cursus mattis molestie a iaculis at erat pellentesque adipiscing. Nascetur ridiculus mus mauris vitae ultricies. Dui nunc mattis enim ut tellus. Duis convallis convallis tellus id interdum. Quis ipsum suspendisse ultrices gravida dictum fusce. Scelerisque mauris pellentesque pulvinar pellentesque. Tincidunt augue interdum velit euismod. Nibh tortor id aliquet lectus. Amet commodo nulla facilisi nullam. Vulputate ut pharetra sit amet aliquam id diam maecenas. Tellus pellentesque eu tincidunt tortor. Ultrices vitae auctor eu augue ut lectus arcu bibendum.
                            </p>
                            <p class="mt-2">
                                Sed vulputate odio ut enim blandit volutpat maecenas. Sagittis orci a scelerisque purus semper eget duis at. Porta lorem mollis aliquam ut porttitor leo a diam. In fermentum et sollicitudin ac orci phasellus egestas tellus. Mauris cursus mattis molestie a iaculis at erat pellentesque adipiscing. Nascetur ridiculus mus mauris vitae ultricies. Dui nunc mattis enim ut tellus. Duis convallis convallis tellus id interdum. Quis ipsum suspendisse ultrices gravida dictum fusce. Scelerisque mauris pellentesque pulvinar pellentesque. Tincidunt augue interdum velit euismod. Nibh tortor id aliquet lectus. Amet commodo nulla facilisi nullam. Vulputate ut pharetra sit amet aliquam id diam maecenas. Tellus pellentesque eu tincidunt tortor. Ultrices vitae auctor eu augue ut lectus arcu bibendum.
                            </p>
                        </div>
                    </div>
                </div>



                <div class="justify-center pt-10">
                    <div class="flex justify-center ">
                        <h4 class="single-social-h text-center">
                            Share article
                        </h4>
                    </div>

                    <div class="flex justify-center gap-2  mt-2">
                        <img class="h-9" src="{{ asset('assets/images/social.webp') }}">
                        <img class="h-9" src="{{ asset('assets/images/social_1.webp') }}">
                        <img class="h-9" src="{{ asset('assets/images/social_2.webp') }}">
                        <img class="h-9" src="{{ asset('assets/images/social_3.webp') }}">
                        <img class="h-9" src="{{ asset('assets/images/social_4.webp') }}">
                    </div>

                </div>



                <div class="">

                    <div class="pb-10 pt-10">
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-10">
                            <div class="w-full justify-self-center md:justify-self-start">
                                <div class="">
                                    <h1 class="n-media-title">
                                        Related Articles
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


                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        <div class="">
                            <div class="">
                                <div class="flex gap-2">
                                    <div class="">
                                        <img src="{{ asset('assets/images/single.webp') }}" alt="" class="w-full">
                                    </div>

                                    <div class="">
                                        <div class="">
                                            <h4 class="single-title">
                                                Sunt qui esse pariatur duis deserunt mollit
                                            </h4>
                                        </div>
                                        <div class="flex gap-2 pt-2 pb-1">
                                            <a href="{{ route('register') }}" class="text-white ">
                                                <button style="background: var(--Hues-Light-Blue, #99CFFF);" class="rounded-md px-2 py-0.5 text-xs ">
                                                    <p class="n-m-buttons text-left uppercase">Products</p>
                                                </button>
                                            </a>
                                            <a href="{{ route('register') }}" class="text-white ">
                                                <button style="background: var(--Hues-Light-Blue, #99CFFF);" class="rounded-md px-2 py-0.5 text-xs ">
                                                    <p class="n-m-buttons text-left uppercase">02/12/2023</p>
                                                </button>
                                            </a>
                                        </div>

                                        <div class="p-services-paragraph">
                                            <p class="">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="">
                            <div class="">
                                <div class="flex gap-2">
                                    <div class="">
                                        <img src="{{ asset('assets/images/single1.webp') }}" alt="" class="w-full">
                                    </div>

                                    <div class="">
                                        <div class="">
                                            <h4 class="single-title">
                                                Sunt qui esse pariatur duis deserunt mollit
                                            </h4>
                                        </div>
                                        <div class="flex gap-2 pt-2 pb-1">
                                            <a href="{{ route('register') }}" class="text-white ">
                                                <button style="background: var(--Hues-Light-Blue, #99CFFF);" class="rounded-md px-2 py-0.5 text-xs ">
                                                    <p class="n-m-buttons text-left uppercase">Products</p>
                                                </button>
                                            </a>
                                            <a href="{{ route('register') }}" class="text-white ">
                                                <button style="background: var(--Hues-Light-Blue, #99CFFF);" class="rounded-md px-2 py-0.5 text-xs ">
                                                    <p class="n-m-buttons text-left uppercase">02/12/2023</p>
                                                </button>
                                            </a>
                                        </div>

                                        <div class="p-services-paragraph">
                                            <p class="">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>






                </div>








            </div>





            @show
</x-app-layout>

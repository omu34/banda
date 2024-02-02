<x-app-layout>
    @show
    @section('content')
    <div class="min-h-[500px]" style="background:url({{ asset('assets/images/membership-banner.webp') }});background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="flex max-w-screen-xl mx-auto">
            <div class="justify-start md:mt-[80px] mt-4">
                <div>
                    <h1 class="banner-word">
                        Our Membership
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
    <div class="">

        <div class="bg-white pb-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-screen-xl mx-auto">
                <div class="mt-[40px]">
                    <h1 class="-ml-2 why-join">Why Join Us</h1>
                    <div class=" p-services-paragraph mt-4">
                        <p class="">
                            At Bandari DT Sacco, you are a valued member. We are dedicated to putting you first, tailoring
                            our services to meet your specific financial goals and aspirations. Joining us offers numerous
                            compelling reasons for individuals seeking financial empowerment and growth.
                        </p>
                        <p class="mt-2 md:mt-6">
                            1. Enjoy the trust and reliability of Bandari DT Sacco, offering loan interest rates below the
                            market average of 14% pa, ensuring cost-effective financial solutions.
                        </p>
                        <p class="mt-2">
                            2. Benefit from personalized financial solutions that cater to individual needs and goals,
                            including customized investment portfolios, loan structures, and retirement planning.
                        </p>
                        <p class="mt-2">
                            3. Experience the convenience of a one-stop financial solution provider, offering a wide range
                            of products and services such as savings accounts, mortgage, asset financing, LPO financing, and
                            more under a single roof.
                        </p>
                        <p class="mt-2">
                            4. Access educational resources, workshops, and financial literacy programs that empower members
                            to make informed decisions, enhancing financial literacy and awareness.
                        </p>
                        <p class="mt-2">
                            5. Enjoy attractive returns with a track record of 18% dividends and 11.5% interest on deposits
                            over the last 7 years, ensuring consistent value for your money.
                        </p>
                        <p class="mt-2">
                            6. Benefit from quality and seamless customer experiences with automated processes, ensuring
                            minimal turnaround time for services.
                        </p>
                        <p class="mt-2">
                            7. Experience innovation with user-friendly digital platforms, a mobile app, and AI-powered
                            security solutions, providing 24/7 surveillance and monitoring for enhanced customer confidence.
                        </p>
                        <p class="mt-2">
                            8. Join a Sacco with a distinctive corporate culture centred on core values that support the
                            growth and development of its members.
                        </p>
                        <p class="mt-2">
                            9. Become part of a recognized and respected brand with a consistent track record of setting
                            high standards of excellence, demonstrated through various awards and accolades
                        </p>
                        <p class="mt-2 md:mt-6">
                            By joining Bandari DT Sacco, you embark on a journey of financial growth and success with a
                            trusted and innovative financial partner.
                        </p>
                    </div>


                </div>
                <div class="lg:justify-self-end md:justify-self-center justify-self-center mt-[40px]">
                    <img class="w-full max-h-fit" src="{{ asset('assets/images/why-img.webp') }}" alt="" srcset="">
                </div>

            </div>
        </div>



        <div class="  md:pb-20 md:pt-10">
            <div class="max-w-screen-xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-40">
                    <div class="lg:justify-self-start md:justify-self-center justify-self-center mt-4">
                        <div class="flex lg:justify-self-start ">
                            <h1 class=" our-branches md:justify-self-center justify-self-center ">
                                Membership Structure
                            </h1>
                        </div>
                        <p class="p-services-paragraph mt-3">
                            With the advent of FOSA Operations in 2005 Bandari Sacco has experienced a steady growth in
                            membership attracting the youth, investment groups, welfare groups, sole proprietorships,
                            registered businesses, SMEs, Kenyans in diaspora among many others.
                        </p>
                        <h4 class="n-m-title mt-3">
                            <b> Bandari Sacco is open to the public.</b>
                        </h4>
                    </div>

                    <div class="">
                        <div class="flex mb-4 mt-4">
                            <div class="-ml-5">
                                <a href="/" class=" ">
                                    <div class="flex gap-[-2rem] items-start">
                                        <div class="mt-1.5">
                                            <img class="h-10" src="{{ asset('assets/images/tick.webp') }}">
                                        </div>
                                        <div class="ml-2 mt-2">
                                            <p class="p-services-paragraph">1. Ordinary Savings Account</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>




                        <div class="flex mb-4 mt-4">
                            <div class="-ml-5">
                                <a href="/" class=" ">
                                    <div class="flex gap-[-2rem] items-start">
                                        <div class="mt-1.5">
                                            <img class="h-10" src="{{ asset('assets/images/tick.webp') }}">
                                        </div>
                                        <div class="ml-2 mt-2">
                                            <p class="p-services-paragraph">2. Non-withdrawable Deposits</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>



                        <div class="flex mb-4 mt-4">
                            <div class="-ml-5">
                                <a href="/" class=" ">
                                    <div class="flex gap-[-2rem] items-start">
                                        <div class="1.5">
                                            <img class="h-10" src="{{ asset('assets/images/tick.webp') }}">
                                        </div>
                                        <div class="ml-2 mt-1.5">
                                            <p class="p-services-paragraph">3. Share Capital</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>



        <div class=" bg-white pt-10 pb-10">
            <div class="max-w-screen-xl mx-auto bg-white">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div class="">
                        <div class="">
                            <h4 class="ordinary-savings">
                                1. Ordinary Savings Account
                            </h4>

                        </div>
                        <div class="mt-2 md:mt-5">
                            <img class="w-full h-50vh" src="{{ asset('assets/images/ordinary.WEBP') }}" alt="" srcset="">

                        </div>
                    </div>


                    <div class="">
                        <div class="mt-2">
                            <p class="p-services-paragraph">
                                This is your everyday collection and disbursement account through which all deposits are
                                accumulated before transfers to Deposit and Share accounts respectively. The account bears
                                ATM, Internet Banking and USSD or Mobile banking, Paybill facilities and bears linkages that
                                facilitate RTGS and is International Money Transfer enabled.
                            </p>
                        </div>
                        <div class="mt-2 md:mt-5">
                            <h4 class="ordinary-s-titles">
                                <b> Benefits</b>
                            </h4>
                        </div>
                        <div class="mt-2 md:mt-5 p-services-paragraph">
                            <li class="">
                                Interest earnings of < 0.4% against monthly account balances that is realized in the last Month of the financial period. </li>
                            <li class="mt-2">
                                Pocket friendly account management expenses – No ledger fees
                            </li>
                        </div>
                    </div>


                </div>


                <div class=" flex mt-[40px] pt-10 pb-10">
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




                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 ">
                    <div class="">
                        <div class="">
                            <h4 class="ordinary-savings">
                                2. Non-withdrawable Deposits
                            </h4>

                        </div>
                        <div class="mt-2 md:mt-5">
                            <img class="w-full h-50vh" src="{{ asset('assets/images/ordinary1.webp') }}" alt="" srcset="">

                        </div>
                    </div>


                    <div class="mt-3">
                        <div class="">
                            <p class="p-services-paragraph">
                                These are monthly deposits that constitute active membership to a Sacco with the minimum
                                currently pegged at Kshs.1, 500.00 per month or Kshs.50.00 per day.The deposits may however
                                be withdrawn in cash upon cessation of membership and upon expiry of 60 days’ notice period.
                            </p>
                        </div>
                        <div class="mt-2 md:mt-5">
                            <h4 class="ordinary-s-titles">
                                <b> Benefits</b>
                            </h4>
                        </div>
                        <div class="mt-2 md:mt-5 p-services-paragraph">
                            <li class="">
                                Facility for granting of loans / advances on the principle of multiplicity as per Sacco
                                loan policy.
                            </li>
                            <li class="mt-2">
                                Interest earnings of < 12.15% realized at the end of every financial period and as approved by the annual delegates conference.. </li>
                        </div>
                    </div>


                </div>




                <div class=" flex mt-[40px] pt-10 pb-10">
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






                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 ">
                    <div class="">
                        <div class="">
                            <h4 class="ordinary-savings">
                                3. Share Capital
                            </h4>

                        </div>
                        <div class="mt-2 md:mt-5">
                            <img class="w-full h-50vh" src="{{ asset('assets/images/ordinary3.webp') }}" alt="" srcset="">

                        </div>
                    </div>


                    <div class="mt-3">
                        <div class="">
                            <p class="p-services-paragraph">
                                Once you become a member of Bandari Sacco, it is required that you purchase shares of at
                                least Ksh 10,500. These shares are non withdrawable and can be transferred to a next of kin,
                                or alternatively can be sold.
                            </p>
                        </div>
                        <div class="mt-5">
                            <h4 class="ordinary-s-titles">
                                <b> Benefits</b>
                            </h4>
                        </div>
                        <div class="mt-2 md:mt-5 p-services-paragraph">
                            <li class="mt-2">
                                The shares have a guaranteed return of < Kshs. 20% p.a as approved by the annual delegates conference. </li>
                            <li class="mt-2 md:mt-5">
                                The shares investment is not withdrawable in cash but may be transferred in total
                                or in fraction to a next of Kin and / or sold to a willing buyer at agreed value.
                            </li>
                        </div>
                    </div>


                </div>
            </div>
        </div>




        <div class=" bg-white pt-10 pb-10">
            <div class="max-w-screen-xl mx-auto ">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 mt-[40px]">
                    <div class="">
                        <div class="">
                            <img src="{{ asset('assets/images/account-type.webp') }}" alt="" srcset="">
                        </div>
                        <div class="mt-4">
                            <h4 class="ordinary-savings">
                                Who is eligible to join Bandari Sacco?
                            </h4>
                        </div>
                        <div class="p-services-paragraph mt-4">
                            <p class="">
                                Bandari Sacco has been welcoming members from all walks of life since we opened our Common Bond in 2005. The Sacco accommodates diverse membership categories, catering to different individuals and entities, including:
                            </p>
                            <div class="p-services-paragraph ml-4">
                                <li class="mt-4">
                                    Category 1: Salaried Members Category
                                </li>
                                <li class="">
                                    Category 2: Business Community Members
                                </li>
                                <li class="">
                                    Category 3: Corporate Members
                                </li>
                                <li class="">
                                    Category 5: Farmers
                                </li>
                                <li class="">
                                    Category 6: Special Membership
                                </li>
                                <li class="">
                                    This inclusive approach ensures that Bandari Sacco serves the unique financial needs of a broad spectrum of individuals, making financial empowerment accessible to everyone.
                                </li>
                            </div>
                        </div>
                    </div>




                    <div class="">
                        <div class="-ml-4">
                            <h4 class="ordinary-savings">
                                Account Types
                            </h4>
                        </div>


                        <div class="mt-4 md:mt-8">
                            <div class="grid divide-y divide-neutral-200 gap-4 mx-auto">
                                <div class="py-5">
                                    <details class="group">
                                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                            <span class="-ml-3 p-account">
                                                Personal Savings Account
                                            </span>
                                            <span class="ml-2 transition group-open:rotate-45">
                                                <img class="" src="{{ asset('assets/images/add-fill.webp') }}">
                                            </span>

                                        </summary>
                                        <p class="p-details">. Copy of National ID</p>
                                        <p class="p-details">. Duly filled account opening form.</p>
                                        <p class="p-details">. Coloured Passport Photo</p>
                                        <p class="p-details">.</p>
                                    </details>
                                </div>
                                <div class="py-5">
                                    <details class="group">
                                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                            <span class="-ml-3 p-account">
                                                Groups/Chamas Account
                                            </span>
                                            <span class="ml-2 transition group-open:rotate-45">
                                                <img class="" src="{{ asset('assets/images/add-fill.webp') }}">

                                            </span>
                                        </summary>
                                        <p class="p-details">. Copy of National ID</p>
                                        <p class="p-details">. Duly filled account opening form.</p>
                                        <p class="p-details">. Coloured Passport Photo</p>
                                        <p class="p-details">.</p>
                                    </details>
                                </div>
                                <div class="py-5">
                                    <details class="group">
                                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                            <span class="-ml-3 p-account">
                                                Sole Proprietor Account
                                            </span>
                                            <span class="ml-2 transition group-open:rotate-45">
                                                <img class="" src="{{ asset('assets/images/add-fill.webp') }}">

                                            </span>
                                        </summary>
                                        <p class="p-details">. Copy of National ID</p>
                                        <p class="p-details">. Duly filled account opening form.</p>
                                        <p class="p-details">. Coloured Passport Photo</p>
                                        <p class="p-details">.</p>
                                    </details>
                                </div>
                                <div class="py-5">
                                    <details class="group">
                                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                            <span class="-ml-3 p-account">
                                                DAU Junior Savings Account
                                            </span>
                                            <span class="ml-2 transition group-open:rotate-45">
                                                <img class="" src="{{ asset('assets/images/add-fill.webp') }}">

                                            </span>
                                        </summary>
                                        <p class="p-details">. Copy of National ID</p>
                                        <p class="p-details">. Duly filled account opening form.</p>
                                        <p class="p-details">. Coloured Passport Photo</p>
                                        <p class="p-details">.</p>
                                    </details>
                                </div>
                                <div class="py-5">
                                    <details class="group">
                                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                            <span class="-ml-3 p-account">
                                                Limited Company Account
                                            </span>
                                            <span class="ml-2 transition group-open:rotate-45">
                                                <img class="" src="{{ asset('assets/images/add-fill.webp') }}">

                                            </span>
                                        </summary>
                                        <p class="p-details">. Copy of National ID</p>
                                        <p class="p-details">. Duly filled account opening form.</p>
                                        <p class="p-details">. Coloured Passport Photo</p>
                                        <p class="p-details">.</p>
                                    </details>
                                </div>
                                <div class="py-5">
                                    <details class="group">
                                        <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                            <span class="-ml-3 p-account">
                                                Society/Club Account
                                            </span>
                                            <span class="ml-2 transition group-open:rotate-45">
                                                <img class="" src="{{ asset('assets/images/add-fill.webp') }}">
                                            </span>

                                        </summary>
                                        <p class="p-details">. Copy of National ID</p>
                                        <p class="p-details">. Duly filled account opening form.</p>
                                        <p class="p-details">. Coloured Passport Photo</p>
                                        <p class="p-details">.</p>
                                    </details>
                                </div>
                            </div>
                            <div class="mt-4 -ml-4 md:mt-8">
                                <p class="join ">
                                    <b class="">How to join?</b>
                                    Applicants are required to submit a duly completed application form together with required identification documents.
                                </p>
                            </div>
                        </div>
                        <div class="flex mt-4 -ml-2 md:mt-8">
                            <div class="w-1/3">
                                <a href="{{ route('register') }}" class="-ml-5 ">
                                    <button class="text-white bg-blue-700  m-3 uppercase hover:bg-blue-400   rounded-lg text-xs px-5 py-2.5 text-center inline-flex items-center" type="button">
                                        join us
                                        <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                    </button>
                                </a>
                            </div>
                            <div class="w-1/3 lg:-ml-20 md:-ml-5 sm:-ml-20 -ml-5">
                                <a href="{{ route('register') }}" class="-ml-3 ">
                                    <button class="text-blue-600  m-3 uppercase hover:bg-white   rounded-lg text-xs px-5 py-2.5 text-center inline-flex items-center" type="button">
                                        my account
                                        <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                        </svg>
                                    </button>
                                </a>
                            </div>

                            <div class="w-1/3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



















        @show
</x-app-layout>

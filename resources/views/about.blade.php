<x-app-layout>
    @show
    @section('content')

    <div class="min-h-[500px] " style="background:url({{ asset('assets/images/about.webp') }});background-size: cover;  background-repeat: no-repeat;">
        <div class="flex max-w-screen-xl mx-auto">
            <div class="justify-start md:mt-[80px] mt-4">
                <div>
                    <h1 class="banner-word">
                        About Us
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



    <div class=" bg-white md:pb-20 md:pt-10">
        <div class="max-w-screen-xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 md:gap-20">
                <div class="lg:justify-self-start md:justify-self-center justify-self-center mt-4">
                    <div class="flex lg:justify-self-start ">
                        <h1 class=" our-branches md:justify-self-center justify-self-center ">
                            Who We Are
                        </h1>
                    </div>
                    <p class="p-services-paragraph mt-3">
                        Bandari DT Sacco Society Ltd, a dynamic deposit- taking Sacco registered under the Co-operative
                        Societies Act, is licensed under the Sacco Societies Act. With our headquarters in Mombasa and
                        other branches in Nairobi , Kisumu and Lamu, we offer a comprehensive range of Front and Back
                        Office Services Activities (FOSA and BOSA) to our esteemed members.
                    </p>
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
                                        <p class="p-services-paragraph"> <b class="vision">Vision</b>: A Socially and
                                            Economically Empowered Membership</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>




                    <div class="flex mb-4 mt-4">
                        <div class="-ml-5">
                            <a href="/" class=" ">
                                <div class="flex gap-[-2rem] items-start">
                                    <div class="mt-1.5 pr-2">
                                        <img class="h-10 w-16" src="{{ asset('assets/images/tick.webp') }}">
                                    </div>
                                    <div class=" mt-2">
                                        <p class="p-services-paragraph"><b class="vision">Mission</b>: Championing
                                            Social and Economic transformation of our members through innovative
                                            Products and Services</p>
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
                                        <p class="p-services-paragraph"><b class="vision">Motto</b>: Power to Succeed
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white pb-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-screen-xl mx-auto">
                <div class="mt-[40px]">
                    <h1 class="-ml-2 cores">Our Core Values</h1>
                    <div class="mt-4">
                        <div class="flex mb-4 mt-4">
                            <div class="-ml-5">
                                <a href="/" class=" ">
                                    <div class="flex gap-[-2rem] items-start">
                                        <div class="mt-1.5">
                                            <img class="h-10" src="{{ asset('assets/images/tick.webp') }}">
                                        </div>
                                        <div class="ml-2 mt-2">
                                            <p class="core-tick"> Teamwork</p>
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
                                            <p class="core-tick"> Integrity</p>
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
                                            <p class="core-tick"> Professionalism</p>
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
                                            <p class="core-tick"> Innovativeness</p>
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
                                            <p class="core-tick"> Customer Focus</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:justify-self-end md:justify-self-center justify-self-center mt-[40px]">
                    <img class="w-full min-h-[350px]" src="{{ asset('assets/images/awards.webp') }}" alt="" srcset="">
                </div>

            </div>
        </div>




        <div class=" bg-white md:pb-20 md:pt-10">
            <div class="max-w-screen-xl mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 md:gap-20">
                    <div class="lg:justify-self-start md:justify-self-center justify-self-center mt-4">
                        <div class="flex lg:justify-self-start ">
                            <h1 class=" our-branches md:justify-self-center justify-self-center ">
                                Our History
                            </h1>
                        </div>

                        <div class="mt-4 lg:mt-24 md:mt-8">
                            <img src="{{ asset('assets/images/history.webp') }}" alt="" srcset="">
                        </div>
                    </div>



                    <div class="md:mt-8 mt-4">
                        <div class=" ">
                            <p class="p-services-paragraph">
                                Founded in 1975 by a visionary group of employees from the East African Harbours and
                                Railways Corporation, Bandari DT Sacco has stood the test of time. Initially named Harbours
                                Workers Savings and Credit Co-operative Society Limited, we underwent a transformative
                                rebranding in 1985 to become Bandari Savings and Credit Cooperative Society Limited,
                                aligning with the changes at the parent organization, Kenya Ports Authority.
                            </p>
                        </div>
                        <div class=" mt-4">
                            <p class="p-services-paragraph">
                                In the year 2005, the Sacco opened its membership to the public with the launch of FOSA
                                services. Today, we stand as a TIER 1 financial services cooperative society, wholly owned
                                by our members, with an impressive asset base of <b class="">Ksh 12.9 billion. </b>
                            </p>
                        </div>
                        <div class=" mt-4">
                            <p class="p-services-paragraph">

                                With a commitment to promoting thrift and providing credit and savings services at
                                competitive interest rates, we serve over 25,000 members from diverse backgrounds, including
                                corporates,MSMEs, the business community and the Diaspora. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class=" bg-white pt-10 pb-10">
            <div class="max-w-screen-xl mx-auto bg-white">
                <div class=" grid grid-cols-1 md:grid-cols-2 gap-10 ">
                    <div class="mt-[40px]">
                        <div class="">
                            <h4 class=" p-services-title">
                                Our Awards
                            </h4>
                        </div>
                        <div class="mt-5">
                            <p class="p-services-paragraph">
                                Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                                sint. Velit
                                officia
                                consequat duis enim velit mollit. Amet minim mollit non deserunt
                                ullamco est sit
                                aliqua dolor do
                                amet sint. Velit officia consequat duis enim velit mollit.
                            </p>
                        </div>
                        <div class=" mt-5">
                            <img class="w-full max-h-fit" src="{{ asset('assets/images/core.webp') }}">

                        </div>
                    </div>


                    <div class="mt-[40px]">
                        <div class="flex gap-8">
                            <div class="w-1/2 ">
                                <div class="grid grid-rows-4 gap-10">
                                    <div class="rounded-xl pb-10 md:pb-16" style="background: var(--Hues-Light-Blue, #99CFFF);">
                                        <div class="grid grid-rows-2 gap-2 ml-4 mr-4 ">
                                            <div class=" mt-4">
                                                <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/awards-badge.webp') }}">

                                            </div>

                                            <div class="mt-2">
                                                <p class="p-s2">
                                                    Most preferred Sacco 2023 –Mombasa Business Awards
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="rounded-xl pb-10" style="background: var(--Hues-Light-Blue, #99CFFF);">
                                        <div class="grid grid-rows-2 gap-2 ml-4 mr-4 ">
                                            <div class=" mt-4">
                                                <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/awards-badge.webp') }}">

                                            </div>

                                            <div class="mt-2">
                                                <p class="p-s2">
                                                    Best regulated Cooperative Society ICD 2023
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="rounded-xl pb-10" style="background: var(--Hues-Light-Blue, #99CFFF);">
                                        <div class="grid grid-rows-2 gap-2 ml-4 mr-4 ">
                                            <div class=" mt-4">
                                                <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/awards-badge.webp') }}">

                                            </div>

                                            <div class="mt-2">
                                                <p class="p-s2">
                                                    Best Sacco in education and training ICD 2023
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="rounded-xl pb-10" style="background: var(--Hues-Light-Blue, #99CFFF);">
                                        <div class="grid grid-rows-2 gap-2 ml-4 mr-4 ">
                                            <div class=" mt-4">
                                                <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/awards-badge.webp') }}">

                                            </div>

                                            <div class="mt-2">
                                                <p class="p-s2">
                                                    Best financial institution other than banks Mombasa ASK Show 2023
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="w-1/2">
                                <div class="grid grid-rows-3 gap-10">
                                    <div class="rounded-xl pb-10 md:pb-16" style="background: var(--Hues-Light-Blue, #99CFFF);">
                                        <div class="grid grid-rows-2 gap-2 ml-4 mr-4 ">
                                            <div class=" mt-4">
                                                <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/awards-badge.webp') }}">

                                            </div>

                                            <div class="mt-2">
                                                <p class="p-s2">
                                                    Best Micro-Finance Institution 2022 & 2023 - Mombasa Business Awards
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="rounded-xl pb-10" style="background: var(--Hues-Light-Blue, #99CFFF);">
                                        <div class="grid grid-rows-2 gap-2 ml-4 mr-4 ">
                                            <div class=" mt-4">
                                                <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/awards-badge.webp') }}">

                                            </div>

                                            <div class="mt-2">
                                                <p class="p-s2">
                                                    Most innovative Tier1 Sacco ICD 2023
                                                </p>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="rounded-xl pb-10" style="background: var(--Hues-Light-Blue, #99CFFF);">
                                        <div class="grid grid-rows-2 gap-2 ml-4 mr-4 ">
                                            <div class=" mt-4">
                                                <img class="rounded-full w-10" style="background: var(--Brand-Dark-Blue, #005AA9);" src="{{ asset('assets/images/awards-badge.webp') }}">

                                            </div>

                                            <div class="mt-2">
                                                <p class="p-s2">
                                                    Best capitalised Sacco - runners up in Kenya 2023
                                                </p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class=" bg-slate-100 pt-10 pb-10">
            <div class="max-w-screen-xl mx-auto ">
                <div class="  grid md:grid-cols-2 grid-cols-1 gap-10 ">
                    <div class="w-full justify-self-center md:justify-self-center lg:justify-self-start">

                        <div class="">
                            <h1 class="why-join text-blue-400">
                                Strategic Plan
                            </h1>
                        </div>

                        <div class="mt-3">
                            <div class="">
                                <div class="">
                                    <img class="w-full" src="{{ asset('assets/images/history.webp') }}">
                                </div>

                                <div class="mt-3">
                                    <p class="n-m-button text-left">
                                        Strategic Vision 2023-2027
                                    </p>
                                </div>

                            </div>

                            <div class="p-services-paragraph mt-3">
                                <p class="">
                                    As we sail into the future, Bandari DT Sacco has an ambitious journey outlined in our current Strategic Plan for the period 2023-2027. This roadmap serves as our guiding compass, meticulously crafted to propel our operations, growth, and service excellence over the next five years.
                                </p>
                            </div>

                        </div>
                    </div>
                    <div class="w-full justify-self-center md:justify-self-center lg:justify-self-end ">
                        <div class="">
                            <h1 class="why-join text-blue-400">
                                CSR Activities
                            </h1>
                        </div>

                        <div class="mt-3">
                            <div class="">
                                <div class="">
                                    <img class="w-full" src="{{ asset('assets/images/history.webp') }}">
                                </div>
                                <div class="mt-3">
                                    <p class="p-services-paragraph">
                                        Our commitment extends beyond the balance sheets, aiming to transform and uplift the lives of communities around us. Our CSR initiatives include:
                                    </p>
                                </div>
                                <div class="mt-3">

                                    <div class="mt-3">
                                        <p class="n-m-button text-left">Products</p>
                                    </div>

                                </div>

                            </div>

                            <div class="p-services-paragraph mt-3">
                                <p class="">
                                    1. Providing support and assistance to the aged and people living with disabilities (PWDs)
                                </p>
                                <p class="">
                                    2. Offering free form one scholarships to the best performing boy and girl, likewise one pupil from the disadvantaged category.
                                </p>
                                <p class="">
                                    3. Engaging in tree planting initiatives where we contribute to making a better world for the future generations.
                                </p>
                                <p class="">
                                    4. Providing support and emergency relief whenever calamities strike.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="min-h-[300px] pt-5" style="background:url({{ asset('assets/images/services.webp') }});background-size: cover; background-position: center; background-repeat: no-repeat;">
            <div class="grid grid-rows-2 gap-2 max-w-screen-xl mx-auto">
                <div class="">
                    <h1 class="banner-word">
                        Services Charter
                    </h1>
                </div>

                <div class="">
                    <p class="services-paragraph">
                        This is our commitment to continually improve our
                    </p>
                    <p class="services-paragraph">
                        products and services and exceed your expectations.
                    </p>
                </div>
            </div>
        </div>




        <div class=" bg-white pt-10 pb-10">
            <div class="max-w-screen-xl mx-auto">
                <div class="  grid md:grid-cols-2 grid-cols-1 gap-10 ">
                    <div class="w-full justify-self-center md:justify-self-center lg:justify-self-start">

                        <div class="mt-3">
                            <div class="">
                                <div class="">
                                    <img class="w-full" src="{{ asset('assets/images/service-delivery.webp') }}">
                                </div>

                                <div class="mt-3">
                                    <p class="responsibility text-left">
                                        Service Delivery Commitments
                                    </p>
                                </div>

                                <div class="mt-3">
                                    <p class="p-services-paragraph">
                                        <b class="">
                                            We commit ourselves to:
                                        </b>
                                    </p>
                                </div>
                            </div>

                            <div class="p-services-paragraph mt-3 ml-4">
                                <li class="">
                                    Answer your telephone calls within 3 rings

                                <li class="">
                                    Attend to you within ten (10) minutes of your visit </li>
                                <li class="">
                                    Respond to your correspondence within 48 hours
                                </li>
                                <li class="">
                                    Treat your concern with confidentiality and privacy </li>
                                </li>
                            </div>

                        </div>


                        <div class="mt-5 lg:mt-10 md:mt-5">
                            <div class="">
                                <div class="">
                                    <img class="w-full" src="{{ asset('assets/images/responsibility.webp') }}">
                                </div>

                                <div class="mt-3">
                                    <p class="responsibility text-left">
                                        Your Responsibility
                                    </p>
                                </div>

                                <div class="mt-3 md:mt-5">
                                    <p class="p-services-paragraph">
                                        <b class="">
                                            You have a right to:
                                        </b>
                                    </p>
                                </div>
                            </div>

                            <div class="p-services-paragraph mt-3  md:mt-5 ml-4">
                                <li class="">
                                    Treat our staff with courtesy and respect

                                <li class="">
                                    Provide accurate and complete information </li>
                                <li class="">
                                    Exercise honesty and integrity when transacting with us
                                </li>
                                <li class="">
                                    Share with us your feedback </li>
                                </li>
                            </div>

                        </div>

                    </div>
                    <div class="w-full justify-self-center md:justify-self-center lg:justify-self-end ">
                        <div class="mt-3">
                            <div class="">
                                <div class="">
                                    <img class="w-full" src="{{ asset('assets/images/rights.webp') }}">
                                </div>

                                <div class="mt-3">
                                    <p class="responsibility text-left">
                                        Your Rights
                                    </p>
                                </div>

                                <div class="mt-3">
                                    <p class="p-services-paragraph">
                                        <b class="">
                                            To enable us serve you better we expect you to:
                                        </b>
                                    </p>
                                </div>
                            </div>

                            <div class="p-services-paragraph mt-3 ml-4">
                                <li class="">
                                    Enquire or complain when not satisfied with the level of service offered
                                <li class="">
                                    Refer any service-related issues to a higher office
                                </li>
                                <li class="">
                                    Offer suggestions that can enable the SACCO provide better services
                                </li>
                                <li class="">
                                    Courteous and considerate treatment in your transactions with us </li>
                                </li>
                            </div>

                        </div>


                        <div class="mt-5 lg:mt-10 md:mt-5">
                            <div class="">
                                <div class="">
                                    <img class="w-full" src="{{ asset('assets/images/responsibility.webp') }}">
                                </div>

                                <div class="mt-3">
                                    <p class="responsibility text-left">
                                        Complaint Escalation
                                    </p>
                                </div>

                                <div class="mt-3">
                                    <p class="p-services-paragraph">
                                        If you are not satisfied with the outcome of your complaint or how it was handled, you may refer the matter to either of the following:
                                    </p>
                                </div>
                            </div>

                            <div class="p-services-paragraph mt-3">
                                <div class="flex gap-10">
                                    <div class="">
                                        <p class="">
                                            <b class="">
                                                1.Head of Business Development <br>
                                                & Marketing
                                            </b>
                                        </p>
                                        <p class="mt-2">
                                            Bandari Sacco Limited,<br>
                                            PO.BOX 95011-80104, Mombasa <br>
                                            Email: info@bandarisacco.co.ke <br>
                                            Tel. 0724002525/0735336685
                                        </p>
                                    </div>
                                    <div class="">
                                        <p class="">
                                            <b class="">
                                                2.The Chief Executive Officer
                                            </b>
                                        </p>
                                        <p class="mt-5 md:mt-10">
                                            P. O. Box 95011 – 80104, Mombasab <br>
                                            Email: info@bandarisacco.co.ke <br>
                                            Tel. 0724002525/0735336685
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>






        <div class=" bg-slate-100  ">
            <div class="max-w-screen-xl mx-auto   ">
                <div class="grid grid-cols-1 md:grid-cols-2 pt-3 pb-3 gap-10 md:gap-16 ">
                    <div class="">
                        <div class="">
                            <h1 class="why-join text-blue-400">
                                Our Service Standards
                            </h1>
                        </div>
                        <div class="mt-4">
                            <p class="p-services-paragraph">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit quos consequuntur ex reiciendis quis corporis id ea. Ipsa delectus est, quibusdam dolor odit libero enim placeat, nam tempore deserunt animi!
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit quos consequuntur ex reiciendis quis corporis id ea. Ipsa delectus est, quibusdam dolor odit libero enim placeat, nam tempore deserunt animi!
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit quos consequuntur ex reiciendis quis corporis id ea. Ipsa delectus est, quibusdam dolor odit libero enim placeat, nam tempore deserunt animi!
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit quos consequuntur ex reiciendis quis corporis id ea. Ipsa delectus est, quibusdam dolor odit libero enim placeat, nam tempore deserunt animi!

                            </p>
                        </div>


                        <div class="flex gap-6 mt-8  justify-start">
                            <div class="">
                                <button class="text-blue-800 uppercase text-sm font-bold  px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    our products <svg class="w-2.5 h-2.5 ms-3 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </button>
                            </div>
                            <div class="">
                                <button style="" class="text-blue-800 uppercase text-sm font-bold px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    get in touch
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
                                    <p class="text-neutral-600 p-account mt-3 group-open:animate-fadeIn">
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
                                    <p class="text-neutral-600 p-account mt-3 group-open:animate-fadeIn">
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
                                    <p class="text-neutral-600 p-account mt-3 group-open:animate-fadeIn">
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
                                    <p class="text-neutral-600 p-account mt-3 group-open:animate-fadeIn">
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
                                    <p class="text-neutral-600 p-account mt-3 group-open:animate-fadeIn">
                                        You can send both text and media through the WhatsApp API
                                </details>
                            </div>
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
                                    <p class="text-neutral-600 p-account mt-3 group-open:animate-fadeIn">
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
                                        <span id="p-account" class="-ml-3 p-account"> What’s required for
                                            WhatsApp Business
                                            API approval?</span>
                                        <span class="ml-2 transition group-open:rotate-45">
                                            <img class="" src="{{ asset('assets/images/add-fill.webp') }}">

                                        </span>

                                    </summary>
                                    <p class="text-neutral-600 p-account mt-3 group-open:animate-fadeIn">
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
                                        <span class="-ml-3 p-account"> What’s required for
                                            WhatsApp Business
                                            API approval?</span>
                                        <span class="ml-2 transition group-open:rotate-45">
                                            <img class="" src="{{ asset('assets/images/add-fill.webp') }}">

                                        </span>

                                    </summary>
                                    <p class="text-neutral-600 p-account mt-3 group-open:animate-fadeIn">
                                        You require a verified Facebook Business Manager
                                        (https://www.facebook.com/business/help/2058515294227817)
                                        and a phone number
                                        to be used for WhatsApp (a new number is preferred as
                                        previous conversations
                                        will be automatically deleted after integration)

                                    </p>
                                </details>
                            </div>
                            <div class="flex gap-6 justify-center  mt-4">
                                <button class="text-blue-800 uppercase text-sm font-bold  px-5 py-2.5 text-center inline-flex items-center" type="button">
                                    show more
                                    <svg class="ml-2" xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14" fill="none">
                                        <path d="M12.3223 4.6665L8.0964 8.89243C7.59733 9.3915 6.78066 9.3915 6.28159 8.89243L2.05566 4.6665" stroke="#005AA9" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

















        @show
</x-app-layout>

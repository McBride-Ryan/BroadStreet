@extends('layouts.app')
@section('content')
    <div class="flex justify-center">
        <div class="w-11/12 bg-white p-6 rounded-lg">
            {{-- hero image --}}
            {{-- Create a component that takes the featured article --}}
            <div class="flex justify-center">
                <img class="object-center" src="https://sixerswire.usatoday.com/wp-content/uploads/sites/30/2022/04/Joel-Embiid-78.jpg?w=1000&h=600&crop=1" alt="cover story">
            </div>
            <h2 class="flex justify-center text-5xl m-4">Joel Embiid Proves to be the League's MVP</h2>
            <div class="px-8 bg-slate-600">
                <p class="px-9">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum accusamus architecto sunt qui quas sequi, numquam facilis, quisquam, ad quam quod eaque! Quas placeat quod sapiente corporis temporibus ipsa sunt.</p>
            </div>
        </div>
    </div>
    {{-- <div class="grid mx-9 my-6">
        <div class="grid grid-rows-1 grid-flow-col gap-4 justify-center">
            <div class="bg-red-500">
                <h2>TITLE OF THE ARTICLE</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam unde similique deleniti ratione perspiciatis accusantium nam dicta officiis voluptatibus molestias.</p>
            </div>
            <div class="bg-blue-500">
                <h2>TITLE OF THE ARTICLE</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam unde similique deleniti ratione perspiciatis accusantium nam dicta officiis voluptatibus molestias.</p>
            </div>
            <div class="bg-gray-500">
                <h2>TITLE OF THE ARTICLE</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam unde similique deleniti ratione perspiciatis accusantium nam dicta officiis voluptatibus molestias.</p>
            </div>
        </div>
    </div> --}}
    <div class="min-h-screen w-full flex flex-col space-y-6 items-center pb-10">
        <div class="w-full bg-white px-6">
            <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-y-16 gap-x-4 lg:gap-10 my-10">
                {{-- first article --}}
                <div wire:id="ZSl0N2HmR7tVwxS1o3MK" class="flex flex-col text-center bg-white rounded-lg shadow-2xl h-full">
                    <div class="flex flex-col rounded-t overflow-hidden relative">
                        <div class="absolute right-0 mt-6 bg-white shadow-2xl text-primary rounded-tl-2xl rounded-bl-2xl text-sm p-2.5 border-2 border-primary border-r-0 uppercase leading-4 font-bold z-30">
                            Phillies
                        </div>
                        <a href="https://leadmarvels.com/resource/leadmarvels-how-to-boost-your-lead-gen-roi-the-3-principles-of-a-successful-lead-nurturing-campaign" class="overflow-hidden">
                            <img  class="w-full h-64 object-cover mx-auto bg-black hover:scale-110 transform transition duration-300" src="https://www.si.com/.image/c_limit%2Ccs_srgb%2Cq_auto:good%2Cw_1400/MTg5MDMyMTYxOTQ3NDI4MzA4/phillieskyleschwarberargueumpire.webp" alt="alt">
                        </a>
                    </div>
                    <div class="flex-1 flex flex-col p-4 mb-2 text-left">
                        <a href="https://leadmarvels.com/resource/leadmarvels-how-to-boost-your-lead-gen-roi-the-3-principles-of-a-successful-lead-nurturing-campaign"><h3 class="text-xl leading-tight font-medium font-body text-cards-resourceLink hover:text-cards-resourceLinkHover transition duration-300">Kyle Schwarber Has Epic Meltdown Over Horrible Strike Zone in Phillies-Brewers Game</h3></a>
                
                        <span class="text-sm mt-4 text-gray-600 leading-5 font-light">
                            Oft-criticized umpire Angel Hernandez was having a bad night calling balls and Philadelphia Phillies designated hitter Kyle Schwarber went on an epic rant and was, of course, ejected.
                        </span>
                    </div>
                    <div class="border-t-2 border-gray-200">
                        <div class="-mt-px flex">
                            <div class="w-0 flex-1 flex border-gray-200 rounded-br-lg rounded-bl-lg text-white bg-primary  hover:bg-cards-buttonHover focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition-all ease-in-out duration-300 focus:z-10">
                                <a href="https://leadmarvels.com/resource/leadmarvels-how-to-boost-your-lead-gen-roi-the-3-principles-of-a-successful-lead-nurturing-campaign" class="relative flex-1 inline-flex items-center py-4 text-sm leading-5 bg-red-700 font-bold  transition-all ease-in-out duration-300 pr-3">
                                    <span class="ml-auto">Read More</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 ml-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- second article --}}
                <div wire:id="ZSl0N2HmR7tVwxS1o3MK" class="flex flex-col text-center bg-white rounded-lg shadow-2xl h-full">
                    <div class="flex flex-col rounded-t overflow-hidden relative">
                        <div class="absolute right-0 mt-6 bg-white shadow-2xl text-primary rounded-tl-2xl rounded-bl-2xl text-sm p-2.5 border-2 border-primary border-r-0 uppercase leading-4 font-bold z-30">
                            Eagles
                        </div>
                        <a href="https://leadmarvels.com/resource/leadmarvels-how-to-boost-your-lead-gen-roi-the-3-principles-of-a-successful-lead-nurturing-campaign" class="overflow-hidden" :class="{ hidden: hideImages }">
                            <img foo__="" class="w-full h-64 object-cover mx-auto bg-black hover:scale-110 transform transition duration-300" src="https://cdn.vox-cdn.com/thumbor/qXgWXmKR0vTuUPRfNTXXXnZd4bA=/0x0:3856x2808/1820x1213/filters:focal(2342x714:2958x1330):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/70781909/1351767294.0.jpg" alt="How to Boost Your Lead Gen ROI:  The 3 Principles of a Successful Lead Nurturing Campaign">
                        </a>
                    </div>
                    <div class="flex-1 flex flex-col p-4 mb-2 text-left">
                        <a href="https://leadmarvels.com/resource/leadmarvels-how-to-boost-your-lead-gen-roi-the-3-principles-of-a-successful-lead-nurturing-campaign"><h3 class="text-xl leading-tight font-medium font-body text-cards-resourceLink hover:text-cards-resourceLinkHover transition duration-300">Eagles reportedly hosted Alabama linebacker on pre-draft visit
                        </h3></a>
                
                        <span class="text-sm mt-4 text-gray-600 leading-5 font-light">
                            Philly is indeed doing their homework on some LB prospects.


                        </span>
                    </div>
                    <div class="border-t-2 border-gray-200">
                        <div class="-mt-px flex">
                            <div class="w-0 flex-1 flex border-gray-200 rounded-br-lg rounded-bl-lg text-white bg-primary  hover:bg-cards-buttonHover focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition-all ease-in-out duration-300 focus:z-10">
                                <a href="https://leadmarvels.com/resource/leadmarvels-how-to-boost-your-lead-gen-roi-the-3-principles-of-a-successful-lead-nurturing-campaign" class="relative flex-1 inline-flex items-center py-4 text-sm leading-5 bg-green-700 font-bold  transition-all ease-in-out duration-300 pr-3">
                                    <span class="ml-auto">Read More</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 ml-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- third article --}}

                <div wire:id="ZSl0N2HmR7tVwxS1o3MK" class="flex flex-col text-center bg-white rounded-lg shadow-2xl h-full">
                    <div class="flex flex-col rounded-t overflow-hidden relative">
                        <div class="absolute right-0 mt-6 bg-white shadow-2xl text-primary rounded-tl-2xl rounded-bl-2xl text-sm p-2.5 border-2 border-primary border-r-0 uppercase leading-4 font-bold z-30">
                            Sixers
                        </div>
                        <a href="https://leadmarvels.com/resource/leadmarvels-how-to-boost-your-lead-gen-roi-the-3-principles-of-a-successful-lead-nurturing-campaign" class="overflow-hidden" :class="{ hidden: hideImages }">
                            <img foo__="" class="w-full h-64 object-cover mx-auto bg-black hover:scale-110 transform transition duration-300" src="https://media.phillyvoice.com/media/images/HardenHands_niha8vH.2e16d0ba.fill-735x490.jpg" alt="How to Boost Your Lead Gen ROI:  The 3 Principles of a Successful Lead Nurturing Campaign">
                        </a>
                    </div>
                    <div class="flex-1 flex flex-col p-4 mb-2 text-left">
                        <a href="https://leadmarvels.com/resource/leadmarvels-how-to-boost-your-lead-gen-roi-the-3-principles-of-a-successful-lead-nurturing-campaign"><h3 class="text-xl leading-tight font-medium font-body text-cards-resourceLink hover:text-cards-resourceLinkHover transition duration-300">Instant observations: Sixers lay an egg in Game 4 loss to Raptors</h3></a>
                
                        <span class="text-sm mt-4 text-gray-600 leading-5 font-light">
                            The Sixers collectively failed to show up in a Game 4 loss to Toronto, with the Raptors keeping the series alive in a 110-102 loss for Philadelphia. 
                        </span>
                    </div>
                    <div class="border-t-2 border-gray-200">
                        <div class="-mt-px flex">
                            <div class="w-0 flex-1 flex border-gray-200 rounded-br-lg rounded-bl-lg text-white bg-primary  hover:bg-cards-buttonHover focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition-all ease-in-out duration-300 focus:z-10">
                                <a href="https://leadmarvels.com/resource/leadmarvels-how-to-boost-your-lead-gen-roi-the-3-principles-of-a-successful-lead-nurturing-campaign" class="relative flex-1 inline-flex items-center py-4 text-sm leading-5 bg-blue-700 font-bold  transition-all ease-in-out duration-300 pr-3">
                                    <span class="ml-auto">Read More</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 ml-1">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

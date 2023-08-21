@extends('layouts.main')

@section('content')
    <!-- Header -->
    <header>
        <img class="w3-image" src="https://wallpapers.com/images/featured/pub-sg3h2yg86plufux1.jpg" alt="Architecture"
            width="2000" height="800">
        <div class="w3-display-middle w3-margin-top w3-center">
            <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>KU</b></span> <span
                    class="w3-hide-small w3-text-light-grey">Events</span></h1>
        </div>
    </header>

    <!-- Page content -->
    <p class="text-teal-300 text-center text-4xl mt-8 mb-3 " id="all-events">ALL Events</p>
    <div class="border-b-2 border-b-teal-300 w-full mb-10"></div>
    <div class="flex items-center justify-center">

        @if (Auth::check())
        <a href="{{ route('create-event') }}"
            class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-xl font-medium text-white rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
            <span
                class="relative p-5 transition-all ease-in duration-75 bg-gray-900 dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                Create Events
            </span>
        </a>
        @endif

    </div>

    <div class="grid grid-cols-3 gap-20 ml-14 mt-10">
        @php
        {{
            $eventCount = 0;
        }}
        @endphp
        @if($events === null)

        @else
        @foreach($events as $event)
            @if(Auth::user() === null
                || (
                    Auth::user()->role === 'STUDENT'
                        && (
                            $event->status === 'REJECTED' || $event->status === 'PENDING'
                        ) && !$event->isManager(Auth::user()->id)
                    )
                )
                @continue
            @endif

            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                <div class="flex items-center justify-center">
                    <a href="{{ route('show-event', ['event' => $event]) }}">
                        <img class="rounded-t-lg h-72 min-h-full max-h-72 "
                        src="{{ asset('image/event-image-2.jpeg')}}"
                        alt="event-image" />
                    </a>
                </div>
                <div class="border-b-2 border-b-teal-500 w-full"></div>
                <div class="p-5">
                    <a href="{{ route('show-event', ['event' => $event]) }}">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $event->event_name }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $event->description }}</p>
                    <div class="flex mt-5 mb-3">
                        <h3 class="front-bold text-base text-red-500">Date:</h3>
                        <p class="pl-2 text-sm text-red-500 mt-1">{{ $event->date }}</p>
                    </div>
                    <a href="{{ route('show-event', ['event' => $event]) }}"
                        class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
            @php
            {{
                $eventCount++;
            }}
            @endphp
        @endforeach

            @if($eventCount == 0)
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
                <div class="flex items-center justify-center">
                    <a href="#">
                        <img class="rounded-t-lg h-72 min-h-full max-h-72 "
                        src="{{ asset('image/event-image-3.jpeg')}}"
                        alt="event-image" />
                    </a>
                </div>
                <div class="border-b-2 border-b-teal-500 w-full"></div>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">No Events </h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">No Event T_T</p>
                    <div class="flex mt-5 mb-3">
                        <h3 class="front-bold text-base text-red-500">Date:</h3>
                        <p class="pl-2 text-sm text-red-500 mt-1">-----</p>
                    </div>
                </div>
            </div>
            @endif
        @endif

    </div>


    <!-- About Section -->
    <div class="w3-container w3-padding-16 text-white" id="about" align="center">
        <div class="w3-padding-16 border-b-2 border-b-teal-300 w-full mt-10"></div>
        <h3 class="w3-padding-16">Group : Nak-Muay</h3>
        <p>info...</p>
        <h1 class="w3-padding-16">Member</h1>
    </div>

    <div class="w3-row-padding w3-grayscale w3-border-bottom text-white" align="center">
        <div class="w3-col l4 m6 w3-margin-bottom">
            <img src="{{ asset('image/au.jpg') }}" alt="Au" style="width: 400px">
            <h2>Chanawut Wuttinun</h2>
            <h3 class="w3-opacity">6410450800</h3>
            <p class="w3-padding-16">info..</p>
        </div>
        <div class="w3-col l4 m6 w3-margin-bottom">
            <img src="{{ asset('image/ton.jpg') }}" alt="Ton" style="width: 400px">
            <h2>Nawapon</h2>
            <h3 class="w3-opacity">6410450893</h3>
            <p class="w3-padding-16">info..</p>
        </div>
        <div class="w3-col l4 m6 w3-margin-bottom">
            <img src="{{ asset('image/nai.jpg') }}" alt="Nai" style="width: 400px"></img>
            <h2>Potsawat Thinkanwatthana</h2>
            <h3 class="w3-opacity">6410451199</h3>
            <p class="w3-padding-16">info..</p>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="w3-container w3-padding-32" id="contact">
        <h1 class="w3-border-light-grey w3-text-white w3-center">Contact</h1>
        <h1 class="w3-border-light-grey w3-text-white w3-center">For sent a message</h1>
        <h1 class="w3-border-bottom w3-text-white w3-padding-16 w3-center">
            <a href="https://www.facebook.com/comsci.ku">www.facebook/comsci.ku<a>
        </h1>
    </div>

    <!-- Image of location/map -->
    <div class="w3-container">
        <img src="https://images.pexels.com/photos/1820770/pexels-photo-1820770.jpeg?cs=srgb&dl=pexels-aleksandar-pasaric-1820770.jpg&fm=jpg"
            class="w3-image" style="width:100%">
    </div>

    <!-- End page content -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    </div>
@endsection

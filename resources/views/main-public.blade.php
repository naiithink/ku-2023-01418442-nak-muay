<!DOCTYPE html>
<html>
<head>
<title>KU Events</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/theme.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900">

<!-- Navbar (sit on top) -->
{{--<div class="w3-top">--}}
{{--  <div class="w3-bar mint-b w3-wide w3-padding w3-card">--}}
{{--    <a href="{{ route('main-public') }} " class="w3-bar-item w3-button"><b>KU</b> Events</a>--}}
{{--    <!-- Float links to the right. Hide them on small screens -->--}}
{{--    <div class="w3-right w3-hide-small">--}}
{{--      <a href="{{ route('how-to-use') }}" class="w3-bar-item w3-button">How To Use</a>--}}
{{--      <a href="{{ route('login') }}" class="w3-bar-item w3-button">Log In</a>--}}
{{--      <a href="{{ route('signup') }}" class="w3-bar-item w3-button">Sign Up</a>--}}
{{--    </div>--}}
{{--  </div>--}}
{{--</div>--}}

<!-- Navbar (sit on top) -->
    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{route('main-public')}}" class="flex items-center">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">KU Events</span>
            </a>
            <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
                <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
    {{--                <li>--}}
    {{--                    <a href="{{route('main-public')}}" class="block  mt-1.5 py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>--}}
    {{--                </li>--}}
                    <li>
                        <a href=" {{route('how-to-use')}}" class="block mt-1.5 py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">How To Use </a>
                    </li>
                    <li>
                        <a href="{{route('login')}}" class="block py-2 mt-1.5 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Log In </a>
                    </li>
                    <li>
                        <a href= {{route('signup')}}>
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign Up</button>
                        </a>
    {{--                    <a href="{{route('signup')}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sign Up</a>--}}
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<!-- Header -->
<header>
  <img class="w3-image" src="https://wallpapers.com/images/featured/pub-sg3h2yg86plufux1.jpg" alt="Architecture" width="2000" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>KU</b></span> <span class="w3-hide-small w3-text-light-grey">Events</span></h1>
  </div>

{{--    <div id="default-carousel" class="relative w-full" data-carousel="slide">--}}
{{--        <!-- Carousel wrapper -->--}}
{{--        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">--}}
{{--            <!-- Item 1 -->--}}
{{--            <div class="hidden duration-700 ease-in-out" data-carousel-item>--}}
{{--                <img src="{{asset('image/img-1.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">--}}
{{--            </div>--}}
{{--            <!-- Item 2 -->--}}
{{--            <div class="hidden duration-700 ease-in-out" data-carousel-item>--}}
{{--                <img src="{{asset('image/img-1.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">--}}
{{--            </div>--}}
{{--            <!-- Item 3 -->--}}
{{--            <div class="hidden duration-700 ease-in-out" data-carousel-item>--}}
{{--                <img src="{{asset('image/img-1.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">--}}
{{--            </div>--}}
{{--            <!-- Item 4 -->--}}
{{--            <div class="hidden duration-700 ease-in-out" data-carousel-item>--}}
{{--                <img src="{{asset('image/img-1.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">--}}
{{--            </div>--}}
{{--            <!-- Item 5 -->--}}
{{--            <div class="hidden duration-700 ease-in-out" data-carousel-item>--}}
{{--                <img src="{{asset('image/img-1.jpg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- Slider indicators -->--}}
{{--        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">--}}
{{--            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>--}}
{{--            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>--}}
{{--            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>--}}
{{--            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>--}}
{{--            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>--}}
{{--        </div>--}}
{{--        <!-- Slider controls -->--}}
{{--        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>--}}
{{--        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">--}}
{{--            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">--}}
{{--                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>--}}
{{--            </svg>--}}
{{--            <span class="sr-only">Previous</span>--}}
{{--        </span>--}}
{{--        </button>--}}
{{--        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>--}}
{{--        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">--}}
{{--            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">--}}
{{--                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>--}}
{{--            </svg>--}}
{{--            <span class="sr-only">Next</span>--}}
{{--        </span>--}}
{{--        </button>--}}
{{--    </div>--}}



</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
{{--  <div class="w3-container w3-padding-32" id="projects" align="center" >--}}
{{--    <h1 class="w3-border-bottom w3-border-light-grey w3-padding-16">Events</h1>--}}
{{--  </div>--}}

{{--  <div class="w3-row-padding">--}}
{{--    <div class="w3-col l3 m6 w3-margin-bottom">--}}
{{--      <div class="w3-display-container">--}}
{{--        <div class="w3-display-topleft w3-black w3-padding">Lenyai</div>--}}
{{--        <a href="{{ route('student-events') }}">--}}
{{--          <img src="https://jandevents.com/wp-content/uploads/jand-party.jpg" alt="House" width="350px" height="250px">--}}
{{--        </a>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--    <div class="w3-col l3 m6 w3-margin-bottom">--}}
{{--      <div class="w3-display-container">--}}
{{--        <div class="w3-display-topleft w3-black w3-padding">Ban Puen</div>--}}
{{--        <a href="{{ route('student-events') }}">--}}
{{--          <img src="https://storage.zcanme.com/img/68-event-img2-1609129350.png" alt="House" width="350px" height="250px">--}}
{{--        </a>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--    <div class="w3-col l3 m6 w3-margin-bottom">--}}
{{--      <div class="w3-display-container">--}}
{{--        <div class="w3-display-topleft w3-black w3-padding">Blur</div>--}}
{{--        <a href="{{ route('student-events') }}">--}}
{{--          <img src="https://storage.zcanme.com/img/68-event-img2-1609129350.png" alt="House" width="350px" height="250px">--}}
{{--        </a>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--    <div class="w3-col l3 m6 w3-margin-bottom">--}}
{{--      <div class="w3-display-container">--}}
{{--        <div class="w3-display-topleft w3-black w3-padding">Zync</div>--}}
{{--        <a href="{{ route('student-events') }}">--}}
{{--          <img src="https://siam2nite.media/ljfMqgpivLqGlsmSXLIPrIIrOJk=/1280x960/smart/locations/2177/cover_large_p1dp265ru9f0p1gjc7k6ah31e0p9.jpg" alt="House" width="350px" height="250px">--}}
{{--        </a>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}

{{--  <div class="w3-row-padding">--}}
{{--    <div class="w3-col l3 m6 w3-margin-bottom">--}}
{{--      <div class="w3-display-container">--}}
{{--        <div class="w3-display-topleft w3-black w3-padding">Ban Puen</div>--}}
{{--        <a href="{{ route('student-events') }}"></a>--}}
{{--          <img src="https://www.plutoticket.com/cdn-cgi/image/width=440,format=auto/https://storage.plutoticket.com/protected/ap-southeast-1:6dd2cf57-fbf3-4022-94ea-1c1f2be67cce/events/012e96f5-edfd-4e1d-b45c-6d5e0579c335/images/0_1687520681484.jpeg" alt="House" width="350px" height="250px">--}}
{{--        </a>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--    <div class="w3-col l3 m6 w3-margin-bottom">--}}
{{--      <div class="w3-display-container">--}}
{{--        <div class="w3-display-topleft w3-black w3-padding">Heaven</div>--}}
{{--        <a href="{{ route('student-events') }}">--}}
{{--          <img src="https://obs.line-scdn.net/r/ect/ect/image_16837381851540788156c6a1708t1197f539" alt="House" width="350px" height="250px">--}}
{{--        </a>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--    <div class="w3-col l3 m6 w3-margin-bottom">--}}
{{--      <div class="w3-display-container">--}}
{{--        <div class="w3-display-topleft w3-black w3-padding">Zync</div>--}}
{{--        <a href="{{ route('student-events') }}">--}}
{{--          <img src="https://obs.line-scdn.net/r/ect/ect/image_16837381851540788156c6a1708t1197f539" alt="House" width="350px" height="250px">--}}
{{--        </a>>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--    <div class="w3-col l3 m6 w3-margin-bottom">--}}
{{--      <div class="w3-display-container">--}}
{{--        <div class="w3-display-topleft w3-black w3-padding">Blur</div>--}}
{{--        <a href="{{ route('student-events') }}">--}}
{{--          <img src="https://www.vl.co.th/uploads/portfolio/02-1-2023-05-09portfolio143940.jpg" alt="House" width="350px" height="250px">--}}
{{--        </a>--}}
{{--      </div>--}}
{{--    </div>--}}
{{--  </div>--}}


{{--        <div class="relative overflow-x-auto shadow-md  mt-32 mb-32 ">--}}
{{--            <p class="text-white text-center mb-6 text-3xl ">All Events</p>--}}
{{--            <table class="w-5/6 text-sm text-left text-gray-500 dark:text-gray-400 mx-auto ">--}}
{{--                <thead class="text-xs text-gray-700 uppercase bg-pink-200 dark:bg-gray-700 dark:text-gray-400  ">--}}
{{--                <tr>--}}
{{--                    <th scope="col" class="px-6 py-3">--}}
{{--                        Events name--}}
{{--                    </th>--}}
{{--                    <th scope="col" class="px-6 py-3">--}}
{{--                        <div class="flex items-center">--}}
{{--                            Color--}}
{{--                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">--}}
{{--                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>--}}
{{--                                </svg></a>--}}
{{--                        </div>--}}
{{--                    </th>--}}
{{--                    <th scope="col" class="px-6 py-3">--}}
{{--                        <div class="flex items-center">--}}
{{--                            Category--}}
{{--                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">--}}
{{--                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>--}}
{{--                                </svg></a>--}}
{{--                        </div>--}}
{{--                    </th>--}}
{{--                    <th scope="col" class="px-6 py-3">--}}
{{--                        <div class="flex items-center">--}}
{{--                            Price--}}
{{--                            <a href="#"><svg class="w-3 h-3 ml-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">--}}
{{--                                    <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>--}}
{{--                                </svg></a>--}}
{{--                        </div>--}}
{{--                    </th>--}}
{{--                    <th scope="col" class="px-6 py-3">--}}
{{--                        <span class="sr-only">Edit</span>--}}
{{--                    </th>--}}
{{--                </tr>--}}
{{--                </thead>--}}
{{--                <tbody>--}}
{{--                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">--}}
{{--                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">--}}
{{--                        Apple MacBook Pro 17"--}}
{{--                    </th>--}}
{{--                    <td class="px-6 py-4">--}}
{{--                        Silver--}}
{{--                    </td>--}}
{{--                    <td class="px-6 py-4">--}}
{{--                        Laptop--}}
{{--                    </td>--}}
{{--                    <td class="px-6 py-4">--}}
{{--                        $2999--}}
{{--                    </td>--}}
{{--                    <td class="px-6 py-4 text-right">--}}
{{--                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">More Info-></a>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">--}}
{{--                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">--}}
{{--                        Microsoft Surface Pro--}}
{{--                    </th>--}}
{{--                    <td class="px-6 py-4">--}}
{{--                        White--}}
{{--                    </td>--}}
{{--                    <td class="px-6 py-4">--}}
{{--                        Laptop PC--}}
{{--                    </td>--}}
{{--                    <td class="px-6 py-4">--}}
{{--                        $1999--}}
{{--                    </td>--}}
{{--                    <td class="px-6 py-4 text-right">--}}
{{--                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">More Info-></a>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                <tr class="bg-white dark:bg-gray-800">--}}
{{--                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">--}}
{{--                        Magic Mouse 2--}}
{{--                    </th>--}}
{{--                    <td class="px-6 py-4">--}}
{{--                        Black--}}
{{--                    </td>--}}
{{--                    <td class="px-6 py-4">--}}
{{--                        Accessories--}}
{{--                    </td>--}}
{{--                    <td class="px-6 py-4">--}}
{{--                        $99--}}
{{--                    </td>--}}
{{--                    <td class="px-6 py-4 text-right">--}}
{{--                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">More Info-></a>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--                </tbody>--}}
{{--            </table>--}}
{{--        </div>--}}

    <p class="text-white text-center text-3xl my-10">All Events</p>
    <div class="border-b-2 border-b-teal-300 w-full"></div>
    <div class="grid grid-cols-3 gap-20 ml-14 mt-10">
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-70 ">
            <div class="flex items-center justify-center">
            <a href="#">
                <img class="rounded-t-lg max-h-72 " src="{{asset('image/img-1.jpg')}}" alt="" />
            </a>
            </div>
            <div class="border-b-2 border-b-teal-500 w-full mt-1"></div>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
            <div class="flex items-center justify-center">
            <a href="#">
                <img class="rounded-t-lg max-h-72 " src="{{asset('image/au.jpg')}}" alt="" />
            </a>
            </div>
            <div class="border-b-2 border-b-teal-500 w-full mt-1"></div>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center justify-center">
            <a href="#">
                <img class="rounded-t-lg  max-h-72" src="{{asset('image/ton.jpg')}}" alt="" />
            </a>
            </div>
            <div class="border-b-2 border-b-teal-500 w-full mt-1"></div>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center justify-center">
            <a href="#">
                <img class="rounded-t-lg max-h-72" src="https://www.vl.co.th/uploads/portfolio/02-1-2023-05-09portfolio143940.jpg" alt="" />
            </a>
            </div>
            <div class="border-b-2 border-b-teal-500 w-full mt-1"></div>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center justify-center">
            <a href="#">
                <img class="rounded-t-lg max-h-72" src="https://obs.line-scdn.net/r/ect/ect/image_16837381851540788156c6a1708t1197f539" alt="" />
            </a>
            </div>
            <div class="border-b-2 border-b-teal-500 w-full mt-1"></div>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center justify-center">
            <a href="#">
                <img class="rounded-t-lg max-h-72" src="{{asset('image/ton.jpg')}}" alt="" />
            </a>
            </div>
            <div class="border-b-2 border-b-teal-500 w-full mt-1"></div>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology acquisitions 2021</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
                <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>

    </div>


    <!-- About Section -->
      <div class="w3-container w3-padding-3 text-white" id="about" align="center">
          <div class="border-b-2 border-b-teal-300 w-full mt-10"></div>
        <h3>Group : Nak-Muay</h3>
        <p>info...</p>
        <h1>Member</h1>
      </div>

      <div class="w3-row-padding w3-grayscale text-white" align="center">
        <div class="w3-col l4 m6 w3-margin-bottom">
          <img src="{{ asset('image/au.jpg') }}" alt="Au" style="width: 400px">
          <h2>Chanawut Wuttinun</h2>
          <h3 class="w3-opacity">6410450800</h3>
          <p>info..</p>
        </div>
        <div class="w3-col l4 m6 w3-margin-bottom">
          <img src="{{ asset('image/ton.jpg') }}" alt="Ton" style="width: 400px">
          <h2>Nawapon</h2>
          <h3 class="w3-opacity">6410450893</h3>
          <p>info..</p>
        </div>
        <div class="w3-col l4 m6 w3-margin-bottom">
          <img src="{{ asset('image/nai.jpg') }}" alt="Nai" style="width: 400px">
          <h2>Potsawat Thinkanwatthana</h2>
          <h3 class="w3-opacity">6410451199</h3>
          <p>info..</p>
        </div>

      <!-- Contact Section -->
      <div class="w3-container w3-padding-32" id="contact">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
        <p>Lets get in touch and talk about your next project.</p>
        <form action="/action_page.php" target="_blank">
          <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
          <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
          <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
          <button class="w3-button w3-black w3-section" type="submit">
            <i class="fa fa-paper-plane"></i> SEND MESSAGE
          </button>
        </form>
      </div>

<!-- Image of location/map -->
    <div class="w3-container">
      <img src="https://images.pexels.com/photos/1820770/pexels-photo-1820770.jpeg?cs=srgb&dl=pexels-aleksandar-pasaric-1820770.jpg&fm=jpg" class="w3-image" style="width:100%">
    </div>

<!-- End page content -->

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p><a>KU EVENTS</a></p>
</footer>

</body>
</html>

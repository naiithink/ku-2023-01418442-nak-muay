<!DOCTYPE html>
<html>
<head>
<title>KU Events</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/theme.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 font-mono">

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

    <p class="text-teal-300 text-center text-4xl mt-10 mb-3">ALL Events</p>
    <div class="border-b-2 border-b-teal-300 w-full"></div>
    <div class="grid grid-cols-3 gap-20 ml-14 mt-10">


        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 ">
            <div class="flex items-center justify-center">
            <a href="#">
                <img class="rounded-t-lg h-72 min-h-full max-h-72 " src="data:image/jpeg;base64,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" alt="" />
            </a>
            </div>
            <div class="border-b-2 border-b-teal-500 w-full mt-1"></div>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mountain</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Go Mountain with me Free Breakfast</p>
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
                    <img class="rounded-t-lg h-72 min-h-full  max-h-72" src="https://img.freepik.com/free-vector/hand-drawn-summer-beach-landscape_23-2149113090.jpg" alt="" />
                </a>
            </div>
            <div class="border-b-2 border-b-teal-500 w-full mt-1"></div>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Beach</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Beach not Buzz.</p>
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
                <img class="rounded-t-lg h-72 min-h-full  max-h-72" src="https://static.vecteezy.com/system/resources/thumbnails/002/203/421/small/realistic-full-moon-and-stars-background-planet-with-craters-in-the-universe-illustration-vector.jpg" alt="" />
            </a>
            </div>
            <div class="border-b-2 border-b-teal-500 w-full mt-1"></div>
            <div class="p-5">
                <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Moon</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Fly me to the Moon</p>
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
                <img class="rounded-t-lg h-72 min-h-full max-h-72 " src="https://www.vl.co.th/uploads/portfolio/02-1-2023-05-09portfolio143940.jpg" alt="" />
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
                <img class="rounded-t-lg h-72 min-h-full max-h-72" src="https://obs.line-scdn.net/r/ect/ect/image_16837381851540788156c6a1708t1197f539" alt="" />
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
                <img class="rounded-t-lg h-72 min-h-full max-h-72" src="{{asset('image/ton.jpg')}}" alt="" />
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
            <img src="{{ asset('image/nai.jpg') }}" alt="Nai" style="width: 400px"></img>
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

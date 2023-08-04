<!DOCTYPE html>
<html>
<head>
<title>KU Events</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/theme.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="w3-yellow-p"></div>

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
        <a href="#" class="flex items-center">
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
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">How To Use </a>
                </li>
                <li>
                    <a href="#" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Log In </a>
                </li>
                <li>
                    <a href="{{route('signup')}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:2000px;" id="home" align="center">
  <img class="w3-image" src="https://wallpapers.com/images/featured/pub-sg3h2yg86plufux1.jpg" alt="Architecture" width="2000" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>KU</b></span> <span class="w3-hide-small w3-text-light-grey">Events</span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects" align="center" >
    <h1 class="w3-border-bottom w3-border-light-grey w3-padding-16">Events</h1>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Lenyai</div>
        <a href="{{ route('student-events') }}">
          <img src="https://jandevents.com/wp-content/uploads/jand-party.jpg" alt="House" width="350px" height="250px">
        </a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Ban Puen</div>
        <a href="{{ route('student-events') }}">
          <img src="https://storage.zcanme.com/img/68-event-img2-1609129350.png" alt="House" width="350px" height="250px">
        </a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Blur</div>
        <a href="{{ route('student-events') }}">
          <img src="https://storage.zcanme.com/img/68-event-img2-1609129350.png" alt="House" width="350px" height="250px">
        </a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Zync</div>
        <a href="{{ route('student-events') }}">
          <img src="https://siam2nite.media/ljfMqgpivLqGlsmSXLIPrIIrOJk=/1280x960/smart/locations/2177/cover_large_p1dp265ru9f0p1gjc7k6ah31e0p9.jpg" alt="House" width="350px" height="250px">
        </a>
      </div>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Ban Puen</div>
        <a href="{{ route('student-events') }}"></a>
          <img src="https://www.plutoticket.com/cdn-cgi/image/width=440,format=auto/https://storage.plutoticket.com/protected/ap-southeast-1:6dd2cf57-fbf3-4022-94ea-1c1f2be67cce/events/012e96f5-edfd-4e1d-b45c-6d5e0579c335/images/0_1687520681484.jpeg" alt="House" width="350px" height="250px">
        </a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Heaven</div>
        <a href="{{ route('student-events') }}">
          <img src="https://obs.line-scdn.net/r/ect/ect/image_16837381851540788156c6a1708t1197f539" alt="House" width="350px" height="250px">
        </a>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Zync</div>
        <a href="{{ route('student-events') }}">
          <img src="https://obs.line-scdn.net/r/ect/ect/image_16837381851540788156c6a1708t1197f539" alt="House" width="350px" height="250px">
        </a>>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Blur</div>
        <a href="{{ route('student-events') }}">
          <img src="https://www.vl.co.th/uploads/portfolio/02-1-2023-05-09portfolio143940.jpg" alt="House" width="350px" height="250px">
        </a>
      </div>
    </div>
  </div>

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about" align="center">
    <h1 class="w3-border-bottom w3-border-light-grey w3-padding-16">About</h1>
    <h3>Group : Nak-Muay</h3>
    <p>info...</p>
    <h1>Member</h1>
  </div>

  <div class="w3-row-padding w3-grayscale" align="center">
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
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-16">
  <p><a>KU EVENTS</a></p>
</footer>

</body>
</html>

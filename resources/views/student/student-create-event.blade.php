<!DOCTYPE html>
<html>
<head>
<title>KU Events</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/theme.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<style>
    body,h1,li,a {font-family: "Montserrat", sans-serif}
</style>
</head>

<body class="bg-gray-900 font-mono">
<div class="w3-yellow-p"></div>

<!-- Navbar (sit on top) -->
<!-- Navbar (sit on top) -->
<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b  dark:border-gray-600">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{route('main-logged-in')}}" class="flex items-center">
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
                    <a href="{{route('student-events')}}" class="block py-2 mt-1.5  pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Event</a>
                </li>
                <li>
                    <a href="{{ route('student-create-event') }}" class="block py-2 mt-1.5  pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Create </a>
                </li>
                <li>
                    <a href="{{ route('student-profile') }}" class="block py-2 mt-1.5  pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Account </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" class="block py-2 mt-1.5  pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Log Out </a>
                </li>
                <li>
            </ul>
        </div>
    </div>
</nav>

<div align="center">
  <h1> - </h1>
  <h1> - </h1>
  <h1> - </h1>
  <h1> - </h1>
  <h1> - </h1>
  <h1>Create Event</h1>
  <h3>info...</h3>
  <a href="{{ route('main-logged-in') }}">
    <p><button class="w3-button w3-light-grey w3-block" style="width:200px">SUBMIT</button></p>
  </a>
</div>

</body>

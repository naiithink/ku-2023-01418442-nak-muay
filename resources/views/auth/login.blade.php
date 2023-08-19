{{--

<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
--}}

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

<body>
{{--    <div class="w3-yellow-p"></div>--}}

{{--    <!-- Navbar (sit on top) -->--}}
{{--    <div class="w3-top">--}}
{{--        <div class="w3-bar mint-b w3-wide w3-padding w3-card">--}}
{{--            <a href="{{ route('main-public') }}" class="w3-bar-item w3-button"><b>KU</b> Events</a>--}}
{{--            <!-- Float links to the right. Hide them on small screens -->--}}
{{--            <div class="w3-right w3-hide-small">--}}
{{--                <a href="{{ route('how-to-use') }}" class="w3-bar-item w3-button">How To Use</a>--}}
{{--                <a href="{{ route('login') }}" class="w3-bar-item w3-button">Log In</a>--}}
{{--                <a href="{{ route('signup') }}" class="w3-bar-item w3-button">Sign Up</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div align="center">--}}
{{--        <h1>-</h1>--}}
{{--        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS57cxS-wC2GujcEE-N_c5epmqhydszCHIk1Q&usqp=CAU"--}}
{{--            style="width: 200px;height: 200px;">--}}
{{--        <h3>Please Log In</h3>--}}

{{--        --}}{{-- >>> Implement login --}}
{{--        <form action="{{ route('main-public') }}">--}}
{{--            <input type="username" value="username">--}}
{{--            <input type="password" value="Password">--}}
{{--        </form>--}}
{{--        <a href="{{ route('main-public') }}">--}}
{{--            <p><button class="w3-button w3-light-grey w3-block" style="width:200px">Log In</button></p>--}}
{{--        </a>--}}
{{--        --}}{{-- <<< Implement login --}}
{{--    </div>--}}

<!-- component -->
<!-- nav -->
<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b  dark:border-gray-600">
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
                <li>
                    <a href="{{route('main-public')}}" class="block py-2 mt-1.5  pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
                </li>
                <li>
                    <a href="{{ route('how-to-use') }}" class="block py-2 mt-1.5  pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">How To Use </a>
                </li>
                <li>
                    <a href=" {{route('signup')}}">
                        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign Up</button>
                    </a>
                    {{--                    <a href=" {{route('login')}}" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Sign In</a>--}}
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- page -->
<main
    class="flex min-h-screen  items-center justify-center bg-gray-900 text-white"
>
    <!-- component -->
    <section class="flex w-[30rem] flex-col space-y-10">
        <div class="text-center text-4xl font-medium">Sign In</div>

        <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
            <input
                type="text"
                placeholder="Email or Username"
                class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none"
            />
        </div>

        <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
            <input
                type="password"
                placeholder="Password"
                class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none"
            />
        </div>
        <a href="{{route('main-logged-in')}}">
{{--        <button class="transform rounded-sm bg-indigo-600 py-2 font-bold duration-300 hover:bg-indigo-400">Sign In</button>--}}
            <button class="bg-indigo-600 w-full py-2 font-bold duration-300 hover:bg-indigo-400">Sign in</button>
        </a>

        <a href="#" class="transform text-center font-semi-bold text-gray-500 duration-300 hover:text-gray-300">FORGOT PASSWORD?</a>

        <p class="text-center text-lg">
            No account?
            <a
                href="{{route('signup')}}"
                class="font-medium text-indigo-500 underline-offset-4 hover:underline"
            >Create One</a
            >
        </p>
    </section>
</main>

    <body>

</html>

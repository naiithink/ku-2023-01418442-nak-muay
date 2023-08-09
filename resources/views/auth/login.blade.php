@extends('layouts.main')
{{--<x-guest-layout>--}}
{{--    <!-- Session Status -->--}}
{{--    <x-auth-session-status class="mb-4" :status="session('status')" />--}}

{{--    <form method="POST" action="{{ route('login') }}">--}}
{{--        @csrf--}}

{{--        <!-- Email Address -->--}}
{{--        <div>--}}
{{--            <x-input-label for="email" :value="__('Email')" />--}}
{{--            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />--}}
{{--            <x-input-error :messages="$errors->get('email')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Password -->--}}
{{--        <div class="mt-4">--}}
{{--            <x-input-label for="password" :value="__('Password')" />--}}

{{--            <x-text-input id="password" class="block mt-1 w-full"--}}
{{--                            type="password"--}}
{{--                            name="password"--}}
{{--                            required autocomplete="current-password" />--}}

{{--            <x-input-error :messages="$errors->get('password')" class="mt-2" />--}}
{{--        </div>--}}

{{--        <!-- Remember Me -->--}}
{{--        <div class="block mt-4">--}}
{{--            <label for="remember_me" class="inline-flex items-center">--}}
{{--                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">--}}
{{--                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
{{--            </label>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-end mt-4">--}}
{{--            @if (Route::has('password.request'))--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">--}}
{{--                    {{ __('Forgot your password?') }}--}}
{{--                </a>--}}
{{--            @endif--}}

{{--            <x-primary-button class="ml-3">--}}
{{--                {{ __('Log in') }}--}}
{{--            </x-primary-button>--}}
{{--        </div>--}}
{{--    </form>--}}
{{--</x-guest-layout>--}}










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

{{--         >>> Implement login --}}
{{--        <form action="{{ route('main-public') }}">--}}
{{--            <input type="username" value="username">--}}
{{--            <input type="password" value="Password">--}}
{{--        </form>--}}
{{--        <a href="{{ route('main-public') }}">--}}
{{--            <p><button class="w3-button w3-light-grey w3-block" style="width:200px">Log In</button></p>--}}
{{--        </a>--}}
{{--         <<< Implement login --}}
{{--    </div>--}}


@section('content')
<!-- page -->
    <main class="flex min-h-screen  items-center justify-center bg-gray-900 text-white">
        <!-- component -->
        <section class="flex w-[30rem] flex-col space-y-10">
            <div class="text-center text-4xl font-medium">Sign In</div>

            <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">
                <input
                    type="text"
                    id="email"
                    placeholder="Enter Your Email"
                    class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none required"
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
                <button class="bg-indigo-600 w-full py-2 font-bold duration-300 hover:bg-indigo-400">Sign in</button>
            </a>

            <a href="{{route('forgot-password2')}}" class="transform text-center font-semi-bold text-gray-500 duration-300 hover:text-gray-300">FORGOT PASSWORD?</a>

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
@endsection

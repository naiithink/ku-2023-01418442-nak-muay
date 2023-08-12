@extends('layouts.main')

@section('content')
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




<!-- page -->
{{--    <main class="flex min-h-screen  items-center justify-center bg-gray-900 text-white">--}}
{{--        <!-- component -->--}}
{{--        <form method="POST" action="{{ route('login') }} "--}}
{{--        class="flex w-[30rem] flex-col space-y-10">--}}
{{--            @csrf--}}

{{--            <div class="text-center text-4xl font-medium">Sign In</div>--}}

{{--            <!-- email -->--}}
{{--                <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">--}}
{{--                    <input--}}
{{--                        type="text"--}}
{{--                        id="email"--}}
{{--                        placeholder="Enter Your Email"--}}
{{--                        required--}}
{{--                        autocomplete="username"--}}
{{--                        class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none required"--}}
{{--                    />--}}
{{--                </div>--}}

{{--                <!-- password -->--}}
{{--                <div class="w-full transform border-b-2 bg-transparent text-lg duration-300 focus-within:border-indigo-500">--}}
{{--                    <input--}}
{{--                        type="password"--}}
{{--                        id="password"--}}
{{--                        placeholder="Password"--}}
{{--                        required--}}
{{--                        autocomplete="current-password"--}}
{{--                        class="w-full border-none bg-transparent outline-none placeholder:italic focus:outline-none"--}}
{{--                    />--}}
{{--                </div>--}}

{{--                <!-- button -->--}}
{{--                <a href="#">--}}
{{--                    <button class="bg-indigo-600 w-full py-2 font-bold duration-300 hover:bg-indigo-400">Sign In</button>--}}
{{--                </a>--}}


{{--                <a href="{{route('forgot-password2')}}" class="transform text-center font-semi-bold text-gray-500 duration-300 hover:text-gray-300">FORGOT PASSWORD?</a>--}}
{{--                <p class="text-center text-lg">--}}
{{--                    No account?--}}
{{--                    <a--}}
{{--                        href="{{route('register')}}"--}}
{{--                        class="font-medium text-indigo-500 underline-offset-4 hover:underline"--}}
{{--                    >Create One</a--}}
{{--                    >--}}
{{--                </p>--}}
{{--        </form>--}}
{{--    </main>--}}
@endsection

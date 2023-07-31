{{--
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
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
</head>

<body>
    <div class="w3-yellow-p"></div>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar mint-b w3-wide w3-padding w3-card">
            <a href="{{ route('main') }}" class="w3-bar-item w3-button"><b>KU</b> Events</a>
            <!-- Float links to the right. Hide them on small screens -->
            <div class="w3-right w3-hide-small">
                <a href="{{ route('howtouse') }}" class="w3-bar-item w3-button">How To Use</a>
                <a href="{{ route('login') }}" class="w3-bar-item w3-button">Log In</a>
                <a href="{{ route('signup') }}" class="w3-bar-item w3-button">Sign Up</a>
            </div>
        </div>
        sign up
    </div>

    <body>

</html>

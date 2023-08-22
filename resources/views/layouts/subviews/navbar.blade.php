
<header class="sticky top-0 left-0 z-20">
    <nav class="font-mono bg-white dark:bg-gray-900 w-full border-b border-teal-200 dark:border-teal-300">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{route('home')}}" class="flex items-center">
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">KU Events</span>
            </a>


            @if(Auth::check())
                <div class="flex items-center md:order-2">
                    <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                        <span class="sr-only">Open user menu</span>
                        <img class=" bg-white w-14 h-14 rounded-full" src="{{asset('image/person.png')}}" alt="user photo">
                    </button>

                    {{-- Dropdown menu --}}
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                        <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white text-center">{{Auth::user()->username}}</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">{{Auth::user()->email}}</span>
                        </div>

                        {{-- >>> Displays by roles --}}
                        <ul class="py-2" aria-labelledby="user-menu-button">
                            {{-- @if(Auth::user()->role === "ADMIN")
                                <li>
                                    <a href="{{ route('staff-create') }}" class="block px-4 py-2 text-sm w-full text-center text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Create Staff</a>
                                </li>
                            @endif --}}
                            <li>
                                <a href="{{ route('profile.show', ['user' => Auth::user()]) }}" class="block px-4 py-2 text-sm w-full text-center text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                            </li>
                            <li>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="block px-4 py-2  w-full text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</button>
                                </form>
                            </li>
                        </ul>
                        {{-- <<< Displays by roles --}}
                    </div>
                </div>

                <div>
                    <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                </div>

                <div class="items-center justify-between hidden mr-56 p-4 w-full md:flex md:w-auto md:order-1" id="navbar-user">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="{{url('/') }}" {{ request()->is('/') ? 'active' : '' }}
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('how-to-use') }}"
                               class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">How To Use</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#all-events"
                               class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">All Events</a>
                        </li>

                    </ul>
                </div>

            @else
                <div class="flex items-center md:order-2">
                    <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                        <li>
                            <a href="{{route('login')}}" class="block py-2 mt-1.5 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Log In </a>
                        </li>
                        <li>
                            <a href= {{route('register')}}>
                                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Sign Up</button>
                            </a>
                        </li>
                    </ul>
                </div>

                <div>
                    <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                </div>

                <div class="items-center justify-between hidden -ml-52 p-4 w-full md:flex md:w-auto md:order-1" id="navbar-user">
                    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="{{url('/') }}" {{ request()->is('/') ? 'active' : '' }}
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                        </li>
                        <li>
                            <a href="{{route('how-to-use')}}"
                               class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">How To Use</a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}#all-events"
                               class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">All Events</a>
                        </li>
                    </ul>
                </div>
            @endif

        </div>
    </nav>

{{--    <div id="default-carousel" class=" w-full mt-24 " data-carousel="slide">--}}
{{--        <!-- Carousel wrapper -->--}}
{{--        <div class="relative h-60 overflow-hidden md:h-96">--}}
{{--            <!-- Item 1 -->--}}
{{--            <div class="hidden duration-700 ease-in-out" data-carousel-item>--}}
{{--                <img src="{{asset('image/create-event.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">--}}
{{--            </div>--}}
{{--            <!-- Item 2 -->--}}
{{--            <div class="hidden duration-700 ease-in-out" data-carousel-item>--}}
{{--                <img src="{{asset('image/img-view-1.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">--}}
{{--            </div>--}}
{{--            <!-- Item 3 -->--}}
{{--            <div class="hidden duration-700 ease-in-out" data-carousel-item>--}}
{{--                <img src="{{asset('image/img-view-2.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">--}}
{{--            </div>--}}
{{--            <!-- Item 4 -->--}}
{{--            <div class="hidden duration-700 ease-in-out" data-carousel-item>--}}
{{--                <img src="{{asset('image/img-view-3.jpeg')}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">--}}
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

<script type="text/javascript">
    import Echo from 'laravel-echo'

    window.Echo = new Echo({
        broadcaster: 'pusher',
        key: process.env.MIX_PUSHER_APP_KEY,
        cluster: process.env.MIX_PUSHER_APP_CLUSTER,
        encrypted: true,
    });
</script>

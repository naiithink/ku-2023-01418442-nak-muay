@extends('layouts.main')


@section('content')
<!-- page -->
<form>
    <div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center py-5 mt-16  font-mono">
        <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full " style="max-width:1000px">
            <div class="md:flex w-full">
                    <img src="{{asset('image/image-event.jpg')}}" class=" rounded-l-3xl" style="max-height:590px" alt="">


                <div class="w-full md:w-1/2 py-8 px-5 md:px-10 ">
                    <div class="text-center mb-8">
                        <h1 class="font-bold text-3xl text-gray-900">Create Your Event</h1>
                    </div>


{{--                    <form action="{{route('register.store')}}" method="POST">--}}
                        @csrf
                        <!-- input -->
                        <div>
                            <!-- event name -->
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <label for="name" class="text-xs font-semibold px-1">Event Name </label>
                                    <div class="flex">
                                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                        <input type="text" id="name" name="name" required autofocus autocomplete="off"
                                               class="w-full -ml-10 pl-10 pr-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Event Name">
                                    </div>
                                </div>

                            </div>

                            <!-- description -->
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <label for="description" class="text-xs font-semibold px-1">Description</label>
                                    <div class="flex">
                                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                        <input type="text" id="email"  name="email"  required autofocus autocomplete="off"
                                               class="w-full -ml-10 pl-10 pr-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Description">
                                    </div>
                                </div>
                            </div>

                            <!-- fund -->
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <label for="Fund" class="text-xs font-semibold px-1">Fund</label>
                                    <div class="flex">
                                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                        <input type="text" id="email"  name="email"  required autofocus autocomplete="off"
                                               class="w-full -ml-10 pl-10 pr-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Fund">
                                    </div>
                                </div>
                            </div>

                            <!-- date-->
                            <div class="flex -mx-3">
                                <!-- date-->
                                <div class="w-full px-3 mb-5">
                                    <label for="Date" class="text-xs font-semibold px-1">Date</label>
                                    <div class="flex">
                                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                        <input type="date" id="email"  name="email"  required autofocus pattern="\d{4}-\d{2}-\d{2}"
                                               class="w-full -ml-10 pl-10 pr-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Date">
                                    </div>
                                </div>


                                <div class="w-full px-3 mb-5">
                                    <label for="number" class="text-xs font-semibold px-1">Capacity</label>
                                    <div class="flex">
                                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                        <input type="number" id="email"  name="email"  required autofocus min="10" max="50" step="1" list="defaultCapacity" autocomplete="off"
                                                class="w-full -ml-10 pl-10 pr-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="0">
                                    </div>

                                    <datalist id="defaultCapacity">
                                        <option value="10"></option>
                                        <option value="15"></option>
                                        <option value="20"></option>
                                        <option value="25"></option>
                                        <option value="30"></option>
                                    </datalist>

                                </div>

                            </div>


                            <!-- button -->
                            <div class="flex -mx-3 pt-8">
                                <div class="w-full px-3">
                                    <a href="{{ route('main-public') }}">
                                        <button type="submit"
                                                class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">Create Now</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection

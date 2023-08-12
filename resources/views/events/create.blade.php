@extends('layouts.main')


@section('content')
<!-- page -->
<form>
    <div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-5">
        <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
            <div class="md:flex w-full h-auto">
                    <img src="{{asset('image/image-event.jpg')}}" style="max-height:500px" alt="">


                <div class="w-full md:w-1/2 py-10 px-5 md:px-10 ml-16">
                    <div class="text-center mb-10">
                        <h1 class="font-bold text-3xl text-gray-900">Create Your Event</h1>
                    </div>


{{--                    <form action="{{route('register.store')}}" method="POST">--}}
                        @csrf
                        <!-- input -->
                        <div>
                            <!-- name -->
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <label for="name" class="text-xs font-semibold px-1">Event Name </label>
                                    <div class="flex">
                                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                        <input type="text" id="name" name="name"
                                               class="w-full -ml-10 pl-10 pr-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Event Name">
                                    </div>
                                </div>
                            </div>

                            <!-- email -->
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <label for="email" class="text-xs font-semibold px-1">Description</label>
                                    <div class="flex">
                                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                        <input type="email" id="email"  name="email"  required autofocus autocomplete="username"
                                               class="w-full -ml-10 pl-10 pr-3 py-5 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Description">
                                    </div>
                                </div>
                            </div>


                            <!-- button -->
                            <div class="flex -mx-3 pt-8">
                                <div class="w-full px-3 mb-5">
                                    <a href="{{ route('main-public') }}">
                                        <button type="submit"
                                                class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">Create Now</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</form>

@endsection

@extends('layouts.main')

@section('content')

    <!-- component -->
    <div class="py-10">
        <div class="relative border  max-w-md mx-auto md:max-w-2xl mt-6 min-w-0 break-words bg-white   border-gray-200 dark:bg-gray-800  dark:border-teal-300 w-full mb-6 shadow-lg rounded-xl py-20">
            <div class="px-6">
                <div class="flex flex-wrap justify-center">
                    <div class="w-full flex justify-center pt-8">
                        <div class="flex item-center justify-center">
                            <img src="{{asset("image/event-image-2.jpeg")}}" class="shadow-xl border-none absolute -mt-24 max-w-[350px] dark:bg-white"/>
                        </div>
                    </div>

                    <div class="w-full text-center mt-32">
                        <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                            <!-- capacity -->
                            <div class="p-3 text-center">
                                <span class="text-xl font-bold block uppercase tracking-wide text-slate-700 dark:text-white"> {{ $event->currentAttendeeCount() }} / {{ $event->attendee_capacity }}</span>
                                <span class="text-sm text-slate-400">Registered</span>
                            </div>

                            <!-- status -->
                            <div class="p-3 text-center">
                                <span class="text-xl font-bold block uppercase tracking-wide text-slate-700 dark:text-white">{{ $event->status }}</span>
                                <span class="text-sm text-slate-400">Status</span>
                            </div>


                        </div>
                        <!-- date -->
                        <div class="p-3 text-center">
                            <span class="text-xl font-bold block uppercase tracking-wide text-red-500">{{ $event->date }}</span>
                            <span class="text-sm text-red-500">Date</span>
                        </div>
                    </div>
                </div>


                <div class="text-center mt-6">
                    <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1 dark:text-white">{{ $event->event_name }}</h3>

                </div>

                <div class="mt-6 py-6 border-t border-slate-200 dark:border-teal-200 text-center">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full px-4">
                            <p class="font-light leading-relaxed text-slate-600 mb-4 dark:text-white">{{ $event->description }}</p>
                        </div>
                    </div>

                    {{--edit--}}
                    @if (Auth::user() === null)

                    @elseif (Auth::user()->role === "STAFF" || Auth::user()->role === "STUDENT" && $event->isManager(Auth::user()->id) == true )
                        <div class="flex items-center justify-center mt-4">
                            <a href="{{ route("edit-event", ['event' => $event]) }}" class="inline-flex items-center px-8 py-2 text-lg font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Edit
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>


                    @elseif (Auth::user()->role === "STUDENT")
                    <!-- Join Now -->
                    <div class="flex items-center justify-center mt-8">
                        @if($event->status === 'APPROVED' && !$event->isAttendee(Auth::user()->id))
                        <a href="{{ action('EventController@addAttendee', ['event_id' => $event->id, 'user_id' => Auth::user()->id]) }}" class="inline-flex items-center px-8 py-2 text-lg font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Join Now
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                        @elseif($event->status === 'APPROVED' && !$event->isAttendee(Auth::user()->id))
                        Joined
                        @endif
                    </div>
                    @endif

                </div>

            </div>
        </div>

    </div>
@endsection

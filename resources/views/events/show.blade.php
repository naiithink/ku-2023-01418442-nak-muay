@extends('layouts.main')

@section('content')

    <!-- component -->
    <div class="py-10">
        <div
            class="relative border  max-w-md mx-auto md:max-w-2xl mt-6 min-w-0 break-words bg-white border-teal-300   border-gray-200 dark:bg-gray-800  dark:border-teal-300 w-full mb-6 shadow-lg rounded-xl py-20">
            <div class="px-6">
                <div class="flex flex-wrap justify-center">
                    <div class="w-full flex justify-center pt-8">
                        <div class="flex item-center justify-center border border-teal-300">
                            <img src="{{ asset('image/event-image-2.jpeg') }}"
                                class="shadow-xl border-none absolute -mt-24 max-w-[350px] dark:bg-white" />
                        </div>
                    </div>

                    <div class="w-full text-center mt-32">
                        <div class="flex justify-center lg:pt-4 pt-8 pb-0">
                            <!-- capacity -->
                            <div class="p-3 text-center">
                                <span
                                    class="text-xl font-bold block uppercase tracking-wide text-slate-700 dark:text-white">
                                    {{ $event->currentAttendeeCount() }} / {{ $event->attendee_capacity }}</span>
                                <span class="text-sm text-slate-400">Registered</span>
                            </div>

                            <!-- status -->
                            @if ($event->status === 'APPROVED')
                                <div class="p-3 text-center">
                                    <span
                                        class="text-xl font-bold block uppercase tracking-wide text-green-500 dark:text-white">{{ $event->status }}</span>
                                    <span class="text-sm text-slate-400">Status</span>
                                </div>
                            @elseif ($event->status === 'REJECTED')
                                <div class="p-3 text-center">
                                    <span
                                        class="text-xl font-bold block uppercase tracking-wide text-red-500 dark:text-white">{{ $event->status }}</span>
                                    <span class="text-sm text-slate-400">Status</span>
                                </div>
                            @else
                                <div class="p-3 text-center">
                                    <span
                                        class="text-xl font-bold block uppercase tracking-wide text-blue-500 dark:text-white">{{ $event->status }}</span>
                                    <span class="text-sm text-slate-400">Status</span>
                                </div>
                            @endif


                        </div>
                        <!-- date -->
                        <div class="p-3 text-center">
                            <span
                                class="text-xl font-bold block uppercase tracking-wide text-red-500">{{ DateTime::createFromFormat('Y-m-d H:i:s', $event->date)->format('d F Y H:m:s') }}</span>
                            <span class="text-sm text-red-500">Date</span>
                        </div>
                    </div>
                </div>


                <div class="text-center mt-4">
                    <h3 class="text-2xl text-slate-700 font-bold leading-normal mb-1 dark:text-white">
                        {{ $event->event_name }}</h3>
                </div>
                <div class="text-center decoration-solid">
                    <a href="{{ route('profile.show', ['user' => $event->managers->first()]) }}" class="block px-2 mt-7 -mb-3 text-sm  text-blue-500" ">Contact Manager</a>

                </div>

                <div class="mt-6 py-6 border-t border-slate-200 dark:border-teal-200 text-center">
                    <div class="flex flex-wrap justify-center">
                        <div class="w-full px-4">
                            <p class="font-light leading-relaxed text-slate-600 mb-4 dark:text-white">
                                {{ $event->description }}</p>
                        </div>
                    </div>

                    {{-- edit --}}
                    @if (Auth::user() === null)
                        <!-- edit -->
                    @elseif (date('Y-m-d H:m:s') > $event->date)

                        <p class="text-red-500 text-lg">Passed Event </p>
                    @elseif (Auth::user()->role === 'STAFF' || (Auth::user()->role === 'STUDENT' && $event->isManager(Auth::user()->id) == true))
                        @if ($event->status === "PENDING" && Auth::user()->role === 'STAFF')
                        <div class="flex items-center justify-center mt-4">
                            <a href="{{ route('edit-event', ['event' => $event]) }}"
                                class="inline-flex items-center px-8 py-2 text-lg font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Edit
                                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                        @elseif ($event->status === "REJECTED" && (Auth::user()->role === 'STAFF' || (Auth::user()->role === 'STUDENT' && $event->isManager(Auth::user()->id) == true)))
                        <div class="flex item-center justify-center dark:text-white">
                            <h1 >Rejection Reasons: </h1>
                            <p class="text-red-500">
                            {{ $event->disapproval_reasons }}
                            </p>
                        </div>

                        @elseif ($event->status === "APPROVED" && (Auth::user()->role === 'STAFF' || (Auth::user()->role === 'STUDENT' && $event->isManager(Auth::user()->id) == true)))
                            @if (Auth::user()->role === 'STAFF')
                                <p class="text-green-500">Already Approved</p>
                            @else
                                <div class="flex items-center justify-center mt-4">
                                    <a href="{{ route('edit-event', ['event' => $event]) }}"
                                        class="inline-flex items-center px-8 py-2 text-lg font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        Show Attedees
                                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                        </svg>
                                    </a>
                                </div>
                            @endif
                        @endif

                    @elseif (Auth::user()->role === 'STUDENT')
                        <!-- Join Now -->
                        <div class="items-center justify-center mt-8">

                            @if ($event->status === 'APPROVED' && !$event->isAttendee(Auth::user()->id))
                                {{-- @php
                                    dd($event->id);
                                @endphp --}}

                                {{-- With description --}}
                                <form action="{{ route('events.add-attendee', ['event_id' => $event->id, 'user_id' => Auth::user()->id]) }}"
                                    method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div>
                                        <textarea id="description" name="description" autocomplete="no"
                                            class=" text-black text-sm rounded-lg border border-teal-300" style="width: 400px" placeholder="Description"
                                            rows="3"></textarea>
                                    </div>

                                    <div class="mt-3">
                                        <input type="checkbox" id="empty-description" name="empty-description">
                                        <label for="empty-description" class="text-black dark:text-white ">Don't Provide
                                            Description</label>
                                    </div>

                                    <div class="text-white p-2 rounded-lg">
                                            <button type="submit"
                                                class="relative inline-flex mt-3 items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                                <span
                                                    class="relative px-10 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-800 rounded-md group-hover:bg-opacity-0">
                                                    Join Now
                                                </span>
                                            </button>
                                    </div>
                                </form>


                                {{-- No descriptions --}}
                                {{-- <a
                                    href="{{ action('EventController@addAttendee', ['event_id' => $event->id, 'user_id' => Auth::user()->id, 'description' => '']) }}">
                                    <button type="submit"
                                        class="relative inline-flex mt-3 items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                                        <span
                                            class="relative px-10 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-800 rounded-md group-hover:bg-opacity-0">
                                            Join Now
                                        </span>
                                    </button>
                                </a> --}}
                            @elseif($event->status === 'APPROVED' && $event->isAttendee(Auth::user()->id))
                                <h1 class="text-lg text-red-500">Joined!!!</h1>
                            @endif
                        </div>

                        {{-- @php
                            dd($event->attendees->count())
                        @endphp --}}

                        @if ($event->attendees->count() === 0)
                            <p class="text-red-500 mt-4"> No One Joined! </p>
                        @else
                        <p class="text-black dark:text-white mt-5">Attendees List</p>
                        <div class="flex item-center justify-center mt-5">
                            <table class=" text-sm text-left text-gray-500 dark:text-gray-400 border-2 border-teal-300"
                                style="width: 800px">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Role
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Email
                                        </th>

                                    </tr>
                                </thead>
                                @foreach ($attendees as $attendee)
                                    <tbody>
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td class="px-6 py-4">
                                                {{ $attendee->name }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $attendee->role }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $attendee->email }}
                                            </td>

                                        </tr>
                                    </tbody>
                                @endforeach
                            </table>
                        </div>
                        @endif





                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

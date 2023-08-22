{{--
    Editing an event:
        - A STAFF reviews an event request -- approve/reject
        - A STUDENT (host/managers) reviews registered student
        - A STUDENT (non-host) registers itself to join an event
--}}

@extends('layouts.main')

@section('content')

@if(Auth::check())
    {{-- >>> Displays by roles --}}
<div class=" justify-center font-mono py-16 text-white h-screen" align="center">
    @if(Auth::user()->role === "STAFF")
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w3-padding-32">
            <h1 class=" pt-8 pb-6  text-3xl">{{ $event->event_name }}</h1>

                <h1 class=" pt-8 pb-6"">Fund:</label>
                <h1 class=" pt-8 pb-6  text-3xl">{{ $event->currency }}{{ $event->fund }}</h1>

                <label class="">Date: </label>
                <h1 class=" pt-8 pb-6  text-3xl text-red-500 "">{{ $event->date }}</h1>

                <label class="">Attendee Capacity: </label>
                <h1 class=" pt-8 pb-6  text-3xl">{{ $event->attendee_capacity }}</h1>




            @if ($event->status === 'PENDING')

            <a href="{{ action('EventController@setStatus', ['id' => $event->id, 'status' => 'APPROVED']) }}" align="center">
                <button type="button" class="w3-center text-white bg-green-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-4 py-2 text-center mr-3 md:mr-0  dark:hover:bg-green-700 dark:focus:ring-green-800">Approve</button>
            </a>

            <a href="{{ action('EventController@setStatus', ['id' => $event->id, 'status' => 'REJECTED']) }}" align="center">
                <button type="button" class="w3-center text-white bg-red-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg text-sm px-5 py-2 text-center mr-3 md:mr-0 dark:hover:bg-red-700 dark:focus:ring-red-800">Reject</button>
            </a>

            <div class="flex -mx-3 justify-center font-mono">
                <div class="w-full px-3 mb-5">
                    <div class="justify-center font-mono ml-7">

                        <input type="text" id='disapproval_reasons' name="disapproval_reasons" required autofocus
                            autocomplete="off"
                            style="width: 400px"
                            class=" -ml-10 pl-5 mt-8 pr-3 py-3 text-black rounded-lg focus:border-indigo-500"
                            placeholder="Reasons for rejection">
                    </div>
                </div>
            </div>

            <h1 class="py-4">Members list</h1>

            <div class="flex item-center justify-center">
                <table class=" text-sm text-left text-gray-500 dark:text-gray-400 border-2 border-teal-300" style="width: 1000px">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Role
                            </th>

                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Profile
                            </th>
                            <th scope="col" class="px-6 py-3">
                                description
                            </th>

                        </tr>
                    </thead>

                    @foreach ($attendees as $attendee)
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $attendee->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $attendee->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $attendee->role }}
                            </td>

                            <td class="px-6 py-4">
                                {{ $attendee->email }}
                            </td>
                            <td class="px-6 py-4 text-blue-500">
                                <a href="{{ route('profile.show', ['user' => $attendee]) }}">See Profile</a>
                            </td>
                            <td class="px-6 py-4">
                                {{ $event->attendees->find($attendee->id)->pivot->description }}
                            </td>
                        </tr>
                    </tbody>
                    @endforeach

                </table>
            </div>

            @endif
        </div>



    @elseif(Auth::user()->role === "STUDENT" && $event->isManager(Auth::user()->id) == true)
    <h1 class="py-4">Members list</h1>

    <div class="flex item-center justify-center">
        <table class=" text-sm text-left text-gray-500 dark:text-gray-400 border-2 border-teal-300" style="width: 1000px">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Role
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Profile
                    </th>
                    <th scope="col" class="px-6 py-3">
                        description
                    </th>

                </tr>
            </thead>
            @foreach ($attendees as $attendee)
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $attendee->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $attendee->name }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $attendee->role }}
                    </td>

                    <td class="px-6 py-4">
                        {{ $attendee->email }}
                    </td>
                    <td class="px-6 py-4 text-blue-500">
                        <a  href="{{ route('profile.show', ['user' => $attendee]) }}">See Profile</a>
                    </td>
                    <td class="px-6 py-4">
                        {{ $event->attendees->find($attendee->id)->pivot->description }}
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    @endif
</ul>
@endif
    {{-- <<< Displays by roles --}}
@endsection

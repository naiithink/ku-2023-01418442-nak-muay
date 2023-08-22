@extends('layouts.main')

@section('content')
    <!-- component -->
    <div class="py-32">
        <div
            class="relative border  max-w-md mx-auto md:max-w-2xl mt-6 min-w-0 break-words bg-white   border-gray-200 dark:bg-gray-800  dark:border-teal-300 w-full mb-6 shadow-lg rounded-xl py-20">
            <div class="px-6">
                <div class="flex flex-wrap justify-center">
                    <div class="w-full flex justify-center pt-8">
                        <div class="relative">
                            <img src="{{ asset('image/person-2.png') }}"
                                class="shadow-xl rounded-full align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-[150px] dark:bg-white" />
                        </div>
                    </div>

                    <div class="w-full text-center mt-24">
                        <div class="flex justify-center lg:pt-0 pt-8 pb-0">
                            <div class="p-1 text-center">
                                <span
                                    class="text-xl font-bold block uppercase tracking-wide text-slate-700 dark:text-white">{{ $user->name }}</span>
                                <span class="text-sm text-slate-400">Name</span>
                            </div>
                        </div>
                        <div class="flex justify-center lg:pt-2 pt-8 pb-3">
                            <div class="p-3 text-center">
                                <span
                                    class="text-xl font-bold block uppercase tracking-wide text-slate-700 dark:text-white">{{ $user->role }}</span>
                                <span class="text-sm text-slate-400">Role</span>
                            </div>
                            <div class="p-3 text-center">
                                <a href="tel:{{ $user->phone_number }}" target="_blank" rel="noreferrer noopener"
                                    class="text-xl font-bold block uppercase tracking-wide text-green-500 dark:text-green-500">{{ $user->phone_number }}</a>
                                <span class="text-sm text-slate-400 ">Phone Number</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- contact link -->
                @if ($user->website != null)
                    <div class="p-3 text-center">
                        <a href="{{ $user->website }}" target="_blank" rel="noreferrer noopener"
                            class="text-xl font-bold block lower tracking-wide text-blue-500 dark:text-blue-500">{{ $user->website }}</a>
                        <span class="text-sm text-slate-400 ">Website</span>
                    </div>
                @endif

                <div class="text-center mt-6">
                    <div class="text-lg mt-0 mb-2 text-slate-400 font-bold">
                        <a href="mailto:{{ $user->email }}" target="_blank" rel="noreferrer noopener"
                            class="fas fa-map-marker-alt mr-2 text-blue-500">{{ $user->email }}</a>
                    </div>
                    <span class="text-sm text-slate-400 ">Email</span>
                </div>

                {{-- <div class="mt-6 py-6 border-t border-slate-200 dark:border-teal-200 text-center">
                    <!--certificate-->
                    <div class="flex items-center justify-center mt-4">
                        <a href="{{ route("certificates") }}" class="inline-flex items-center px-3 py-2 text-lg font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Certificates
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                    </div>

                </div> --}}
            </div>
        </div>

    </div>
@endsection

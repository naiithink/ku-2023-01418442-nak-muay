@extends('layouts.main')


@section('content')
    <!-- page -->
    <div>
        <div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center py-5  font-mono">
            <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full " style="max-width:1000px">
                <div class="md:flex w-full">
                    <img src="{{ asset('image/image-event.jpg') }}" class=" rounded-l-3xl" style="max-height:650px"
                        alt="">


                    <div class="w-full md:w-1/2 py-8 px-5 md:px-10 ">
                        <div class="text-center mb-8">
                            <h1 class="font-bold text-3xl text-gray-900">Create an Event</h1>
                        </div>


                        <form action="{{ route('events.store', ['manager_id' => Auth::user()->id]) }}" method="POST">
                            @csrf
                            <!-- input -->
                            <div>

                                <!-- event name -->
                                <div class="flex -mx-3">
                                    <div class="w-full px-3 mb-5">
                                        <label for="name" class="text-xs font-semibold px-1">Event Name </label>
                                        <div class="flex">
                                            <div
                                                class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                                <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                                            </div>
                                            <input type="text" id='event_name' name="event_name" required autofocus
                                                autocomplete="off"
                                                class="w-full -ml-10 pl-5 pr-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                                placeholder="Event Name">
                                        </div>
                                    </div>
                                </div>

                                <!-- description -->
                                <div class="flex -mx-3">
                                    <div class="w-full px-3 mb-5">
                                        <label for="description" class="text-xs font-semibold px-1">Description</label>
                                        <div class="flex">
                                            <div
                                                class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                                <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                                            </div>
                                            <textarea type="text" id="description" name="description" required autofocus autocomplete="off" rows="3"
                                                class="w-full -ml-10 pl-5 pr-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                                placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="flex -mx-3">
                                    <!-- fund -->
                                    <div class="w-full px-3 mb-5">
                                        <label for="Fund" class="text-xs font-semibold px-1">Fund</label>
                                        <div class="flex">
                                            <div
                                                class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                                <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                                            </div>
                                            <input type="number" id="fund" name="fund" required autofocus
                                                autocomplete="off"
                                                class="w-50 -ml-10 pl-5pr-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                                placeholder="Fund">
                                        </div>
                                    </div>

                                    <!--currency-->
                                    <div class="w-full px-5 mb-5">
                                        <label for="number" class="text-xs font-semibold px-1">Currency</label>
                                        <div class="flex">
                                            <div
                                                class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                                <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                                            </div>
                                            <input type="text" id="currency" name="currency" required autofocus
                                                list="defaultCurrency" autocomplete="off"
                                                class="w-40 -ml-10 pl-5 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                                placeholder="THB">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            @php
                                $currrentDateTime = now()->format('Y-m-d') . 'T' . now()->format('H:m');
                            @endphp

                            <div class="flex -mx-3">
                                <!-- date-->
                                <div class="w-full px-3 mb-5">
                                    <label for="Date" class="text-xs font-semibold px-1">Date</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="datetime-local" id="date" name="date"
                                            value="{{ $currrentDateTime }}" min="{{ $currrentDateTime }}" required autofocus
                                            onkeydown="return false "
                                            class="w-full -ml-10 pl-5 pr-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="Date">
                                    </div>
                                </div>

                                <!-- capacity -->
                                <div class="w-full px-3 mb-5">
                                    <label for="number" class="text-xs font-semibold px-1">Expected Attendees</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="number" id="attendee_capacity" name="attendee_capacity" required
                                            autofocus min="1" step="1" list="attendeeCapacity"
                                            autocomplete="off"
                                            class="w-full -ml-10 pl-5 pr-3 py-3 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="0">
                                    </div>
                                </div>

                            </div>


                            <!-- button -->
                            <div class="flex -mx-3 pt-8">
                                <div class="w-full px-3">
                                    <button type="submit"
                                        class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">
                                        Create Now
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <datalist id="defaultCurrency">
        <option value="AED"></option>
        <option value="AFN"></option>
        <option value="ALL"></option>
        <option value="AMD"></option>
        <option value="ANG"></option>
        <option value="AOA"></option>
        <option value="ARS"></option>
        <option value="AUD"></option>
        <option value="AWG"></option>
        <option value="AZN"></option>
        <option value="BAM"></option>
        <option value="BBD"></option>
        <option value="BDT"></option>
        <option value="BGN"></option>
        <option value="BHD"></option>
        <option value="BIF"></option>
        <option value="BMD"></option>
        <option value="BND"></option>
        <option value="BOB"></option>
        <option value="BOV"></option>
        <option value="BRL"></option>
        <option value="BSD"></option>
        <option value="BTN"></option>
        <option value="BWP"></option>
        <option value="BYN"></option>
        <option value="BZD"></option>
        <option value="CAD"></option>
        <option value="CDF"></option>
        <option value="CHE"></option>
        <option value="CHF"></option>
        <option value="CHW"></option>
        <option value="CLF"></option>
        <option value="CLP"></option>
        <option value="CNY"></option>
        <option value="COP"></option>
        <option value="COU"></option>
        <option value="CRC"></option>
        <option value="CUC"></option>
        <option value="CUP"></option>
        <option value="CVE"></option>
        <option value="CZK"></option>
        <option value="DJF"></option>
        <option value="DKK"></option>
        <option value="DOP"></option>
        <option value="DZD"></option>
        <option value="EGP"></option>
        <option value="ERN"></option>
        <option value="ETB"></option>
        <option value="EUR"></option>
        <option value="FJD"></option>
        <option value="FKP"></option>
        <option value="GBP"></option>
        <option value="GEL"></option>
        <option value="GHS"></option>
        <option value="GIP"></option>
        <option value="GMD"></option>
        <option value="GNF"></option>
        <option value="GTQ"></option>
        <option value="GYD"></option>
        <option value="HKD"></option>
        <option value="HNL"></option>
        <option value="HTG"></option>
        <option value="HUF"></option>
        <option value="IDR"></option>
        <option value="ILS"></option>
        <option value="INR"></option>
        <option value="IQD"></option>
        <option value="IRR"></option>
        <option value="ISK"></option>
        <option value="JMD"></option>
        <option value="JOD"></option>
        <option value="JPY"></option>
        <option value="KES"></option>
        <option value="KGS"></option>
        <option value="KHR"></option>
        <option value="KMF"></option>
        <option value="KPW"></option>
        <option value="KRW"></option>
        <option value="KWD"></option>
        <option value="KYD"></option>
        <option value="KZT"></option>
        <option value="LAK"></option>
        <option value="LBP"></option>
        <option value="LKR"></option>
        <option value="LRD"></option>
        <option value="LSL"></option>
        <option value="LYD"></option>
        <option value="MAD"></option>
        <option value="MDL"></option>
        <option value="MGA"></option>
        <option value="MKD"></option>
        <option value="MMK"></option>
        <option value="MNT"></option>
        <option value="MOP"></option>
        <option value="MRU"></option>
        <option value="MUR"></option>
        <option value="MVR"></option>
        <option value="MWK"></option>
        <option value="MXN"></option>
        <option value="MXV"></option>
        <option value="MYR"></option>
        <option value="MZN"></option>
        <option value="NAD"></option>
        <option value="NGN"></option>
        <option value="NIO"></option>
        <option value="NOK"></option>
        <option value="NPR"></option>
        <option value="NZD"></option>
        <option value="OMR"></option>
        <option value="PAB"></option>
        <option value="PEN"></option>
        <option value="PGK"></option>
        <option value="PHP"></option>
        <option value="PKR"></option>
        <option value="PLN"></option>
        <option value="PYG"></option>
        <option value="QAR"></option>
        <option value="RON"></option>
        <option value="RSD"></option>
        <option value="RUB"></option>
        <option value="RWF"></option>
        <option value="SAR"></option>
        <option value="SBD"></option>
        <option value="SCR"></option>
        <option value="SDG"></option>
        <option value="SEK"></option>
        <option value="SGD"></option>
        <option value="SHP"></option>
        <option value="SLE"></option>
        <option value="SOS"></option>
        <option value="SRD"></option>
        <option value="SSP"></option>
        <option value="STN"></option>
        <option value="SVC"></option>
        <option value="SYP"></option>
        <option value="SZL"></option>
        <option value="THB"></option>
        <option value="TJS"></option>
        <option value="TMT"></option>
        <option value="TND"></option>
        <option value="TOP"></option>
        <option value="TRY"></option>
        <option value="TTD"></option>
        <option value="TWD"></option>
        <option value="TZS"></option>
        <option value="UAH"></option>
        <option value="UGX"></option>
        <option value="USD"></option>
        <option value="USN"></option>
        <option value="UYI"></option>
        <option value="UYU"></option>
        <option value="UYW"></option>
        <option value="UZS"></option>
        <option value="VED"></option>
        <option value="VND"></option>
        <option value="VUV"></option>
        <option value="WST"></option>
        <option value="XAF"></option>
        <option value="XAG"></option>
        <option value="XAU"></option>
        <option value="XBA"></option>
        <option value="XBB"></option>
        <option value="XBC"></option>
        <option value="XBD"></option>
        <option value="XCD"></option>
        <option value="XDR"></option>
        <option value="XOF"></option>
        <option value="XPD"></option>
        <option value="XPF"></option>
        <option value="XPT"></option>
        <option value="XSU"></option>
        <option value="XTS"></option>
        <option value="XXX"></option>
        <option value="YER"></option>
        <option value="ZAR"></option>
        <option value="ZMW"></option>
        <option value="ZWL"></option>
    </datalist>

    <datalist id="attendeeCapacity">
        <option value="10"></option>
        <option value="15"></option>
        <option value="20"></option>
        <option value="25"></option>
        <option value="30"></option>
    </datalist>
@endsection

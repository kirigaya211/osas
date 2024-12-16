@extends('admin.dashboard')

@section('content')


    <div class="p-4 sm:ml-64 ">

        <div class="p-4   dark:border-gray-700 mt-14">
            <div class="grid grid-cols-3 gap-6 mb-6">
                <!-- Pending Card -->
                <div
                    class="flex flex-col items-center justify-between p-4 bg-white rounded-lg shadow-md border-2 border-yellow-400 dark:bg-gray-800 w-full sm:w-auto">
                    <div class="flex flex-col items-center">
                        <div class="p-3 bg-yellow-100 rounded-full mb-2">
                            <svg class="w-8 h-8 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 8v4l3 3m6-3a9 9 0 11-9-9" />
                            </svg>
                        </div>
                        <p class="text-lg sm:text-xl font-semibold text-gray-700 dark:text-gray-200 text-center">Pending</p>
                        <p class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white text-center">
                            {{ $pending }}</p>
                    </div>
                    <div class="mt-2 text-center">
                        <p class="text-sm sm:text-base text-yellow-600 dark:text-yellow-400">
                            <span class="font-bold">{{ number_format($pendingPercentageChange) }}%</span> since last week
                        </p>
                    </div>
                </div>

                <!-- Denied Card -->
                <div
                    class="flex flex-col items-center justify-between p-4 bg-white rounded-lg shadow-md border-2 border-red-400 dark:bg-gray-800 w-full sm:w-auto">
                    <div class="flex flex-col items-center">
                        <div class="p-3 bg-red-100 rounded-full mb-2">
                            <svg class="w-8 h-8 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </div>
                        <p class="text-lg sm:text-xl font-semibold text-gray-700 dark:text-gray-200 text-center">Denied</p>
                        <p class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white text-center">
                            {{ $denied }}</p>
                    </div>
                    <div class="mt-2 text-center">
                        <p class="text-sm sm:text-base text-red-600 dark:text-red-400">
                            <span class="font-bold">{{ number_format($deniedPercentageChange) }}%</span> since last week
                        </p>
                    </div>
                </div>
                <!-- Approved Card -->
                <div
                    class="flex flex-col items-center justify-between p-4 bg-white rounded-lg shadow-md border-2 border-green-400 dark:bg-gray-800 w-full sm:w-auto">
                    <div class="flex flex-col items-center">
                        <div class="p-3 bg-green-100 rounded-full mb-2">
                            <svg class="w-8 h-8 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <p class="text-lg sm:text-xl font-semibold text-gray-700 dark:text-gray-200 text-center">Approved
                        </p>
                        <p class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white text-center">
                            {{ $accept }}</p>
                    </div>
                    <div class="mt-2 text-center">
                        <p class="text-sm sm:text-base text-green-600 dark:text-green-400">
                            <span class="font-bold">{{ number_format($approvedPercentageChange) }}%</span> since last week
                        </p>
                    </div>
                </div>
            </div>

            <div
                class="max-w w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl shadow-lg p-4 md:p-6 ">
                <div class="max-w-full w-full">
                    {{-- start chart --}}
                    <div class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 rounded-lg bg-orange-100 dark:bg-gray-700 flex items-center justify-center me-3">
                                <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                                    <path
                                        d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z" />
                                    <path
                                        d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z" />
                                </svg>
                            </div>

                            <div>

                                <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-1">Total Request
                                </h5>
                                <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Generated Request</p>
                            </div>
                        </div>
                        <div class=" p-4 flex justify-between items-center">

                            <div class="flex space-x-4">

                                <span
                                    class="bg-orange-100 hover:bg-gray-100 hover:border-black text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
                                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                        class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-white hover:text-white-700 dark:hover:white-blue-500 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2"
                                        type="button">
                                        GENERATE REPORT
                                    </button>
                                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M18 9V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h4M9 3v4a1 1 0 0 1-1 1H4m11 6v4m-2-2h4m3 0a5 5 0 1 1-10 0 5 5 0 0 1 10 0Z" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                    </div>
                    <div class="grid grid-cols-2">
                        <dl class="flex items-center">
                            <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal me-1">Number of Application</dt>
                            <dd class="text-gray-900 text-sm dark:text-white font-semibold">{{ $applicationNumber }}</dd>
                        </dl>

                    </div>

                    <!-- Include your bar chart here -->
                    <livewire:column-chart />

                </div>

            </div>

            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>


                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
            </div>


            <div
                class="max-w w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl shadow-lg p-4 md:p-6 ">
                <div class="max-w-full w-full">


                    @livewire('calendar')
                    {{-- <livewire:calendar/> --}}

                </div>
            </div>



            <div class="grid grid-cols-2 gap-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
                    <p class="text-2xl text-gray-400 dark:text-gray-500">
                        <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>





    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Generate New Report
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('data-export.index') }}" method="GET" class="p-4 md:p-5">
                    @csrf
                    <div class="mb-4">
                        <label for="type" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                            Type</label>
                        <select id="type" name="type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="all" selected>All</option>
                            <option value="recognition">Accreditation</option>
                            <option value="reaccreditation">Reaccreditation</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="v" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                            Status</label>
                        <select id="status" name="status"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="all" selected>All</option>
                            <option value="1">Pending</option>
                            <option value="2">Denied</option>
                            <option value="3">Approved</option>
                        </select>
                    </div>
                    <div id="date-range-picker" date-rangepicker class="flex items-center space-x-4 mb-4">
                        <div class="relative w-full">
                            <label for="datepicker-range-start" class="sr-only">Select Date From</label>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input id="datepicker-range-start" name="start" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select date start">
                        </div>
                        <span class="mx-4 text-gray-500">to</span>
                        <div class="relative w-full">
                            <label for="datepicker-range-end"class="sr-only">Select Date To</label>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <input id="datepicker-range-end" name="end" type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Select date end">
                        </div>
                    </div>
                    <div class="mb-6">
                        <label for="fileType" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                            File Type</label>
                        <select id="fileType" name="fileType"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="xlsx" selected>XLSX</option>
                            <option value="csv">CSV</option>
                            <option value="xls">XLS</option>
                        </select>
                    </div>
                    <div class="flex justify-center">
                        <button type="submit"
                            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Generate Report
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

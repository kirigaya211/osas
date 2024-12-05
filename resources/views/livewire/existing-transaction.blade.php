@extends('layout.client')

@section('content')

<div>
    <div class="container mx-auto py-12">
        <h1
            class="text-3xl font-bold text-center mb-12 bg-gradient-to-r from-[#A43B21] to-[#D38F2E] text-transparent bg-clip-text">
            Please Input your Application Number
        </h1>
        <div class="relative w-full">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                    viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd" />
                </svg>
            </div>
            <input wire:model.live.debounce.300ms="search" type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2"
                placeholder="Search" required="">
        </div>
    </div>
    {{-- <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-4 py-3">Status#</th>
                    <th scope="col" class="px-4 py-3">Organization</th>
                    <th scope="col" class="px-4 py-3">Representative</th>
                    <th scope="col" class="px-4 py-3">Email</th>
                    <th scope="col" class="px-4 py-3">Contact</th>
                    <th scope="col" class="px-4 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $user)
                <tr wire:key="{{ $user->StatusID }}" class="border-b dark:border-gray-700">
                    <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->StatusID }}
                    </th>
                    <td class="px-4 py-3">{{ $user->application->OrganizationName ?? 'N/A' }}</td>
                    <td class="px-4 py-3 text-green-500">{{ $user->application->representativeName ?? 'N/A' }}</td>
                    <td class="px-4 py-3">{{ $user->application->representativeEmail ?? 'N/A' }}</td>
                    <td class="px-4 py-3">{{ $user->application->contactNumber ?? 'N/A' }}</td>
                    <td class="px-4 py-3 flex items-center justify-end">
                        <button wire:click="review({{$user->StatusID}})" class="px-3 py-1 bg-red-500 text-white rounded">Review</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}

</div>


@endsection
<div>
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">



        <!-- Card Section with Actual Organization Data -->
        <div
            class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16 bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700">
            <div class="shrink-0 max-w-md lg:max-w-lg mx-auto">
                <div class="mb-4">
                    <a href="{{ route('dashboard.organization') }}"
                        class="hover:text-orange-600 dark:hover:text-orange-400">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </a>

                </div>
                <!-- Organization Logo -->
                <img class="w-full dark:hidden" src="{{ asset('images/Group.png') }}" alt="Organization Logo" />
                <img class="w-full hidden dark:block" src="{{ asset('images/Group.png') }}" alt="Organization Logo" />

            </div>

            <div class="mt-6 sm:mt-8 lg:mt-0">

                <!-- Organization Title -->
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    {{ $organization->OrganizationName ?? 'Organization Title' }}
                </h1>

                <!-- Organization Description -->
                <p class="mt-4 text-gray-700 dark:text-gray-300">
                    {{ $organization->OrganizationDescription ?? 'Description about the organization...' }}
                </p>
                @livewire('calendar')
                <!-- Organization Officers -->
                <h2 class="text-xl font-semibold mt-6 text-gray-900 dark:text-white">Officers</h2>
                <table class="min-w-full bg-white mt-4">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="py-2 px-4 border">Officer Name</th>
                            <th class="py-2 px-4 border">Position</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($organization['members'] as $member)
                            <tr>
                                <td class="border px-4 py-2">{{ $member['name'] }}</td>
                                <td class="border px-4 py-2">{{ $member['position'] }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <hr class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />

                <!-- Edit Button -->
                <div class="flex justify-end mt-6">
                    <button class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600">Edit</button>
                </div>
            </div>
        </div>

    </div>
</div>
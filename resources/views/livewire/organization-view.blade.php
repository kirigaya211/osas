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
                <div class="flex justify-end">
                    <button wire:click="generateCOR({{ $organization->OrganizationID }})" class="btn btn-primary bg-gradient-to-r from-yellow-400 to-red-500 text-white font-bold py-3 px-6 rounded shadow-lg hover:from-yellow-500 hover:to-red-600">
                        Generate COR
                    </button>
                </div>                
                <!-- Organization Title -->
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    {{ $organization->OrganizationName ?? 'Organization Title' }}
                </h1>
                <h4>{{$organization->OrganizationID}}</h4>

                <!-- Organization Description -->
                <p class="mt-4 text-gray-700 dark:text-gray-300">
                    {{ $organization->OrganizationDescription ?? 'Description about the organization...' }}
                </p>
              
                <!-- Organization Officers -->
                <h2 class="text-xl font-semibold mt-6 text-gray-900 dark:text-white">Documents</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4">
                    @foreach ($data as $user)
                        <a wire:click="viewDocument('{{ $user->File }}')" 
                           class="group w-48 h-48 mx-auto rounded-lg overflow-hidden shadow-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 block cursor-pointer transform transition duration-300 hover:scale-105 hover:shadow-2xl">
                            <div class="relative flex flex-col items-center justify-center h-full">
                                <!-- Document Type -->
                                <p class="text-gray-900 dark:text-white text-lg font-semibold mb-2 group-hover:text-green-500 transition duration-200 text-center">
                                    {{ $user->DocumentType ?? 'N/A' }}
                                </p>
                                <!-- Document Creation Date -->
                                <p class="text-gray-500 text-sm text-center">
                                    Uploaded: {{ $user->created_at->format('F d, Y') ?? 'N/A' }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
                
                
                
                
                
                
                    


                <h2 class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />

                <!-- Edit Button -->
               
            </div>
        </div>

    </div>
</div>
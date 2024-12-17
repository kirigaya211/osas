<div>
    <div class="max-w-screen-xl px-4 mx-auto 2xl:px-0">
        <div
            class="lg:grid lg:grid-cols-2 lg:gap-8 xl:gap-16 bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg border border-gray-200 dark:border-gray-700">
            <div class="shrink-0 max-w-md lg:max-w-lg ">
                <div class="mb-4">
                    <a href="{{ route('dashboard.organization') }}"
                        class="hover:text-orange-600 dark:hover:text-orange-400">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </a>

                </div>
                <img class="w-full dark:hidden" src="{{ asset('ProfileFolder/' . $organization->OrganizationLogo) }}" alt="Organization Logo" />
                <img class="w-full hidden dark:block" src="{{ asset('ProfileFolder/' . $organization->OrganizationLogo) }}" alt="Organization Logo" />

            </div>

            <div class="mt-6 sm:mt-8 lg:mt-0">
                
               
                <div class="flex justify-between items-center">
                    <div class="flex w-full lg:w-1/2">
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
                    @if ($organization->OrganizationStatus===1)
                    <button wire:click="generateCOR({{ $organization->OrganizationID }})" class="btn btn-primary bg-gradient-to-r from-yellow-400 to-red-500 text-white font-bold py-3 px-6 rounded shadow-lg hover:from-yellow-500 hover:to-red-600">
                        Generate COR
                    </button>
                    @endif
                    
                </div> 
               
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">
                    {{ $organization->OrganizationName ?? 'Organization Title' }}
                </h1>
                <h4>{{$organization->OrganizationID}}</h4>
                <p class="mt-4 text-gray-700 dark:text-gray-300">
                    {{ $organization->OrganizationDescription ?? 'Description about the organization...' }}
                </p>
                <h2 class="text-xl font-semibold mt-6 text-gray-900 dark:text-white">Documents</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-4">
                    @foreach ($data as $user)
                        <a 
                            wire:click="viewDocument('{{ $user->File }}')" 
                            class="group w-full max-w-xs mx-auto rounded-lg overflow-hidden shadow-lg bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 block cursor-pointer transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl"
                        >
                            <div class="relative flex flex-col items-center justify-center h-full p-8">
                                <p class="text-gray-900 dark:text-white text-lg font-semibold mb-2 text-center group-hover:text-green-500 transition duration-200">
                                    {{ $user->DocumentType ?? 'N/A' }}
                                </p>
                                <p class="text-gray-500 text-sm text-center">
                                    Uploaded: {{ $user->created_at ? $user->created_at->format('F d, Y') : 'N/A' }}
                                </p>
                            </div>
                        </a>
                    @endforeach
                </div>
                <h2 class="my-6 md:my-8 border-gray-200 dark:border-gray-800" />
                <div class="py-4 px-3">
                    <div class="flex flex-col lg:flex-row justify-between items-center">
                        <div class="flex space-x-4 items-center mb-4 lg:mb-0">
                            <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                            <select wire:model.live="perPage"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full lg:w-auto p-2.5">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>

                        <div class="w-full lg:w-auto overflow-x-auto">
                            {{ $data->links() }}
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
</div>
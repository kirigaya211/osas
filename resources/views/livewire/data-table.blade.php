
<div >
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <section>
        <div class="text-center text-2xl font-bold text-gray-800 dark:text-gray-200 mb-4">
            @if($status == 1)
                Pending
            @elseif($status == 2)
                Denied
            @elseif($status == 3)
                Accepted
            @else
                Unknown Status
            @endif
        </div>
        <div class="mt-5 mx-auto max-w-screen-xl">
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex items-center justify-between d p-4">
                    <div class="flex">
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input 
                                wire:model.live.debounce.300ms="search"
                                type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 "
                                placeholder="Search" required="">
                        </div>
                    </div>
                    <div class="flex space-x-3">
                        <div class="flex space-x-3 items-center">
                            <label class="w-40 text-sm font-medium text-gray-900">Type :</label>
                            <select wire:model.live="type"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option value="">All</option>
                                <option value="reaccreditation">Reaccreditation</option>
                                <option value="recognition">Accreditation</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
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
                            @foreach ( $data as $user) 
                            <tr class="border-b dark:border-gray-700">
                                <th scope="row"
                                    class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                   {{ $user->StatusID }}</th>
                                <td class="px-4 py-3">{{  $user->application->OrganizationName ?? 'N/A' }}</td>
                                <td class="px-4 py-3 text-green-500">
                                    {{ $user->application->representativeName ?? 'N/A' }}</td>
                                <td class="px-4 py-3">{{ $user->application->representativeEmail ?? 'N/A' }}</td>
                                <td class="px-4 py-3">{{ $user->application->contactNumber ?? 'N/A' }}</td>
                                <td class="px-4 py-3 flex items-center justify-end">
                                    <button class="px-3 py-1 bg-red-500 text-white rounded">X</button>
                                </td>
                            </tr>
                            @endforeach
                           

                        </tbody>
                    </table>
                </div>
                
                <div class="py-4 px-3">

                    
                    <div class="flex ">
                        <div class="flex space-x-4 items-center mb-3">
                            <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                            <select wire:model.live="perPage"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                       
                    </div>
                    {{ $data->links()}}
                </div>
            </div>
        </div>
    </section>
   
</div>

<div>
    @php
    $roles = [
        1 => 'Admin',
        2 => 'Staff',
        3 => 'Organization',
    ];
    $validated = [
        0 => 'No',
        1 => 'Yes',
    ]
@endphp


    <div class="mt-5 mx-auto max-w-screen-xl">
        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">


            <div class="flex items-center justify-between d p-4">
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

                <div class="flex items-center space-x-2 w-full lg:w-auto">
                    <label class="text-sm font-medium text-gray-900">Type:</label>
                    <select wire:model.live="type"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full lg:w-auto p-2.5">
                        <option value="">All</option>
                        <option value="1">Admin</option>
                        <option value="2">Officer</option>
                        <option value="3">User</option>
                    </select>
                </div>

            </div>



            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="px-4 py-3">Name</th>
                            <th scope="col" class="px-4 py-3">Email</th>
                            <th scope="col" class="px-4 py-3">Role</th>
                            <th scope="col" class="px-4 py-3">Verified_at</th>
                            <th scope="col" class="px-4 py-3">Change Access</th>
                        </tr>
                    </thead>
                    <tbody>
    @foreach ($users as $index => $user)
       
        <tr class="border-b dark:border-gray-700">
            <td class="px-4 py-3">{{ $user->name ?? 'N/A' }}</td>
            <td class="px-4 py-3 text-green-500">{{ $user->email ?? 'N/A' }}</td>
            <td class="px-4 py-3">{{ $roles[$user->role] ?? 'N/A' }}</td>
            <td class="px-4 py-3">{{ $validated[$user->email_verified] ?? 'N/A' }}</td>
            <td class="px-4 py-3 flex items-center">
                <label class="inline-flex items-center cursor-pointer">
                    <input 
                        type="checkbox" 
                        wire:model="userAccess.{{ $user->id }}" 
                        value="1" 
                        wire:click="changeAccess({{ $user->id }})" 
                        class="sr-only peer" 
                        @if($user->email_verified) checked @endif
                    >
                    <div class="relative w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                </label>
            </td>
        </tr>
    @endforeach
</tbody>

                </table>
            </div>
            <div class="py-4 px-3">
                <div class="flex flex-col lg:flex-row justify-between items-center">
                    <div class="flex space-x-4 items-center mb-4 lg:mb-0">
                        <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                        <select wire:model.live="perPage" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full lg:w-auto p-2.5">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>

                    <div class="w-full lg:w-auto overflow-x-auto">
                        {{ $users->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

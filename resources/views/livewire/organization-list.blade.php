<div class="p-9">

    <div class="grid grid-cols-2 items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold">Organization</h1>
            <p class="text-sm text-gray-600">List of Approved Organizations</p>
        </div>
        <div class="flex justify-end space-x-4">
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                Add Organization
            </button>
        </div>
    </div>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
@foreach ($organizations as $organization)
    <div
        class="relative bg-orange-100 border border-gray-200 rounded-lg shadow dark:bg-orange-900 dark:border-gray-700 p-6">
        <a href="#">
            <div class="flex justify-center">
                <div class="bg-white p-3 rounded-full shadow-lg">
                    <img class="w-16 h-16 rounded-full object-cover" src="{{ asset('images/Group.png') }}"
                        alt="Group Image" />
                </div>
            </div>
        </a>
        <div class="text-center mt-4">
            <a href="#">
                <h5 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white break-words">
                    {{ $organization->OrganizationName }}
                </h5>
            </a>
            <p class="text-sm text-gray-600 dark:text-gray-300 overflow-hidden text-ellipsis whitespace-nowrap">
                A brief description of the organization.
            </p>
        </div>
        <div class="mt-6 text-center">
            <a href="#" value = {{ $organization->OrganizationID }}>
                <button class="px-4 py-2 text-white bg-orange-500 rounded-lg shadow hover:bg-orange-700">
                    Learn More
                </button>
            </a>
        </div>
    </div>
@endforeach
</div>  



    
    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <livewire:add-organization />
    </div>
</div>
</div>
</div>

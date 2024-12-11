<div class="p-9">

    <div class="grid grid-cols-2 items-center mb-6">
        <div>
            <h1 class="text-2xl font-bold">Organization</h1>
            <p class="text-sm text-gray-600">List of Approved Organizations</p>
        </div>
        <div class="flex justify-end space-x-4">
            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 focus:outline-none"
                type="button">
                + Add Organization
            </button>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($organizations as $organization)
            <div
                class="relative rounded-lg p-6 {{ $organization->OrganizationStatus === 1 ? 'bg-orange-100 border border-gray-200  shadow dark:bg-orange-900 dark:border-gray-700' : 'bg-gray-300 border-gray-400 dark:bg-gray-800 dark:border-gray-600' }}">
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
                        {{ $organization->cluster ? $organization->cluster->Label : 'No Cluster' }}
                    </p>
                </div>
                <div class="mt-6 text-center">
                    <a href="#" value={{ $organization->OrganizationID }}>
                        <button wire:click="view({{ $organization->OrganizationID }})"
                            class="px-4 py-2 text-white bg-orange-500 rounded-lg shadow hover:bg-orange-700">
                            {{ $organization->OrganizationStatus === 1 ? 'View Organization' : 'Unrecognized' }}
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

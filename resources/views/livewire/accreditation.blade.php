<div>
    <form id="applicationForm" wire:submit.prevent="submit">
        <div class="text-[#D38F2E] text-center text-xl font-semibold rounded-lg p-4 flex items-center justify-center space-x-2 p-12 md:p-10">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c-3.39 0-6 1.343-6 3s2.61 3 6 3 6-1.343 6-3-2.61-3-6-3zm0-7c-2.761 0-5 2.238-5 5s2.239 5 5 5 5-2.238 5-5-2.239-5-5-5z" />
            </svg>
            <span>Step 1: Please Fill Up Your Organization Details</span>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <x-form label="Organization Name" name="organizationName" id="organizationName" required="required"
                wire:model="organizationName" />

            <x-form label="Representative Name" name="representativeName" id="representativeName" required="required"
                wire:model="representativeName" />

            <x-form label="Representative Email" name="representativeEmail" type="email" id="representativeEmail"
                required="required" wire:model="representativeEmail" />

            <x-form label="Contact Number" name="contactNumber" id="contactNumber"
                title="Please enter a valid Philippine phone number starting with 09 or +639" required="required"
                wire:model="contactNumber" />

            <div class="col-span-2">
                <x-form label="Organization Description" name="organizationDescription" textarea="true" rows="6"
                    id="organizationDescription" class="w-full" required="required"
                    wire:model="organizationDescription" />
            </div>
        </div>

        <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Required Documents</h3>
        <ul
            class="w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            @foreach (['Accomplished Application Form', 'Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations', 'Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations', 'Information Sheet of Student Organization Officer', 'List of Organization Members', 'Student Organization Constitution and Bylaws', 'Mission and Vision Statement', 'Resolution', 'Student Organization Official Logo', 'Action and Financial Plan'] as $document)
                <li class="w-full border-b border-gray-200 dark:border-gray-600">
                    <div class="flex items-center p-3">
                        <input id="checkbox{{ $loop->index }}" name="checklist[]" value="{{ $document }}"
                            type="checkbox" wire:model="checklist"
                            class="w-4 h-4 text-[#D38F2E] bg-gray-100 border-gray-300 rounded focus:ring-0 dark:bg-gray-600 dark:border-gray-500">
                        <label for="checkbox{{ $loop->index }}"
                            class="w-full ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            {{ $document }}
                        </label>
                    </div>
                </li>
            @endforeach
        </ul>


        <div>
            @if ($modal)
                <div class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900 bg-opacity-50 transition-opacity duration-300 ease-in-out">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Application Status
                                </h3>
                                <button wire:click="hideModal" type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="default-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                    
                            <div class="p-4 md:p-5 space-y-4">
                                <p class="text-center leading-relaxed text-gray-500 dark:text-gray-400">
                                    {{ session('message') }}
                                </p>
                            </div>
                            <div class="flex justify-center items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button wire:click="confirm" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>




        <div class="items-center mt-6 flex">
            <x-button wire:click="submit"
                class="bg-gradient-to-r from-orange-400 to-red-600 text-white font-bold py-2 px-4 rounded-full shadow-md hover:from-orange-500 hover:to-red-700 ml-auto">
                Submit
            </x-button>
        </div>

    </form>



</div>

<div class="space-y-10">

    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-white text-center mb-6">Application Details</h2>
        <div class="flex justify-center gap-6">
            <div class="text-right font-medium text-gray-700 dark:text-gray-300">Application ID:</div>
            <div class=" text-gray-900 dark:text-white">{{ $applicationID->ApplicationID }}</div>
            
            <div class="text-right font-medium text-gray-700 dark:text-gray-300">Organization Name:</div>
            <div class="text-left text-gray-900 dark:text-white">{{ $applicationID->OrganizationName }}</div>
        </div>
    </div>


    <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 border border-gray-200 dark:bg-gray-700 dark:border-gray-600">
        <h2 class="text-xl font-semibold text-gray-900 dark:text-white text-center mb-6">Checklist</h2>
        <ul class="space-y-4">
            @foreach ($documents as $document)
        @php
            $isChecked = in_array($document, $checklist);
        @endphp
        <li class="w-full border-b border-gray-200 dark:border-gray-600">
            <div class="flex items-center p-3">
                <input id="checkbox{{ $loop->index }}" name="checklist[]"
                    value="{{ $document }}" type="checkbox" wire:model="checklist"
                    class="w-4 h-4 text-[#D38F2E] bg-gray-100 border-gray-300 rounded focus:ring-0 dark:bg-gray-600 dark:border-gray-500"
                    @if ($isChecked) checked @endif
                >
                <label for="checkbox{{ $loop->index }}" class="w-full ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                    {{ $document }}
                </label>
            </div>
        </li>
    @endforeach
        </ul>
    </div>

 
    <div class="mt-4 text-center">
        <button wire:click="saveChecklist"
            class="text-white bg-[#A43B21] hover:bg-[#8b331c] font-medium rounded-[20px] w-[250px] h-[50px]">
            Save Checklist
        </button>
    </div>





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


</div>

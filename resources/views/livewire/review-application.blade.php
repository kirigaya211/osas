<div>

    <div
        class="max-w w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl shadow-lg p-4 md:p-6 ">
        <div class="max-w-full w-full">



            <h1
                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                {{ $user->application->OrganizationName ?? 'N/A' }}</h1>

            <p class="text-gray-700 dark:text-gray-400">{{ $user->application->OrganizationDescription ?? 'N/A' }}</p>
            <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">

            Representative Name: {{ $user->application->representativeName ?? 'N/A' }} <br>
            Representative Email: {{ $user->application->representativeEmail ?? 'N/A' }} <br>
            Representative Phone: {{ $user->application->contactNumber ?? 'N/A' }} <br>
            {{-- Checklist Documents: <br>
            @foreach ($user->application->checklist as $item)
                Document 1: {{ $item->ChecklistID }} <br>                
            @endforeach --}}


            <form>

                <h3 class="mb-4 font-semibold text-gray-900 dark:text-white">Status</h3>
                <ul
                    class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input wire:model="statusChange" id="horizontal-list-radio-license" type="radio" value="1" name="list-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="horizontal-list-radio-license"
                                class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pending
                            </label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input wire:model="statusChange" id="horizontal-list-radio-id" type="radio" value="2" name="list-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="horizontal-list-radio-id"
                                class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Denied
                            </label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input wire:model="statusChange" id="horizontal-list-radio-military" type="radio" value="3" name="list-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="horizontal-list-radio-military"
                                class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Approved
                            </label>
                        </div>
                    </li>

                </ul>


                <div
                    class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                        <label for="feedback" class="sr-only">Your Feedback</label>
                        <textarea wire:model="feedback" id="feedback" rows="4"
                            class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                            placeholder="Write a feedback..." required></textarea>
                    </div>
                    <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                        <button wire:click="updateStatus({{ $user->StatusID }})" type="button"
                            class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                            Post Feedback
                        </button>
                        <div class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">


                        </div>
                    </div>
                </div>
            </form>
            

            <p class="ms-auto text-xs text-gray-500 dark:text-gray-400">Remember to abide always to the  <a href="https://privacy.gov.ph/data-privacy-act/" target="_blank" class="text-blue-600 dark:text-blue-500 hover:underline">Data Privacy Act 2012</a>.</p>

        </div>
    </div>
</div>

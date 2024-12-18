<div>
    <div
        class="max-w w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl shadow-lg p-4 md:p-6 ">
        @if (session()->has('message'))
            <div class="max-w-4xl mx-auto mt-6 bg-white border border-[#A43B21] rounded-lg shadow-md p-6">
                {!! session('message') !!}
            </div>
        @endif

        <div class="max-w-full w-full">
            <div class="mb-4">
                <a href="#" class="hover:text-orange-600 dark:hover:text-orange-400">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </a>
            </div>

            <h1
                class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                {{ $user->application->OrganizationName ?? 'N/A' }}
            </h1>

            <p class="text-gray-700 dark:text-gray-400">{{ $user->application->OrganizationDescription ?? 'N/A' }}</p>
            <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">

            <div style="font-family: Arial, sans-serif; margin: 20px;">


                <div
                    class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-md p-6 mb-6">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Representative Information</h2>

                    <!-- Representative Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">Representative Name</p>
                            <p class="text-lg font-medium text-gray-800 dark:text-gray-200">
                                {{ $user->application->representativeName ?? 'N/A' }}
                            </p>
                        </div>

                        <div>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">Representative Email</p>
                            <p class="text-lg font-medium text-gray-800 dark:text-gray-200">
                                {{ $user->application->representativeEmail ?? 'N/A' }}
                            </p>
                        </div>

                        <div>
                            <p class="text-gray-500 dark:text-gray-400 text-sm">Representative Phone</p>
                            <p class="text-lg font-medium text-gray-800 dark:text-gray-200">
                                {{ $user->application->contactNumber ?? 'N/A' }}
                            </p>
                        </div>
                    </div>
                </div>


                <div
                    class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg shadow-md p-6 mb-6">
                    <h2 class="text-2xl font-bold text-gray-900 dark:text-gray-100 mb-4">Documents Submitted</h2>

                    <ul class="space-y-4">
                        @foreach ($user->application->checklists as $item)
                            <li class="flex items-center space-x-3">
                                <div
                                    class="w-2 h-2 flex items-center justify-center bg-black-600 text-white rounded-full">
                                </div>

                                <!-- Document Name -->
                                <div>
                                    <p class="text-lg font-medium text-gray-800 dark:text-gray-200">
                                        {{ $item->ChecklistID }}
                                    </p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>


            </div>


            <form>

                <ul
                    class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input wire:model="statusChange" id="horizontal-list-radio-license" type="radio"
                                value="1" name="list-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="horizontal-list-radio-license"
                                class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pending
                            </label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input wire:model="statusChange" id="horizontal-list-radio-id" type="radio" value="2"
                                name="list-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                            <label for="horizontal-list-radio-id"
                                class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Denied
                            </label>
                        </div>
                    </li>
                    <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                        <div class="flex items-center ps-3">
                            <input wire:model="statusChange" id="horizontal-list-radio-military" type="radio"
                                value="3" name="list-radio"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                                required>
                            <label for="horizontal-list-radio-military"
                                class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Approved
                            </label>
                        </div>

                    </li>

                </ul>
                @error('statusChange')
                    <p class=" text-center text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror


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
                            class="btn btn-primary bg-gradient-to-r from-yellow-400 to-red-500 inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white rounded shadow-lg hover:from-yellow-500 hover:to-red-600">
                            Post Feedback
                        </button>

                    </div>
                </div>
                <div wire:loading wire:target="updateStatus"
                    class="fixed inset-0 z-50 flex items-center justify-center bg-gray-50 bg-opacity-70">
                    <div role="status" class="flex flex-col items-center">
                        <svg aria-hidden="true" class="w-12 h-12 animate-spin fill-current text-orange-600"
                            viewBox="0 0 100 101" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                fill="currentColor" />
                            <path
                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                fill="currentFill" />
                        </svg>
                        <span class="text-sm text-orange-600 mt-2">Sending email...</span>
                    </div>
                </div>



            </form>


            <p class="ms-auto text-xs text-gray-500 dark:text-gray-400">Remember to abide always to the <a
                    href="https://privacy.gov.ph/data-privacy-act/" target="_blank"
                    class="text-blue-600 dark:text-blue-500 hover:underline">Data Privacy Act 2012</a>.</p>

        </div>
    </div>
</div>

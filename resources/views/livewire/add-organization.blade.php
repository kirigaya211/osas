<div>
    <div>
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div id="crud-modal" class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Add new Organization
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form wire:submit.prevent="submitForm" class="p-6">
                    <div class="text-center mb-6">
                        <label for="logoUpload"
                            class="block text-sm font-medium text-gray-900 dark:text-white mb-2">Organization
                            Logo</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 bg-gray-50 dark:bg-gray-700">
                            <label class="cursor-pointer text-gray-600 dark:text-gray-300" for="logoUpload">
                                Click to upload or drag and drop <br>
                                <span class="text-sm">(SVG, PNG, JPG or GIF) (MAX. 800x400px)</span>
                            </label>
                            <input type="file" name="logo" id="logoUpload" class="hidden">
                        </div>
                    </div>

                    <!-- Organization Name -->
                    <div class="mb-6">
                        <label for="organizationName" class="block text-sm font-medium text-gray-900 dark:text-white">Name of
                            Student Organization</label>
                        <input wire:model="organizationName" type="text" name="organizationName" id="organizationName"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter organization name" required>
                    </div>

                    <!-- President -->
                    <div class="mb-6">
                        <label for="organizationPresident"
                            class="block text-sm font-medium text-gray-900 dark:text-white">President</label>
                        <input wire:model="organizationPresident" type="text" name="organizationPresident" id="organizationPresident"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Enter president's name" required>
                    </div>

                    <button type="submit"
                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Add New Organization
                    </button>
                </form>
            </div>
        </div>


    </div>
<div>
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Organization Information') }}
            </h2>

            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Update your organization information ') }}
            </p>
        </header>

        <form wire:submit.prevent="submit" class="mt-6 space-y-6">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-6">
                <!-- Description -->
                <div class="sm:col-span-6">
                    <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        {{ __('Description') }}
                    </label>
                    <textarea name="description" id="description" wire:model="description"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-gray-300"
                        rows="4" placeholder="{{ __('Enter a description...') }}"></textarea>
                </div>

                <!-- Cluster Dropdown -->
                <div class="sm:col-span-3">
                    <label for="cluster" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                        {{ __('Cluster') }}
                    </label>
                    <select name="cluster" id="cluster" wire:model="cluster"
                        class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-gray-300">
                        <option value="" disabled>{{ __('Select a cluster') }}</option>
                        <!-- Add cluster options dynamically from your model or hardcoded values -->
                        <option value="Academic">{{ __('Academic') }}</option>
                        <option value="Socio-Cultural">{{ __('Socio-Cultural') }}</option>
                        <option value="Sports">{{ __('Sports') }}</option>
                        <option value="Ministry">{{ __('Ministry') }}</option>
                    </select>
                </div>
            </div>

            <!-- Submit Button -->
            <button wire:click="submit"
                class="py-2 px-4 bg-[#A43B21] hover:bg-[#D38F2E] focus:ring-4 focus:ring-[#D38F2E] text-white font-medium rounded-lg text-sm focus:outline-none dark:bg-[#A43B21] dark:hover:bg-[#D38F2E] dark:focus:ring-[#D38F2E]">
                {{ __('Update Organization') }}
            </button>


        </form>

    </section>
</div>

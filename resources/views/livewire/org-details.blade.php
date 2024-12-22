<div class="space-y-8">
    <section class="bg-white p-6 rounded-lg shadow-md dark:bg-gray-800">
        @include('livewire.update-profile')
    </section>
    <section class="bg-white p-6 rounded-lg shadow-md dark:bg-gray-800">
        
        <header class="mb-6">
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                {{ __('Organization Information') }}
            </h2>
            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Update your organization information') }}
            </p>
        </header>

        <div class="grid grid-cols-1 gap-6 sm:grid-cols-6"
        >  
        <div class="mt-2 text-sm text-red-600">
            @if (session()->has('message'))
        {!! session('message') !!}
        @endif
        </div>
        
            <div class="sm:col-span-6">
                <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    {{ __('Description') }}
                </label>
                <textarea name="description" id="description" wire:model="description"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-gray-300"
                    rows="4" placeholder="{{ __('Enter a description...') }}" required="required"></textarea>
                    <div class="mt-2 text-sm text-red-600">
                        {{ $errors->first('description') }}
                    </div>
            </div>
            <div class="sm:col-span-3">
                <label for="cluster" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    {{ __('Cluster') }}
                </label>
                <select name="cluster" id="cluster" wire:model="cluster"
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:text-gray-300" required="required">
                    <option value="" disabled>{{ __('Select a cluster') }}</option>
                    <option value="2">{{ __('Academic') }}</option>
                    <option value="3">{{ __('Socio-Cultural') }}</option>
                    <option value="4">{{ __('Sports') }}</option>
                    <option value="5">{{ __('Ministry') }}</option>
                </select>
                <div class="mt-2 text-sm text-red-600">
                    {{ $errors->first('cluster') }}
                </div>

               
            </div>
        </div>
        <div class="mt-3">
            <button wire:click="submitOrg" type="submit"
            class="btn btn-primary bg-gradient-to-r from-yellow-400 to-red-500 text-white font-bold py-1 px-4 rounded shadow-lg hover:from-yellow-500 hover:to-red-600">
                {{ __('Save') }}
            </button>
        </div>
    </section>
    <section class="bg-white p-6 rounded-lg shadow-md dark:bg-gray-800">
        @include('profile.partials.update-password-form')
    </section>
    <section class="bg-white p-6 rounded-lg shadow-md dark:bg-gray-800">
        @livewire('calendar')
    </section>
</div>

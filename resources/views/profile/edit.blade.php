<x-app-layout>
    <x-slot name="header">
        @include('components.navbar')
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Center the form content -->
            <div class="flex justify-center">
                <div class="w-full max-w-2xl">
                    @if (Auth::user()->role === 1 || Auth::user()->role === 2)
                        <div class="p-6 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
                            <div class="max-w-xl mx-auto">
                                @include('livewire.update-profile')
                            </div>
                        </div>
                    @endif
                    <!-- Profile Information Section -->
                    @if (Auth::user()->role === 1 || Auth::user()->role === 2)
                        <div class="mt-6 p-6 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
                            <div class="max-w-xl mx-auto">
                                @include('profile.partials.update-profile-information-form')
                            </div>
                        </div>
                    @endif
                    <!-- Password Update Section -->
                    <div class="mt-6 p-6 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
                        <div class="max-w-xl mx-auto">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                    <!-- Delete User Section (only visible for role 1 users) -->
                    @if (Auth::user()->role === 1)
                        <div class="mt-6 p-6 bg-white dark:bg-gray-800 shadow-lg rounded-lg">
                            <div class="max-w-xl mx-auto">
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div>
                    @endif


                </div>
            </div>
        </div>
    </div>
</x-app-layout>

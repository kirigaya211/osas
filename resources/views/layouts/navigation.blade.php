<nav class="bg-white shadow w-full border-b-4 border-red-600">
    <div class="container mx-auto p-2 flex justify-between items-center">
        <!-- Logo and Title Section -->
        <div class="flex items-center space-x-2">
            <img src="{{ asset('images/OSAS-Logo.png') }}" alt="Logo" class="h-12">
            <div>
                <h1 class="text-lg font-bold text-orange-900">Student Organization Portal</h1>
               
            </div>
        </div>

        <!-- Right Section: Dashboard and Authenticated User Settings Dropdown -->
        <div class="flex items-center space-x-6">
            <!-- Dashboard Link -->
            <div>
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-nav-link>
            </div>

        <!-- Authenticated User Settings Dropdown -->
@auth
<div class="text-right">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-orange-600 dark:text-orange-400 bg-white dark:bg-gray-800 hover:text-red-600 dark:hover:text-red-300 focus:outline-none transition ease-in-out duration-150">
                <div>{{ Auth::user()->name }}</div>
                <div class="ml-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </x-slot>

        <x-slot name="content">
            <!-- Profile Link -->
            <x-dropdown-link :href="route('profile.edit')" class="text-orange-600 hover:text-red-600">
                {{ __('Profile') }}
            </x-dropdown-link>

            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')" class="text-orange-600 hover:text-red-600"
                                 onclick="event.preventDefault();
                                 this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
</div>
@endauth

<!-- Hamburger for mobile -->
<div class="-mr-2 flex items-center sm:hidden">
    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-orange-600 hover:text-red-600 focus:outline-none transition duration-150 ease-in-out">
        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
            <path :class="{ 'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            <path :class="{ 'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
</div>

<!-- Responsive Menu for Mobile -->
<div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
    <div class="pt-2 pb-3 space-y-1">
        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-orange-600 hover:text-red-600">
            {{ __('Dashboard') }}
        </x-responsive-nav-link>
    </div>

    <!-- Responsive Auth Links -->
    <div class="pt-4 pb-1 border-t border-gray-200">
        <div class="px-4">
            <div class="font-medium text-base text-orange-600 dark:text-orange-400">{{ Auth::user()->name }}</div>
            <div class="font-medium text-sm text-orange-500 dark:text-orange-300">{{ Auth::user()->email }}</div>
        </div>

        <div class="mt-3 space-y-1">
            <x-responsive-nav-link :href="route('profile.edit')" class="text-orange-600 hover:text-red-600">
                {{ __('Profile') }}
            </x-responsive-nav-link>

            <!-- Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-responsive-nav-link :href="route('logout')" class="text-orange-600 hover:text-red-600"
                                       onclick="event.preventDefault();
                                                 this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-responsive-nav-link>
            </form>
        </div>
    </div>
</div>


</nav>

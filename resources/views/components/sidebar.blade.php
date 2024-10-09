
    {{-- <div>
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/OSAS Logo.png') }}" alt="OSAS Logo" class="h-32">
        </div>
        <nav class="flex flex-col space-y-4">
            <a href="{{ route('dashboard') }}" class="flex items-center py-2 px-4 rounded text-black font-semibold bg-[#FAF3E3] hover:bg-white hover:text-[#A43B21]">
                <img src="{{ asset('images/overview.png') }}" alt="Overview Icon" class="h-5 w-5 mr-2">
                Overview
            </a>
            <a href="{{ route('dashboard.pending') }}" class="flex items-center py-2 px-4 rounded text-white hover:bg-[#FAF3E3] hover:text-black">
                <img src="{{ asset('images/pending.png') }}" alt="Pending Request Icon" class="h-5 w-5 mr-2">
                Pending Request
            </a>
            <a href="{{ route('dashboard.approve') }}" class="flex items-center py-2 px-4 rounded text-white hover:bg-[#FAF3E3] hover:text-black">
                <img src="{{ asset('images/approved.png') }}" alt="Approved Request Icon" class="h-5 w-5 mr-2">
                Approved Request
            </a>
            <a href="{{ route('dashboard.denied') }}" class="flex items-center py-2 px-4 rounded text-white hover:bg-[#FAF3E3] hover:text-black">
                <img src="{{ asset('images/group.png') }}" alt="Denied Request Icon" class="h-5 w-5 mr-2">
                Denied Request
            </a>
            <a href="{{ route('dashboard.organization') }}" class="flex items-center py-2 px-4 rounded text-white hover:bg-[#FAF3E3] hover:text-black">
                <img src="{{ asset('images/pending.png') }}" alt="Pending Request Icon" class="h-5 w-5 mr-2">
                Organization
            </a>


            <div class="hidden sm:flex sm:items-center sm:ms-6 mt-6">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                <div>{{ Auth::user()->name }}</div>
                <div class="ms-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </x-slot>

        <x-slot name="content">
            <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg z-50 bg-white">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </div>
        </x-slot>
    </x-dropdown>
</div>




        </nav>
    </div> --}}


 
 <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-red-700
       <ul class="space-y-2 font-medium " style="list-style-type: none";>
          <li>
            <div class="flex justify-center mb-6">
                <img src="{{ asset('images/OSAS-Logo.png') }}" alt="OSAS Logo" class="h-32">
            </div>
             <a href="{{ route("dashboard") }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                  <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
                </svg>
                
                <span class="ms-3">Overview</span>
             </a>
          </li>
          <li>
             <a href="{{ route("dashboard.pending") }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                  <path d="M9 0C4.029 0 0 4.029 0 9s4.029 9 9 9 9-4.029 9-9S13.971 0 9 0zm0 16.2A7.2 7.2 0 1 1 9 1.8a7.2 7.2 0 0 1 0 14.4zm3.6-7.2H9V4.8a.6.6 0 0 0-1.2 0v4.8a.6.6 0 0 0 .6.6h4.2a.6.6 0 0 0 0-1.2z"/>
                </svg>
                
                
                <span class="flex-1 ms-3 whitespace-nowrap">Pending Request</span>
                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
             </a>
          </li>
          <li>
             <a href="{{ route("dashboard.approve") }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.33333 20V8.33333H0V20H3.33333Z" fill="currentColor"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.33333 5.39345L6.66667 8.72678V18.3333H15.6366L18.3333 12.9399V9.16667C18.3333 8.70643 17.9602 8.33333 17.5 8.33333H10V2.5C10 2.03976 9.6269 1.66667 9.16667 1.66667H8.33333V5.39345ZM6.66667 0H9.16667C10.5474 0 11.6667 1.11929 11.6667 2.5V6.66667H17.5C18.8807 6.66667 20 7.78595 20 9.16667V13.3333L16.6667 20H5V8.33333L6.66667 5V0Z" fill="currentColor"/>
                </svg>
                
                
                <span class="flex-1 ms-3 whitespace-nowrap">Approved Request</span>
                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
             </a>
          </li>
          <li>
             <a href="{{ route("dashboard.denied") }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
               <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3.33333 0V11.6667H0V0H3.33333Z" fill="currentColor"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M8.33333 14.6066L6.66667 11.2732V1.66667H15.6366L18.3333 7.06011V10.8333C18.3333 11.2936 17.9602 11.6667 17.5 11.6667H10V17.5C10 17.9602 9.6269 18.3333 9.16667 18.3333H8.33333V14.6066ZM6.66667 20H9.16667C10.5474 20 11.6667 18.8807 11.6667 17.5V13.3333H17.5C18.8807 13.3333 20 12.214 20 10.8333V6.66667L16.6667 0H5V11.6667L6.66667 15V20Z" fill="currentColor"/>
                </svg>
                
                <span class="flex-1 ms-3 whitespace-nowrap">Disapproved Request</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                   <path d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z"/>
                </svg>
                <span class="flex-1 ms-3 whitespace-nowrap">Organization</span>
             </a>
          </li>
          <li>
    <!-- Fixed position for the dropdown at the bottom-right of the screen -->
<div class="hidden sm:flex sm:items-center sm:ms-6 mt-6 fixed bottom-5 right-0 mb-4 mr-20">
    <x-dropdown align="right" width="48">
        <!-- Dropdown trigger button -->
        <x-slot name="trigger">
            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                <div>{{ Auth::user()->name }}</div>
                <div class="ms-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </x-slot>

        <!-- Dropdown content -->
        <x-slot name="content">
            <x-dropdown-link :href="route('profile.edit')">
                {{ __('Profile') }}
            </x-dropdown-link>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
</div>

          </li>
       </ul>
    </div>
 </aside>
 

 <script>
    document.addEventListener('DOMContentLoaded', function () {
        const dropdownTrigger = document.getElementById('dropdownTrigger');
        const dropdownMenu = document.getElementById('dropdownMenu');

        // Toggle dropdown menu visibility on trigger button click
        dropdownTrigger.addEventListener('click', function (event) {
            event.stopPropagation(); // Prevent the click event from propagating to the document
            dropdownMenu.classList.toggle('hidden');
        });

        // Close the dropdown when clicking outside of it
        document.addEventListener('click', function (event) {
            if (!dropdownMenu.contains(event.target) && !dropdownTrigger.contains(event.target)) {
                dropdownMenu.classList.add('hidden');
            }
        });
    });
</script>
 

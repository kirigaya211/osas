@vite(['resources/css/app.css', 'resources/js/app.js'])

<div class="flex items-center justify-center min-h-screen bg-cover bg-center" style="background-image: url('/path/to/your/background-image.jpg');">
    <svg class="absolute top-0 left-0 transform -translate-x-1/2 -translate-y-1/2 opacity-40" width="700" height="700" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="350" cy="350" r="350" fill="#f0ad4e"/>
    </svg>

    <svg class="absolute bottom-0 right-0 transform translate-x-1/2 translate-y-1/2 opacity-40" width="500" height="500" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="0" y="0" width="500" height="500" fill="#E6B980" rx="150"/>
    </svg>
    <div class="bg-white bg-opacity-90 p-8 rounded-xl shadow-xl border-2 border-[#E6B980] max-w-sm w-full">
        <img src="{{ asset('images/OSAS logo11.png') }}" alt="Logo" class="mx-auto mb-6 w-20">

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="mb-4 text-left">
                <label for="name" class="block text-sm font-bold text-gray-700">Name</label>
                <input id="name" class="block mt-1 w-full border border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mb-4 text-left">
                <label for="email" class="block text-sm font-bold text-gray-700">Email</label>
                <input id="email" class="block mt-1 w-full border border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-4 text-left">
                <label for="password" class="block text-sm font-bold text-gray-700">Password</label>
                <input id="password" class="block mt-1 w-full border border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500" type="password" name="password" required autocomplete="new-password" />
                <error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-4 text-left">
                <label for="password_confirmation" class="block text-sm font-bold text-gray-700">Confirm Password</label>
                <input id="password_confirmation" class="block mt-1 w-full border border-gray-300 rounded-md focus:ring-orange-500 focus:border-orange-500" type="password" name="password_confirmation" required autocomplete="new-password" />
                <error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Already Registered Link and Register Button -->
            <div class="flex justify-between items-center mt-6">
                <a class="text-sm text-orange-500 hover:text-orange-700" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded-lg shadow-lg focus:outline-none">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
</div>
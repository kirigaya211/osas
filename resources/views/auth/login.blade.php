@vite(['resources/css/app.css', 'resources/js/app.js'])

@if (session('error'))
    <!-- Alert Dialog -->
    <script>
        alert('{{ session('error') }}');
    </script>
@endif

<div class="relative flex items-center justify-center min-h-screen bg-white backdrop-blur-lg overflow-hidden">
    <!-- Decorative Shape -->
    <svg class="absolute top-0 left-0 transform -translate-x-1/2 -translate-y-1/2 opacity-40" width="700" height="700" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="350" cy="350" r="350" fill="#f0ad4e"/>
    </svg>

    <svg class="absolute bottom-0 right-0 transform translate-x-1/2 translate-y-1/2 opacity-40" width="500" height="500" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="0" y="0" width="500" height="500" fill="#E6B980" rx="150"/>
    </svg>

    <div class="relative z-10 bg-white bg-opacity-90 p-8 rounded-xl shadow-xl border-2 border-[#E6B980] max-w-sm w-full text-center">
        <img src="{{ asset('images/OSAS-Logo.png') }}" alt="Logo" class="mx-auto mb-6 w-20">

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-medium">{{ __('Email Address') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" placeholder="email" class="block w-full mt-1 p-3 rounded-lg border-gray-300 focus:ring-yellow-500 focus:border-yellow-500 shadow-sm">
                @error('email')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-medium">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="password" class="block w-full mt-1 p-3 rounded-lg border-gray-300 focus:ring-yellow-500 focus:border-yellow-500 shadow-sm">
                @error('password')
                    <span class="text-red-500 text-sm mt-2">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center justify-start mb-4">
                <input id="remember_me" type="checkbox" name="remember" class="h-4 w-4 text-yellow-600 border-gray-300 rounded focus:ring-yellow-500">
                <label for="remember_me" class="ml-2 block text-sm text-gray-900">{{ __('Remember me') }}</label>
            </div>

            <!-- Log In Button -->
            <button type="submit" class="w-full py-3 rounded-lg bg-gradient-to-r from-[#DD941F] to-[#f0ad4e] text-white font-semibold shadow-lg hover:from-[#b37318] hover:to-[#d08941] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                {{ __('LOG IN') }}
            </button>

            <!-- Forgot Password Link -->
            <div class="mt-4">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:text-gray-900">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</div>

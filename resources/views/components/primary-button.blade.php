<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gradient-to-r from-yellow-400 to-red-500 text-white font-bold border border-transparent rounded-md text-xs uppercase tracking-widest hover:from-yellow-500 hover:to-red-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

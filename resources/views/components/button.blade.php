{{-- resources/views/components/button.blade.php --}}
@if ($attributes->has('href'))
    <a {{ $attributes->merge(['class' => 'inline-flex items-center justify-center px-4 py-2.5 text-white bg-[#A43B21] hover:bg-[#8b331c] focus:ring-4 focus:outline-none focus:ring-[#DD941F] font-medium rounded-[20px] w-[250px] h-[50px] shadow-md transition-all duration-300 transform hover:scale-105']) }}>
        {{ $slot }}
    </a>
@else
    <button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center justify-center px-4 py-2.5 text-white bg-[#A43B21] hover:bg-[#8b331c] focus:ring-4 focus:outline-none focus:ring-[#DD941F] font-medium rounded-[20px] w-[250px] h-[50px] shadow-md transition-all duration-300 transform hover:scale-105']) }}>
        {{ $slot }}
    </button>
@endif

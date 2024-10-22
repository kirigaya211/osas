@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-orange-400 dark:border-orange-600 text-sm font-medium leading-5 text-orange-600 dark:text-orange-600 focus:outline-none focus:border-orange-500 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-red-700 dark:text-orange-400 hover:text-red-600 hover:border-red-600 focus:outline-none focus:text-red-600 dark:focus:text-red-600 focus:border-red-600 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

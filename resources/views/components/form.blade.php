@props([
    'label',
    'name',
    'type' => 'text',
    'value' => '',
    'rows' => 4,
    'textarea' => false
])

@if($textarea)
    <div class="relative z-0 mb-6 w-full group">
        <textarea name="{{ $name }}" id="{{ $name }}" rows="{{ $rows }}"
            {{ $attributes->merge(['class' => 'block p-2.5 w-full text-lg text-gray-900 bg-transparent border-2 border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-0 focus:border-orange-600 peer placeholder-transparent']) }}>{{ old($name, $value) }}</textarea>
        <label for="{{ $name }}"
            class="absolute text-lg text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 left-4 bg-white px-2 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:top-1/2 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:text-orange-600">
            {{ $label }}
        </label>
    </div>
@else
    <div class="relative z-0 mb-6 w-full group">
        <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" value="{{ old($name, $value) }}"
            {{ $attributes->merge(['class' => 'block w-full py-2.5 px-4 text-lg text-gray-900 bg-transparent border-2 border-gray-300 rounded-lg appearance-none focus:outline-none focus:ring-0 focus:border-orange-600 peer']) }} placeholder=" " />
        <label for="{{ $name }}"
            class="absolute text-lg text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 left-4 bg-white px-2 origin-[0] peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 peer-focus:text-orange-600">
            {{ $label }}
        </label>
    </div>
@endif
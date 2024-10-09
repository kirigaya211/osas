<!-- resources/views/components/custom-checkbox.blade.php -->
<div class="flex items-center custom-checkbox shadow p-4 rounded-lg">
    <input id="{{ $id }}" type="checkbox" name="{{ $name }}" value="{{ $value }}" class="hidden peer">
    <label for="{{ $id }}" class="w-6 h-6 bg-white border-2 border-gray-300 rounded-md flex items-center justify-center peer-checked:bg-[#D38F2E] peer-checked:border-[#D38F2E] relative">
        <svg class="hidden w-4 h-4 text-white peer-checked:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path fill-rule="evenodd" d="M10 18l-6-6 1.414-1.414L10 15.172l8.586-8.586L20 8l-10 10z" clip-rule="evenodd" />
        </svg>
    </label>
    <span class="ml-3 text-lg font-medium text-gray-900">{{ $label }}</span>
</div>

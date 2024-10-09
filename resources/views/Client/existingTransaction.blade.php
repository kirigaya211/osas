@extends('layout.client')

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-3xl font-bold text-center mb-12 bg-gradient-to-r from-[#A43B21] to-[#D38F2E] text-transparent bg-clip-text">
        Please Input your Application Number
    </h1>

    <form action="{{ route('searchExistingTransaction') }}" method="POST" class="flex justify-center">
        @csrf
        <div class="flex items-center">
            <input type="text" name="application_number" placeholder="0000-0000-0000"
                   class="py-3 px-4 text-lg border-2 border-[#A43B21] rounded-l-lg focus:outline-none focus:ring-2 focus:ring-[#D38F2E]" required>
            <button type="submit" class="bg-gradient-to-r from-[#A43B21] to-[#D38F2E] text-white py-3 px-4 rounded-r-lg hover:from-[#D38F2E] hover:to-[#A43B21] focus:outline-none focus:ring-2 focus:ring-[#D38F2E]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l5.586-5.586a2 2 0 000-2.828L10 4" />
                </svg>
            </button>
        </div>
    </form>
</div>
@endsection
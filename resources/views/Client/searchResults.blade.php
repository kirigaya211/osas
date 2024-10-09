@extends('layout.client')
@include('components.navbar')
@section('application-type-header')
    <x-application-type-header>
        Search Results
    </x-application-type-header>
@endsection

@section('content')
<div class="container mx-auto py-12">
    <h1 class="text-3xl font-bold text-center mb-12 bg-gradient-to-r from-[#A43B21] to-[#D38F2E] text-transparent bg-clip-text">
        Please see <span class="text-[#D38F2E]">Results</span>:
    </h1>

    <div class="flex justify-center">
        <div class="bg-white rounded-lg border-2 border-gray-300 shadow-lg p-8 w-full md:w-2/3">
            <div class="text-center mb-8">
                <p class="text-lg font-semibold">Organization</p>
                <h2 class="text-2xl font-bold text-[#A43B21]">{{$searchApplication->OrganizationName}}</h2>

                <p class="text-lg font-semibold mt-4">Request Type</p>
                <h3 class="text-xl font-bold text-[#A43B21]">{{$searchApplication->Type}}</h3>

                <p class="text-lg font-semibold mt-4">Status</p>
                <h3 class="text-xl font-bold text-[#D38F2E]">{{$searchStatus->statusType}}</h3>
                <p class="text-sm text-gray-500 mt-2">{{$searchStatus->updated_at}}</p>
            </div>

            <div class="mt-8 flex justify-center">
                <form action="{{ route('confirmationRoute') }}" method="POST">
                    @csrf
                    <button type="submit" class="bg-gradient-to-r from-[#FFC107] to-[#FF5722] text-white py-2 px-6 rounded-lg font-bold shadow-lg hover:from-[#FFB300] hover:to-[#E64A19]">
                        Yes, this is correct!
                    </button>
                </form>
            </div>

            <div class="mt-4 text-center">
                <a href="{{ route('retryRoute') }}" class="text-red-500 underline text-sm">
                    This is not my request, retry
                </a>
            </div>
        </div>
    </div>
</div>


@endsection
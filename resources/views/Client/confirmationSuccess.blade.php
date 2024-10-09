@extends('layout.client')
@include('components.navbar')
@section('application-type-header')
    <x-application-type-header>
        Confirmation
    </x-application-type-header>
@endsection
@section('content')
<div class="container mx-auto py-12">
    <div class="bg-white shadow-lg rounded-lg p-6 md:p-12 text-center">
        <div class="mb-8">
            <h1 class="text-3xl font-bold mb-4">Confirmation</h1>
            <p class="text-lg">Your application has been successfully confirmed with the following details:</p>
        </div>

        <div class="space-y-2 text-left">
            <p><strong>Organization Name:</strong> {{ $organizationName }}</p>
            <p><strong>Representative Name:</strong> {{ $representativeName }}</p>
            <p><strong>Representative Email:</strong> {{ $representativeEmail }}</p>
            <p><strong>Contact Number:</strong> {{ $contactNumber }}</p>
        </div>

        <div class="mt-8 text-center">
            <h2 class="text-2xl font-bold mb-2">Your Application Number</h2>
            <h1 class="text-4xl font-extrabold text-[#A43B21] tracking-widest">{{ $applicationNumber }}</h1>
            <p class="text-lg mt-4">Please be seated. You will be served shortly.</p>
        </div>

        <!-- Go Back Button -->
        <div class="flex justify-center mt-8">
            <x-button href="{{ route('existingTransaction') }}" class="bg-gradient-to-r from-[#FFC107] to-[#FF5722] text-white py-2 px-4 rounded-lg">
                Go Back
            </x-button>
        </div>
    </div>
</div>
@endsection
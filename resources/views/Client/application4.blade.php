@extends('layout.client')
@section('title', 'Application Complete')

@section('application-type-header')
    <x-application-type-header>
        {{ $type === "recognition" ? 'RECOGNITION APPLICATION' : 'RE-ACCREDITATION APPLICATION' }}
    </x-application-type-header>
@endsection



@section('content')
<div class="bg-white rounded-b-xl p-12 md:p-10">
    <!-- Step 4: Application Complete -->
    <div class="bg-green-100 text-green-700 p-6 rounded-lg shadow-lg text-center">
        <h2 class="text-2xl font-bold mb-4">Congratulations!</h2>
        <p class="text-lg mb-4">Your application has been successfully submitted.</p>
        <p class="text-lg mb-4">Your Application Number is:</p>
        <!-- Displaying the application number passed from the controller -->
        <p class="text-3xl font-bold text-green-800 mb-4">{{ $applicationNumber }}</p>
        <p class="text-md">Please keep this number for your records. You can use it to track the status of your application.</p>
    </div>

    <div class="flex justify-center mt-8">
        <x-button href="{{ route('landingpage') }}" class="bg-gradient-to-r from-blue-500 to-blue-700 text-white font-bold py-2 px-4 rounded-full shadow-lg hover:from-blue-600 hover:to-blue-800">
            Back to Home
        </x-button>
    </div>
</div>
@endsection

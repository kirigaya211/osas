@extends('landingPage.landingpage')

@section('content')

    <main class="flex-grow container mx-auto p-6 flex flex-col md:flex-row items-center justify-between md:justify-around">
        <div class="max-w-lg mb-6 md:mb-0">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Welcome to the Application Portal for Student Organizations!</h2>
            <p class="text-gray-700 mb-6">
                We value the contributions of student organizations to our vibrant campus life. This portal will guide you through the steps to apply for recognition and re-accreditation. Please review the requirements carefully and prepare your documents in advance. Your efforts help us maintain a dynamic and inclusive environment for all students.
            </p>
          
            <a href="{{ route('application') }}" class="btn btn-primary bg-gradient-to-r from-yellow-400 to-red-500 text-white font-bold py-2 px-4 rounded shadow-lg hover:from-yellow-500 hover:to-red-600">Get Started</a>
        </div>
        <div class="flex justify-center md:justify-end w-full md:w-auto">
            <img src="{{ asset('images/Group.png') }}" alt="Illustration" class="h-auto w-80 md:w-96">
        </div>
    </main>
@endsection

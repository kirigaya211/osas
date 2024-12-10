@extends('landingPage.landingpage')

@section('content')
    <main class="flex-grow container mx-auto p-10 flex flex-col md:flex-row items-center justify-between md:justify-center">
        <div class="max-w-2xl mb-6 md:mb-0 md:mr-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4 md:text-left ">
                Welcome to the Application Portal for Student Organizations!
            </h2>
            <p class="text-gray-700 mb-6 md:text-left leading-relaxed text-justify max-w-2xl">
                We value the contributions of student organizations to our vibrant campus life. This portal will guide you
                through the steps to apply for recognition and re-accreditation. Please review the requirements carefully
                and prepare your documents in advance. Your efforts help us maintain a dynamic and inclusive environment for
                all students.
            </p>


            <div class="flex justify-start">
                <a href="{{ route('application') }}"
                    class="btn btn-primary bg-gradient-to-r from-yellow-400 to-red-500 text-white font-bold py-3 px-6 rounded shadow-lg hover:from-yellow-500 hover:to-red-600">
                    Get Started
                </a>
            </div>
        </div>


        <div class="flex md:justify-start justify-center w-full md:w-auto">
            <img src="{{ asset('images/landpage.jpg') }}" alt="Illustration" class="h-auto w-30 md:w-[35rem] md:ml-[2rem]">
        </div>
    </main>
@endsection

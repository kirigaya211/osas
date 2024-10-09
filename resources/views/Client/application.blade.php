@extends('layout.client')

@section('navbar')
    <x-Navbar />
@endsection

@section('content')

<div class="container max-w-screen-xl mx-auto p-9">

    <div class="text-center">
    <h1 class="text-6xl font-bold mb-3" style="padding-top: 4rem; background: linear-gradient(to right, #A43B21, #D38F2E); -webkit-background-clip: text; color: transparent;">
    APPLICATION FOR STUDENT ORGANIZATIONS
    </h1>

    <p class="text-2xl text-gray-700 mb-12 px-4 py-4">Complete the Necessary Documents for Application of New or Renewal of Student Organizations</p>


    <div class="flex flex-col md:flex-row justify-center space-x-4 mb-20">
    <!-- New Student Organization Card -->
    <div class="card flex-1 bg-[#FFFFFF] rounded-lg p-6 md:p-8 hover:shadow-2xl transition-shadow duration-300 mb-4 md:mb-0 cursor-pointer border-1 border-[#CDB6B6]" onclick="showStartButton('recognition')">
        <div class="flex justify-center mb-4">
        <img src="http://127.0.0.1:8000/images/new.svg" alt="New Icon" class="h-30">

        </div>
        <h2 class="text-xl font-bold text-[#A43B21] mb-2 text-center">NEW</h2>
        <p class="text-xl text-gray-700 text-center">Newly organized student organizations or inactive for more than one school year with at least fifteen (15) founding members</p>
    </div>

    <!-- Renewal of Student Organization Card -->
    <div class="card flex-1 bg-[#FFFFFF] rounded-lg p-6 md:p-8 hover:shadow-2xl transition-shadow duration-300 mb-4 md:mb-0 cursor-pointer border-1 border-[#CDB6B6]" onclick="showStartButton('reaccreditation')">
        <div class="flex justify-center mb-4">
            <img src="http://127.0.0.1:8000/images/renewal.svg" alt="Renewal Icon" class="h-">
        </div>
        <h2 class="text-xl font-bold text-[#A43B21] mb-2 text-center">RENEWAL</h2>
        <p class="text-gray-700 text-center">Student organization previously granted recognition</p>
    </div>
</div>

<!-- Recognition Requirements -->
<div id="requirements-section" class="mt-20 text-center">
    <div id="recognition-requirements" class="hidden">
        <div class="bg-gray-200 p-8 rounded-lg shadow-lg border-2 border-dashed border-[#A43B21]"> <!-- Added dashed border to the entire section -->
            <h3 class="text-3xl font-extrabold text-[#A43B21] mb-6 text-center flex items-center justify-center px-4 py-4">
                <div class="relative group">
                    <svg class="w-6 h-6 mr-2 animate-bounce cursor-pointer text-[#A43B21]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354v15.292M16.24 6.34L7.76 17.66M20 12H4"></path>
                    </svg>
                    <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-48 p-2 bg-gray-800 text-white text-sm rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
                        These documents are required for new student organizations.
                    </div>
                </div>
                Required Attachments for New Organization
            </h3>

            <ul class="list-none text-gray-700 space-y-3">
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-[#A43B21] mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Accomplished Application Form
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-[#A43B21] mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Certificate of Involvement/Commitment/ Acceptance of the Adviser of Student Organizations
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-[#A43B21] mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Certificate of Involvement/Commitment/ Acceptance of the President of Student Organizations
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-[#A43B21] mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Information Sheet of Student Organization Officer
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-[#A43B21] mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    List of Organization Members
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-[#A43B21] mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Student Organization Constitution and Bylaws
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-[#A43B21] mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Mission and Vision Statement
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-[#A43B21] mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Resolution
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-[#A43B21] mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Student Organization Official Logo
                </li>
                <li class="flex items-start">
                    <svg class="w-5 h-5 text-[#A43B21] mr-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                    </svg>
                    Action and Financial Plan
                </li>
            </ul>
            <div class="mt-8 flex flex-col items-center space-y-4">
                <!-- Centered and spaced the buttons with Flowbite utility classes -->
                <button id="start-button-recognition" data-modal-target="privacy-modal" data-modal-toggle="privacy-modal" class="text-white bg-[#A43B21] hover:bg-[#8b331c] focus:ring-4 focus:outline-none focus:ring-[#DD941F] font-medium rounded-[20px] w-[250px] h-[50px] shadow-md transition-all duration-300 transform hover:scale-105">
                    Start
                </button>

                <a href="{{ route('existingTransaction') }}" class="text-[#A43B21] hover:text-white border-2 border-[#A43B21] hover:bg-[#A43B21] focus:ring-4 focus:outline-none focus:ring-[#DD941F] font-medium rounded-lg text-sm px-5 py-2.5 text-center transition-colors duration-300">
                    I already have an existing Application
                </a>
            </div>
        </div>
    </div> <!-- End of the wrapper div -->
</div>


<!-- Reaccreditation Requirements -->
<div id="reaccreditation-requirements" class="hidden">
    <div class="bg-gray-200 p-8 rounded-lg shadow-lg border-2 border-dashed border-[#A43B21]"> <!-- Added dashed border -->
        <h3 class="text-3xl font-extrabold text-[#A43B21] mb-6 text-center flex items-center justify-center px-4 py-4">
            <div class="relative group">
                <svg class="w-6 h-6 mr-2 animate-bounce cursor-pointer text-[#A43B21]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.354v15.292M16.24 6.34L7.76 17.66M20 12H4"></path>
                </svg>
                <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-48 p-2 bg-gray-800 text-white text-sm rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
                    These documents are required for renewal of student organizations.
                </div>
            </div>
            Required Attachments for Renewal of Organization
        </h3>

        <ul class="list-none text-gray-700 space-y-2">
            <li class="flex items-start">
                <svg class="w-4 h-4 text-[#A43B21] mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                </svg>
                Accomplished Application Form
            </li>
            <li class="flex items-start">
                <svg class="w-4 h-4 text-[#A43B21] mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                </svg>
                Certificate of Involvement/Commitment/ Acceptance of the Adviser of Student Organizations
            </li>
            <li class="flex items-start">
                <svg class="w-4 h-4 text-[#A43B21] mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                </svg>
                Certificate of Involvement/Commitment/ Acceptance of the President of Student Organizations
            </li>
            <li class="flex items-start">
                <svg class="w-4 h-4 text-[#A43B21] mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                </svg>
                Accomplishment Report
            </li>
            <li class="flex items-start">
                <svg class="w-4 h-4 text-[#A43B21] mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                </svg>
                Financial Report
            </li>
            <li class="flex items-start">
                <svg class="w-4 h-4 text-[#A43B21] mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                </svg>
                Action Plan and Financial Plan
            </li>
        </ul>
        <div class="mt-6 flex flex-col items-center space-y-4"> <!-- Centered and spaced the buttons -->
            <button id="start-button-reaccreditation" data-modal-target="privacy-modal" data-modal-toggle="privacy-modal" class="text-white bg-[#A43B21] hover:bg-[#8b331c] focus:ring-4 focus:outline-none focus:ring-[#DD941F] font-medium rounded-[20px] w-[250px] h-[50px] shadow-md transition-all duration-300 transform hover:scale-105">
                Start
            </button>
            <a href="{{ route('existingTransaction') }}" class="text-[#A43B21] hover:text-white border-2 border-[#A43B21] hover:bg-[#A43B21] focus:ring-4 focus:outline-none focus:ring-[#DD941F] font-medium rounded-lg text-sm px-5 py-2.5 text-center transition-colors duration-300">
                I already have an existing Application
            </a>
        </div>
    </div> <!-- End of the wrapper div -->
</div>

<!-- Modal for Data Privacy -->
<div id="privacy-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex items-center justify-center w-full h-full">
    
    <!-- Modal Overlay with Blur Effect -->
    <div class="modal-overlay fixed inset-0 bg-black bg-opacity-50 backdrop-filter backdrop-blur-sm z-40"></div>
    
    <!-- Modal Content -->
    <div class="relative p-4 w-full max-w-xl max-h-full z-50"> <!-- Ensure this is above the overlay with z-50 -->
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header with styling -->
            <div class="bg-gradient-to-r from-[#A43B21] to-[#D38F2E] rounded-t-lg p-4 flex justify-between items-center">
                <span class="sr-only">Close modal</span>
            </div>

            <!-- Modal body with scroll -->
            <div class="p-4 md:p-5 space-y-3 max-h-96 overflow-y-auto">
                <h3 class="text-lg font-semibold text-[#A43B21]">
                    Data Privacy Statement
                </h3>
                <p class="text-sm leading-relaxed text-gray-700">
                    Your privacy is important to us. By using this portal to submit your application for recognition or re-accreditation, you consent to the collection, use, and protection of your personal information as outlined in this statement.
                </p>
                <p class="text-sm leading-relaxed text-gray-700">
                    We collect personal information, including your name, email address, phone number, mailing address, student ID, organization details, and other relevant information necessary to process your application. This information is used to manage and verify your application, communicate with you regarding your application status, provide customer support, and comply with legal and regulatory requirements.
                </p>
                <p class="text-sm leading-relaxed text-[#D9534F] font-bold">
                    By proceeding, you acknowledge that you have read and understood this data privacy statement.
                </p>
            </div>

            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <x-button id="proceed-button" class="bg-gradient-to-r from-[#FFC107] to-[#FF5722] text-white font-bold py-2 px-4 rounded shadow-lg hover:from-[#FFB300] hover:to-[#E64A19]">
                    Proceed
                </x-button>
                <button data-modal-hide="privacy-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                    Decline
                </button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    <script src="{{ asset('js/application.js') }}"></script>
    <script>
        // Define the URLs to be used in the JavaScript logic
        const applicationRecognitionUrl = "{{ route('application.step', ['type' => 'recognition', 'step' => 1]) }}";
        const applicationReaccreditationUrl = "{{ route('application.step', ['type' => 'reaccreditation', 'step' => 1]) }}";
    </script>
@endpush

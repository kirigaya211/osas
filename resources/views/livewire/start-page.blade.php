@extends('landingPage.landingPage')

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
                <a data-modal-target="privacy-modal" data-modal-toggle="privacy-modal"
                    class="btn btn-primary bg-gradient-to-r from-yellow-400 to-red-500 text-white font-bold py-3 px-6 rounded shadow-lg hover:from-yellow-500 hover:to-red-600">
                    Get Started
                </a>
            </div>
        </div>


        <div class="flex md:justify-start justify-center w-full md:w-auto">
            <img src="{{ asset('images/landpage.jpg') }}" alt="Illustration" class="h-auto w-30 md:w-[35rem] md:ml-[2rem]">
        </div>
    </main>


    <div id="privacy-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex items-center justify-center w-full h-full">

        <div class="modal-overlay fixed inset-0 bg-black bg-opacity-50 backdrop-filter backdrop-blur-sm z-40"></div>
    
        <div class="relative p-4 w-full max-w-xl max-h-full z-50">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <div class="bg-gradient-to-r from-[#A43B21] to-[#D38F2E] rounded-t-lg p-4 flex justify-between items-center">
                    <span class="sr-only">Close modal</span>
                    <button type="button" class="text-white text-2xl font-bold" data-modal-hide="privacy-modal">X</button>
                </div>
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
                    <!-- Privacy checkbox -->
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="data-privacy-checkbox" class="h-4 w-4 text-orange-600 border-gray-300 rounded focus:ring-2 focus:ring-orange-600"
                            onchange="
                                const button = document.getElementById('proceed-button'); 
                                if (this.checked) {
                                    button.classList.remove('opacity-50', 'pointer-events-none', 'bg-gray-400', 'hover:from-gray-500', 'hover:to-gray-600');
                                    button.classList.add('bg-gradient-to-r', 'from-[#FFC107]', 'to-[#FF5722]', 'hover:from-[#FFB300]', 'hover:to-[#E64A19]');
                                } else {
                                    button.classList.add('opacity-50', 'pointer-events-none', 'bg-gray-400', 'hover:from-gray-500', 'hover:to-gray-600');
                                    button.classList.remove('bg-gradient-to-r', 'from-[#FFC107]', 'to-[#FF5722]', 'hover:from-[#FFB300]', 'hover:to-[#E64A19]');
                                }
                            ">
                        <label for="data-privacy-checkbox" class="text-sm text-gray-700">I accept the data privacy statement</label>
                    </div>
                </div>
    
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <!-- Accept Button -->
                    <a id="proceed-button" href="{{ route('application') }}" 
                       class="opacity-50 pointer-events-none bg-gray-400 text-white font-bold py-2 px-4 rounded shadow-lg hover:from-gray-500 hover:to-gray-600">
                        Accept
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

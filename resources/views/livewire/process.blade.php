<div class="container max-w-screen-xl mx-auto p-9">
    <form class="flex items-center max-w-m mx-auto" wire:submit.prevent="submit">
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-[#A43B21]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 18 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2" />
                </svg>
            </div>
            <input wire:model="applicationNum" type="text" id="simple-search"
                class="bg-white border border-[#A43B21] text-[#A43B21] text-sm rounded-lg focus:ring-[#D38F2E] focus:border-[#D38F2E] block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#D38F2E] dark:focus:border-[#D38F2E]"
                placeholder="Search Application status..." required />
        </div>
        <button  type="submit"
            class="p-2.5 ms-2 text-sm font-medium text-white bg-[#A43B21] rounded-lg border border-[#A43B21] hover:bg-[#D38F2E] focus:ring-4 focus:outline-none focus:ring-[#D38F2E] dark:bg-[#A43B21] dark:hover:bg-[#D38F2E] dark:focus:ring-[#D38F2E]">
            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
            <span class="sr-only">Search</span>
        </button>
    </form>




    <div class="text-center">
        <h1
            class="text-6xl font-bold mb-3 text-transparent bg-gradient-to-r from-[#A43B21] to-[#D38F2E] bg-clip-text pt-16">
            APPLICATION FOR STUDENT ORGANIZATIONS
        </h1>

        <p class="text-2xl text-gray-700 mb-12 px-4 py-4">
            Complete the Necessary Documents for Application of New or Renewal of Student Organizations
        </p>

        <div class="flex flex-col md:flex-row justify-center space-x-4 mb-20">
            <!-- Accreditation Card -->
            <div class="card flex-1 bg-white rounded-lg p-6 md:p-8 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl mb-4 md:mb-0 cursor-pointer border border-gray-300 hover:border-[#A43B21]"
                wire:click="setApplication('recognition')">
                <div class="flex justify-center mb-4">
                    <i class="fas fa-plus-circle text-4xl text-[#A43B21]"></i>
                </div>
                <h2 class="text-xl font-bold text-[#A43B21] mb-2 text-center">ACCREDITATION</h2>
                <p class="text-xl text-gray-700 text-center">Newly organized student organizations or inactive for more
                    than one school year with at least fifteen (15) founding members</p>
            </div>

            <!-- Reaccreditation Card -->
            <div class="card flex-1 bg-white rounded-lg p-6 md:p-8 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl mb-4 md:mb-0 cursor-pointer border border-gray-300 hover:border-[#A43B21]"
                wire:click="setApplication('reaccreditation')">
                <div class="flex justify-center mb-4">
                    <i class="fas fa-redo text-4xl text-[#A43B21]"></i>
                </div>
                <h2 class="text-xl font-bold text-[#A43B21] mb-2 text-center">REACCREDITATION</h2>
                <p class="text-xl text-gray-700 text-center">Student organization previously granted recognition</p>
            </div>
        </div>
    </div>

    <!-- Requirements Section -->
    <div id="requirements-section" class="mt-20 text-center">

        <!-- Recognition Requirements Section -->
        <div id="recognition-requirements" class="{{ $applicationType === 'recognition' ? '' : 'hidden' }}">
            <div class="bg-gray-200 p-8 rounded-lg shadow-lg border-2 border-dashed border-[#A43B21]">
                <h3
                    class="text-3xl font-extrabold text-[#A43B21] mb-6 text-center flex items-center justify-center px-4 py-4">
                    <div class="relative group">
                        <svg class="w-6 h-6 mr-2 animate-bounce cursor-pointer text-[#A43B21]" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 4.354v15.292M16.24 6.34L7.76 17.66M20 12H4"></path>
                        </svg>
                        <div
                            class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-48 p-2 bg-gray-800 text-white text-sm rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
                            These documents are required for new student organizations.
                        </div>
                    </div>
                    Required Attachments for New Organization
                </h3>

                <ul class="list-none text-gray-700 space-y-3">
                    <li class="flex items-start justify-start space-x-3">
                        <svg class="w-5 h-5 text-[#A43B21]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Accomplished Application Form</span>
                    </li>
                    <li class="flex items-start justify-start space-x-3">
                        <svg class="w-5 h-5 text-[#A43B21]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Certificate of Involvement/Commitment/ Acceptance of the Adviser of Student
                            Organizations</span>
                    </li>
                    <li class="flex items-start justify-start space-x-3">
                        <svg class="w-5 h-5 text-[#A43B21]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Certificate of Involvement/Commitment/ Acceptance of the President of Student
                            Organizations</span>
                    </li>
                    <li class="flex items-start justify-start space-x-3">
                        <svg class="w-5 h-5 text-[#A43B21]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Information Sheet of Student Organization Officer</span>
                    </li>
                    <li class="flex items-start justify-start space-x-3">
                        <svg class="w-5 h-5 text-[#A43B21]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>List of Organization Members</span>
                    </li>
                    <li class="flex items-start justify-start space-x-3">
                        <svg class="w-5 h-5 text-[#A43B21]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Student Organization Constitution and Bylaws</span>
                    </li>
                    <li class="flex items-start justify-start space-x-3">
                        <svg class="w-5 h-5 text-[#A43B21]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Mission and Vision Statement</span>
                    </li>
                    <li class="flex items-start justify-start space-x-3">
                        <svg class="w-5 h-5 text-[#A43B21]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Resolution</span>
                    </li>
                    <li class="flex items-start justify-start space-x-3">
                        <svg class="w-5 h-5 text-[#A43B21]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Student Organization Official Logo</span>
                    </li>
                    <li class="flex items-start justify-start space-x-3">
                        <svg class="w-5 h-5 text-[#A43B21]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Action and Financial Plan</span>
                    </li>
                </ul>
                <div class="mt-8 flex flex-col items-center space-y-4">
                    <button wire:click="start('accreditation')"
                        class="text-white bg-[#A43B21] hover:bg-[#8b331c] font-medium rounded-[20px] w-[250px] h-[50px]">
                        Start Accreditation Process
                    </button>
                </div>
            </div>
        </div>

        <!-- Reaccreditation Requirements Section -->
        <div id="reaccreditation-requirements" class="{{ $applicationType === 'reaccreditation' ? '' : 'hidden' }}">
            <div class="bg-gray-200 p-8 rounded-lg shadow-lg border-2 border-dashed border-[#A43B21]">
                <h3
                    class="text-3xl font-extrabold text-[#A43B21] mb-6 text-center flex items-center justify-center px-4 py-4">
                    <div class="relative group">
                        <svg class="w-6 h-6 mr-2 animate-bounce cursor-pointer text-[#A43B21]" fill="none"
                            stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 4.354v15.292M16.24 6.34L7.76 17.66M20 12H4"></path>
                        </svg>
                        <div
                            class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 w-48 p-2 bg-gray-800 text-white text-sm rounded-lg opacity-0 group-hover:opacity-100 transition-opacity">
                            These documents are required for renewal of student organizations.
                        </div>
                    </div>
                    Required Attachments for Renewal of Organization
                </h3>

                <ul class="list-none text-gray-700 space-y-2">
                    <li class="flex items-start justify-start space-x-3">
                        <svg class="w-4 h-4 text-[#A43B21]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Accomplished Application Form</span>
                    </li>
                    <li class="flex items-start justify-start space-x-3">
                        <svg class="w-4 h-4 text-[#A43B21]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Certificate of Involvement/Commitment/ Acceptance of the Adviser of Student
                            Organizations</span>
                    </li>
                    <li class="flex items-start justify-start space-x-3">
                        <svg class="w-4 h-4 text-[#A43B21]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Certificate of Involvement/Commitment/ Acceptance of the President of Student
                            Organizations</span>
                    </li>
                    <li class="flex items-start justify-start space-x-3">
                        <svg class="w-4 h-4 text-[#A43B21]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Accomplishment Report</span>
                    </li>
                    <li class="flex items-start justify-start space-x-3">
                        <svg class="w-4 h-4 text-[#A43B21]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Financial Report</span>
                    </li>
                    <li class="flex items-start justify-start space-x-3">
                        <svg class="w-4 h-4 text-[#A43B21]" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span>Action Plan and Financial Plan</span>
                    </li>
                </ul>

                <div class="mt-8 flex flex-col items-center space-y-4">
                    <button wire:click="start('reaccreditation')"
                        class="text-white bg-[#A43B21] hover:bg-[#8b331c] font-medium rounded-[20px] w-[250px] h-[50px]">
                        Start Reaccreditation Process
                    </button>
                </div>
            </div>
        </div>
    </div>






    <div>
        @if ($modal)
            <div class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900 bg-opacity-50 transition-opacity duration-300 ease-in-out">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal Header -->
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Search Result
                            </h3>
                            <button wire:click="hideModal" type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="default-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
    
                        <!-- Modal Body -->
                        <div class="p-4 md:p-5 space-y-4">
                            <p class="text-center leading-relaxed text-gray-500 dark:text-gray-400">
                                @if (session()->has('message'))
                                    <div class="max-w-4xl mx-auto mt-6 bg-white border border-[#A43B21] rounded-lg shadow-md p-6">
                                        {!! session('message') !!}
                                    </div>
                                @endif
                            </p>
                        </div>
    
                        <!-- Modal Footer -->
                        <div class="flex justify-center items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                            <button wire:click="confirm"
                                class="text-white bg-[#A43B21] hover:bg-[#D38F2E] focus:ring-4 focus:outline-none focus:ring-[#D38F2E] font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-[#A43B21] dark:hover:bg-[#D38F2E] dark:focus:ring-[#D38F2E]">
                                Confirm
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    




</div>

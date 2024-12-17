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
        <button type="submit"
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
                    <svg class="w-[50px] h-[50px] text-orange-400 dark:text-white transition-transform transform hover:scale-125 hover:text-orange-500 duration-300 ease-in-out cursor-pointer"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-[#A43B21] mb-2 text-center">ACCREDITATION</h2>
                <p class="text-xl text-gray-700 text-center">Newly organized student organizations or inactive for more
                    than one school year with at least fifteen (15) founding members</p>

            </div>

            <!-- Reaccreditation Card -->
            <div class="card flex-1 bg-white rounded-lg p-6 md:p-8 transition-all duration-300 transform hover:scale-105 hover:shadow-2xl mb-4 md:mb-0 cursor-pointer border border-gray-300 hover:border-[#A43B21]"
                wire:click="setApplication('reaccreditation')">
                <div class="flex justify-center mb-4">
                    <svg class="w-[50px] h-[50px] text-orange-400 dark:text-white transition-transform transform hover:scale-125 hover:text-orange-500 duration-300 ease-in-out cursor-pointer"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M12 2c-.791 0-1.55.314-2.11.874l-.893.893a.985.985 0 0 1-.696.288H7.04A2.984 2.984 0 0 0 4.055 7.04v1.262a.986.986 0 0 1-.288.696l-.893.893a2.984 2.984 0 0 0 0 4.22l.893.893a.985.985 0 0 1 .288.696v1.262a2.984 2.984 0 0 0 2.984 2.984h1.262c.261 0 .512.104.696.288l.893.893a2.984 2.984 0 0 0 4.22 0l.893-.893a.985.985 0 0 1 .696-.288h1.262a2.984 2.984 0 0 0 2.984-2.984V15.7c0-.261.104-.512.288-.696l.893-.893a2.984 2.984 0 0 0 0-4.22l-.893-.893a.985.985 0 0 1-.288-.696V7.04a2.984 2.984 0 0 0-2.984-2.984h-1.262a.985.985 0 0 1-.696-.288l-.893-.893A2.984 2.984 0 0 0 12 2Zm3.683 7.73a1 1 0 1 0-1.414-1.413l-4.253 4.253-1.277-1.277a1 1 0 0 0-1.415 1.414l1.985 1.984a1 1 0 0 0 1.414 0l4.96-4.96Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-[#A43B21] mb-2 text-center">REACCREDITATION</h2>
                <p class="text-xl text-gray-700 text-center">Student organization previously granted recognition</p>
            </div>
        </div>
    </div>


    <div id="requirements-section" class="mt-20 text-center">

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
                        class="bg-gradient-to-r from-orange-400 to-red-600 text-white font-bold py-2 px-4 rounded-full shadow-md hover:from-orange-500 hover:to-red-700 ml-auto">
                        Start Accreditation Process
                    </button>
                </div>
            </div>
        </div>

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
                        class="bg-gradient-to-r from-orange-400 to-red-600 text-white font-bold py-2 px-4 rounded-full shadow-md hover:from-orange-500 hover:to-red-700 ml-auto">
                        Start Reaccreditation Process
                    </button>
                </div>
            </div>
        </div>
    </div>






    <div>
        @if ($modal)
            <div
                class="fixed inset-0 z-50 flex items-center justify-center bg-gray-900 bg-opacity-50 transition-opacity duration-300 ease-in-out">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">

                        <div
                            class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                Search Result
                            </h3>
                            <button wire:click="hideModal" type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="default-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <div class="p-4 md:p-5 space-y-4">
                            <p class="text-center leading-relaxed text-gray-500 dark:text-gray-400">
                                @if (session()->has('message'))
                                    <div
                                        class="max-w-4xl mx-auto mt-6 bg-white border border-[#A43B21] rounded-lg shadow-md p-6">
                                        {!! session('message') !!}
                                    </div>
                                @endif
                            </p>
                        </div>
                        @if ($exist==true)
                            <div
                                class="flex justify-center items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button wire:click="update({{ $applicationNum }})"
                                    class="bg-gradient-to-r from-orange-400 to-red-600 text-white font-bold py-2 px-4 rounded-full shadow-md hover:from-orange-500 hover:to-red-700 ml-auto">
                                    Update Application
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endif
    </div>





</div>

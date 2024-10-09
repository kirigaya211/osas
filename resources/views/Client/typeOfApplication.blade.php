@extends('layout.client')
@section('title', 'Application Step')

@section('application-type-header')
    <x-application-type-header>
        {{ $type === "recognition" ? 'RECOGNITION APPLICATION' : 'RE-ACCREDITATION APPLICATION' }}
    </x-application-type-header>
@endsection

@section('content')
<!-- Progress Bar Container -->
<div class="bg-white shadow-lg rounded-t-xl p-4">
    <div class="rounded-t-xl p-4">
        <x-progress-bar 
            :currentStep="$step" 
            :steps="['1' => 'Organization Details', '2' => 'Document Checklist', '3' => 'Review Submission', '4' => 'Complete']" 
            class="bg-transparent"
        />
    </div>

    
</div>

<!-- Form Container -->
<div class="bg-white rounded-b-xl p-12 md:p-10">
    <div class="text-[#D38F2E] text-center text-xl font-semibold rounded-lg p-4 flex items-center justify-center space-x-2 p-12 md:p-10">
        @if ($step == 1)
            <!-- Step 1 Icon and Text -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c-3.39 0-6 1.343-6 3s2.61 3 6 3 6-1.343 6-3-2.61-3-6-3zm0-7c-2.761 0-5 2.238-5 5s2.239 5 5 5 5-2.238 5-5-2.239-5-5-5z" />
            </svg>
            <span>Step 1: Please Fill Up Your Organization Details</span>
        @elseif ($step == 2)
            <!-- Step 2 Icon and Text -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M9 8h6m-6 8h6m2 5H7a2 2 0 01-2-2V7a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2z" />
            </svg>
            <span>Step 2: Please Complete the Document Checklist</span>
        @elseif ($step == 3)
            <!-- Step 3 Icon and Text -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m-1 4h4m4 0h-4v4m4 0h-4v4m-5-6h-4v-4H4m0 4v4h4m10 0h-4v4m4 0v4h4M7 9h.01M7 12h.01M7 15h.01M10 9h.01M10 12h.01M10 15h.01M13 9h.01M13 12h.01M13 15h.01M16 9h.01M16 12h.01M16 15h.01M7 6h.01M7 18h.01M10 6h.01M10 18h.01M13 6h.01M13 18h.01M16 6h.01M16 18h.01" />
            </svg>
            <span>Step 3: Review Your Submission</span>
        @elseif ($step == 4)
            <!-- Step 4 Icon and Text -->
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 animate-bounce" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m4 4v4m0-16v4" />
            </svg>
            <span>Step 4: Application Complete</span>
        @endif
    </div>

    @if ($step == 1)
        <!-- Step 1: Organization Details Form -->
         <!-- Step 1: Organization Details Form -->
    <form id="applicationForm" action="{{ route('application.step', ['type' => $type, 'step' => 2]) }}" method="GET">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @if ($type === 'reaccreditation')
                <!-- Organization Number Input for Reaccreditation -->
                <x-form label="Organization Number" name="organizationNumber" id="organizationNumber" required="required"/>
            @endif
            <x-form label="Organization Name" name="organizationName" id="organizationName" required="required"/>
            <x-form label="Representative Name" name="representativeName" id="representativeName" required="required"/>
            <x-form label="Representative Email" name="representativeEmail" type="email" id="representativeEmail" required="required"/>
            <x-form label="Contact Number" name="contactNumber" id="contactNumber" 
                    pattern="^(09|\+639)\d{9}$" 
                    title="Please enter a valid Philippine phone number starting with 09 or +639" 
                    required="required"/>
            <div class="col-span-2">
                <x-form label="Organization Description" name="organizationDescription" textarea="true" rows="6" id="organizationDescription" class="w-full" required="required"/>
            </div>
        </div>

        <div class="flex justify-end mt-6">
            <x-button type="submit" class="bg-gradient-to-r from-orange-400 to-red-600 text-white font-bold py-2 px-4 rounded-full shadow-md hover:from-orange-500 hover:to-red-700">
                Next
            </x-button>
        </div>
    </form>
    @elseif($step == 2)
        <!-- Step 2: Document Checklist -->
        <form action="{{ route('application.step', ['type' => $type, 'step' => 3]) }}" method="GET">
            <input type="hidden" name="organizationName" value="{{ request('organizationName') }}">
            <input type="hidden" name="representativeName" value="{{ request('representativeName') }}">
            <input type="hidden" name="representativeEmail" value="{{ request('representativeEmail') }}">
            <input type="hidden" name="contactNumber" value="{{ request('contactNumber') }}">
            <input type="hidden" name="organizationDescription" value="{{ request('organizationDescription') }}">
            <input type="hidden" name="type" value="{{ $type }}">

            @if($type == "recognition")
                @include('Client.checkbox.checklist')
            @else
                @include('Client.checkbox.checklist1')
            @endif

            <div class="flex justify-end mt-6">
                <x-button type="submit" class="bg-gradient-to-r from-[#D38F2E] to-red-600 text-white py-2 px-4 rounded shadow-lg hover:from-orange-500 hover:to-red-500">
                    Next
                </x-button>
            </div>
        </form>
        @elseif ($step == 3)
        <!-- Review Section -->
        <form action="{{ route('application.submit', ['type' => $type]) }}" method="POST">
            @csrf <!-- Include CSRF token for security -->
            
            <!-- Hidden inputs to pass data from previous steps -->
            <input type="hidden" name="organizationName" value="{{ request('organizationName') }}">
            <input type="hidden" name="representativeName" value="{{ request('representativeName') }}">
            <input type="hidden" name="representativeEmail" value="{{ request('representativeEmail') }}">
            <input type="hidden" name="contactNumber" value="{{ request('contactNumber') }}">
            <input type="hidden" name="organizationDescription" value="{{ request('organizationDescription') }}">
            <input type="hidden" name="type" value="{{ $type }}">
            
            <!-- Hidden inputs for document checklist -->
            @foreach(request('checklist', []) as $item)
                <input type="hidden" name="checklist[]" value="{{ $item }}">
            @endforeach
        
            <div class="flex justify-center">
                <div class="w-full lg:w-4/5 flex flex-col md:flex-row gap-6">
                    <!-- Left Column: Organization Details and Description -->
                    <div class="w-full md:w-2/3 flex flex-col gap-4">
                        <!-- Organization Details Card -->
                        <div class="bg-white shadow-md rounded-lg p-6">
                            <div class="bg-[#D38F2E] rounded-t-lg p-4">
                                <h3 class="text-lg font-semibold text-white">ORGANIZATION DETAILS</h3>
                            </div>
                            <div class="text-gray-700 p-4">
                                <table class="w-full table-auto">
                                    <tbody>
                                        <tr>
                                            <td class="font-bold pr-4 align-top" style="width: 30%;">Organization Name:</td>
                                            <td class="align-top">{{ request('organizationName') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-bold pr-4 align-top">Representative Name:</td>
                                            <td class="align-top">{{ request('representativeName') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-bold pr-4 align-top">Representative Email:</td>
                                            <td class="align-top">{{ request('representativeEmail') }}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-bold pr-4 align-top">Contact Number:</td>
                                            <td class="align-top">{{ request('contactNumber') }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
        
                        <!-- Organization Description Card -->
                        <div class="bg-white shadow-md rounded-lg p-6">
                            <div class="bg-[#D38F2E] rounded-t-lg p-4">
                                <h3 class="text-lg font-semibold text-white">ORGANIZATION DESCRIPTION</h3>
                            </div>
                            <div class="text-gray-700 p-4">
                                <p>{{ request('organizationDescription') }}</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Column: Document Checklist -->
                    <div class="w-full md:w-1/3">
                        <div class="bg-white shadow-md rounded-lg p-6">
                            <div class="bg-[#D38F2E] rounded-t-lg p-4">
                                <h3 class="text-lg font-semibold text-white">Document Checklist</h3>
                            </div>
                            <div class="text-gray-700 p-4">
                                <ul class="list-none space-y-2">
                                    @foreach(request('checklist', []) as $item)
                                        <li class="flex items-start">
                                            <svg class="w-4 h-4 text-[#A43B21] mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                            {{ $item }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
        
                </div>
            </div>
        
            <!-- Submit and Go Back Buttons -->
            <div class="flex justify-center mt-10 space-x-4 pt-4">
                <!-- Go Back Button -->
                <x-button type="button" style="background-color: #FFFFFF; color: #A43B21; border: 2px solid #A43B21;"
                          onclick="goBackToStep2()">
                    Go Back
                </x-button>
                <!-- Submit Button -->
                <x-button type="submit" style="background-color: #A43B21 !important;">
                    Submit
                </x-button>
            </div>
        </form>
        
        <script>
            function goBackToStep2() {
                window.location.href = "{{ route('application.step', ['type' => $type, 'step' => 2]) }}";
            }
        </script>
        

 
        @elseif ($step == 4)
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
   
    @endif
</div>
</div>

@endsection

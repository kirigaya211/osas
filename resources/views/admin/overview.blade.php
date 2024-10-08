@extends('admin.dashboard')

@section('content')


<div class="p-4 sm:ml-64 ">
   
    <div class="p-4   dark:border-gray-700 mt-14">
          <div class="grid grid-cols-3 gap-6 mb-6">
      <!-- Pending Card -->
      <div class="flex flex-col justify-between p-4 bg-white rounded-lg shadow-md border-2 border-yellow-400 dark:bg-gray-800">
        <div class="flex items-center">
          <div class="p-3 bg-yellow-100 rounded-full">
            <svg class="w-8 h-8 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h8m-4-4v8m7-16H5a2 2 0 00-2 2v16a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2z"/>
            </svg>
          </div>
          <div class="ml-4">
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">Pending</p>
            <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $pending }}</p>
          </div>
        </div>
        <div class="mt-2">
          <p class="text-sm text-green-600 dark:text-green-400">
            <span class="font-bold">+12%</span> since last week
          </p>
        </div>
      </div>
    
      <!-- Denied Card -->
      <div class="flex flex-col justify-between p-4 bg-white rounded-lg shadow-md border-2 border-red-400 dark:bg-gray-800">
        <div class="flex items-center">
          <div class="p-3 bg-red-100 rounded-full">
            <svg class="w-8 h-8 text-red-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </div>
          <div class="ml-4">
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">Denied</p>
            <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $denied }}</p>
          </div>
        </div>
        <div class="mt-2">
          <p class="text-sm text-red-600 dark:text-red-400">
            <span class="font-bold">-3%</span> since last week
          </p>
        </div>
      </div>
    
      <!-- Approved Card -->
      <div class="flex flex-col justify-between p-4 bg-white rounded-lg shadow-md border-2 border-green-400 dark:bg-gray-800">
        <div class="flex items-center">
          <div class="p-3 bg-green-100 rounded-full">
            <svg class="w-8 h-8 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
            </svg>
          </div>
          <div class="ml-4">
            <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">Approved</p>
            <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $accept }}</p>
          </div>
        </div>
        <div class="mt-2">
          <p class="text-sm text-green-600 dark:text-green-400">
            <span class="font-bold">+8%</span> since last week
          </p>
        </div>
      </div>
    </div>
    
      <div class="max-w w-full bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-xl shadow-lg p-4 md:p-6 ">
         <div class="max-w-full w-full">
               {{-- start chart --}}
            <div class="flex justify-between pb-4 mb-4 border-b border-gray-200 dark:border-gray-700">
               <div class="flex items-center">
                 <div class="w-12 h-12 rounded-lg bg-orange-100 dark:bg-gray-700 flex items-center justify-center me-3">
                   <svg class="w-6 h-6 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 19">
                     <path d="M14.5 0A3.987 3.987 0 0 0 11 2.1a4.977 4.977 0 0 1 3.9 5.858A3.989 3.989 0 0 0 14.5 0ZM9 13h2a4 4 0 0 1 4 4v2H5v-2a4 4 0 0 1 4-4Z"/>
                     <path d="M5 19h10v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2ZM5 7a5.008 5.008 0 0 1 4-4.9 3.988 3.988 0 1 0-3.9 5.859A4.974 4.974 0 0 1 5 7Zm5 3a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm5-1h-.424a5.016 5.016 0 0 1-1.942 2.232A6.007 6.007 0 0 1 17 17h2a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5ZM5.424 9H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h2a6.007 6.007 0 0 1 4.366-5.768A5.016 5.016 0 0 1 5.424 9Z"/>
                   </svg>
                 </div>

                 <div>
                  
                   <h5 class="leading-none text-2xl font-bold text-gray-900 dark:text-white pb-1">Total Request</h5>
                   <p class="text-sm font-normal text-gray-500 dark:text-gray-400">Leads generated per month</p>
                 </div>
               </div>
               <div class=" p-4 flex justify-between items-center">
                  <!-- Button and Generate Report within the same div -->
                  <div class="flex space-x-4">
                    <!-- First button -->
                    <button
                      id="dropdownDefaultButton"
                      data-dropdown-toggle="lastDaysdropdown"
                      data-dropdown-placement="bottom"
                      class="text-sm font-medium text-gray-500 dark:text-gray-400 hover:text-gray-900 inline-flex items-center dark:hover:text-white border border-black bg-gray-100 hover:bg-orange-200 hover:border-transparent p-2 rounded-lg"
                      type="button">
                      Last 7 days
                      <svg class="w-2.5 m-2.5 ms-1.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                      </svg>
                    </button>
                
                    <!-- Generate Report section -->
                    <span class="bg-orange-100 hover:bg-gray-100 hover:border-black text-green-800 text-xs font-medium inline-flex items-center px-2.5 py-1 rounded-md dark:bg-green-900 dark:text-green-300">
                      <a
                        href="#"
                        class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-white hover:text-white-700 dark:hover:white-blue-500 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2">
                        GENERATE REPORT
                      </a>
                      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9V4a1 1 0 0 0-1-1H8.914a1 1 0 0 0-.707.293L4.293 7.207A1 1 0 0 0 4 7.914V20a1 1 0 0 0 1 1h4M9 3v4a1 1 0 0 1-1 1H4m11 6v4m-2-2h4m3 0a5 5 0 1 1-10 0 5 5 0 0 1 10 0Z" />
                      </svg>
                    </span>
                  </div>
                </div>
                
             </div>
             <div class="grid grid-cols-2">
               <dl class="flex items-center">
                   <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal me-1">Number of Request</dt>
                   <dd class="text-gray-900 text-sm dark:text-white font-semibold">$3,232</dd>
               </dl>
               {{-- <dl class="flex items-center justify-end">
                   <dt class="text-gray-500 dark:text-gray-400 text-sm font-normal me-1">Conversion rate:</dt>
                   <dd class="text-gray-900 text-sm dark:text-white font-semibold">1.2%</dd>
               </dl> --}}
             </div>

             <!-- Include your bar chart here -->
      <livewire:column-chart/>
             {{-- admin include --}}


             <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between">
               <div class="flex justify-between items-center pt-5">
                 <!-- Button -->
               
                 <!-- Dropdown menu  button drowpdwon data data na dire -->
                 <div id="lastDaysdropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                     <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                       <li>
                         <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Yesterday</a>
                       </li>
                       <li>
                         <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Today</a>
                       </li>
                       <li>
                         <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 7 days</a>
                       </li>
                       <li>
                         <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 30 days</a>
                       </li>
                       <li>
                         <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Last 90 days</a>
                       </li>
                     </ul>
                 </div>
             
               </div>
             </div>
         </div>
         
     </div>
 


       {{-- <div class="flex items-center justify-center h-70 mb-20 rounded bg-gray-200 dark:bg-gray-800 overflow-auto max-h-90"> --}}
    

     
     
     

       <div class="grid grid-cols-2 gap-4 mb-4">
          <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
       </div>
       <div class="flex items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
          <p class="text-2xl text-gray-400 dark:text-gray-500">
             <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
             </svg>
          </p>
       </div>
       <div class="grid grid-cols-2 gap-4">
          <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
          <div class="flex items-center justify-center rounded bg-gray-50 h-28 dark:bg-gray-800">
             <p class="text-2xl text-gray-400 dark:text-gray-500">
                <svg class="w-3.5 h-3.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                   <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16"/>
                </svg>
             </p>
          </div>
       </div>
    </div>
 </div>
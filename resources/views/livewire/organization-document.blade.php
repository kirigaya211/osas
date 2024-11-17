<div>
    <div>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <section>

            <div class="mt-5 mx-auto max-w-screen-xl">
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">

                    <div class="flex items-center justify-between d p-4">
                        <div class="flex w-full lg:w-1/2">
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2"
                                    placeholder="Search" required="">
                            </div>
                        </div>

                        <div class="flex items-center space-x-2 w-full lg:w-auto">
                            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                class="uppercase text-sm font-semibold inline-flex items-center rounded-lg text-blue-white hover:text-white-700 dark:hover:white-blue-500 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 px-3 py-2"
                                type="button">
                                Upload Document
                            </button>
                        </div>

                    </div>


                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-4 py-3">ID</th>
                                    <th scope="col" class="px-4 py-3">Document</th>
                                    <th scope="col" class="px-4 py-3">Created At</th>
                                    <th scope="col" class="px-4 py-3">File</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $user)
                                    <tr wire:key="{{ $user->StatusID }}" class="border-b dark:border-gray-700">
                                        <th scope="row"
                                            class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{ $user->id }}
                                        </th>
                                        <td class="px-4 py-3 text-green-500">{{ $user->DocumentType ?? 'N/A' }}</td>
                                        <td class="px-4 py-3">{{ $user->created_at ?? 'N/A' }}</td>
                                        <td class="px-4 py-3">{{ $user->File ?? 'N/A' }}</td>
                                        <td><a href="{{ route('organizationDoc.download', $user->File) }}">
                                                Download</a></td>
                                        <td><a href="{{ route('organizationDoc.show', $user->File) }}">View</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                    <div class="py-4 px-3">
                        <div class="flex flex-col lg:flex-row justify-between items-center">
                            <div class="flex space-x-4 items-center mb-4 lg:mb-0">
                                <label class="w-32 text-sm font-medium text-gray-900">Per Page</label>
                                <select wire:model.live="perPage"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full lg:w-auto p-2.5">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>

                            <div class="w-full lg:w-auto overflow-x-auto">
                                {{-- {{ $data->links() }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Upload Document
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="crud-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="{{ route('organizationDoc.store') }}" method="POST" class="p-4 md:p-5"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        
                        <label for="type"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Document
                            Type</label>
                        <select id="type" name="type"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="Accomplished Application Form">Accomplished Application Form</option>
                            <option value="reaccreditation">Reaccreditation</option>
                            <option
                                value="Certificate of Involvement/Commitment/Acceptance of the Adviser of Student Organizations">
                                COI of the Adviser of Student Organizations
                            </option>
                            <option
                                value="Certificate of Involvement/Commitment/Acceptance of the President of Student Organizations">
                                COI of the President of Student
                                Organizations</option>
                            <option value="Information Sheet of Student Organization Officer">Information Sheet of
                                Student Organization Officer</option>
                            <option value="List of Organization Members">List of Organization Members</option>
                            <option value="Student Organization Constitution and Bylaws">Student Organization
                                Constitution and Bylaws</option>
                            <option value="Mission and Vision Statement">Mission and Vision Statement</option>
                            <option value="Resolution">Resolution</option>
                            <option value="Student Organization Official Logo">Student Organization Official Logo
                            </option>
                            <option value="Action and Financial Plan">Action and Financial Plan</option>
                        </select>
                    </div>


                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                        for="file_input">Upload file</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file" name="file">


                    <div class="flex justify-center">
                        <button type="submit" value="Upload"
                            class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            Upload
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

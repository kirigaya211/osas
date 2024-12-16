<div>

    <div class="flex flex-col items-center bg-gray-100 p-6">
        <img src="{{ Auth::user()->profile ? asset('ProfileFolder/' . Auth::user()->profile) : asset('default-profile.png') }}"
            alt="Current Profile Picture" class="w-32 h-32 object-cover rounded-full border border-gray-300 shadow-md">
        <h3 class="mt-4 text-lg font-medium text-gray-900">Current Profile Picture</h3>
    </div>

    <form action="{{ route('profile.updateProfile') }}" method="POST" class="p-6 space-y-6" enctype="multipart/form-data">
        @csrf

        <h2 class="text-lg font-semibold text-gray-900 text-center">
            {{ $organization->OrganizationID ?? '' }}
        </h2>
        
        </h2>
        <div>
            <label for="file_input" class="block mb-2 text-sm font-medium text-gray-700">Upload New Profile</label>
            <input id="file_input" type="file" name="file"
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                required>
            <p class="mt-2 text-xs text-gray-500">Accepted formats: PNG, JPG, GIF (Max size: 1MB)</p>
        </div>
        <div class="flex justify-center">
            <button type="submit"
                class="btn btn-primary bg-gradient-to-r from-yellow-400 to-red-500 text-white font-bold py-2 px-6 rounded shadow-lg hover:from-yellow-500 hover:to-red-600">
                Upload
            </button>
        </div>
    </form>


</div>

<!-- resources/views/components/navbar.blade.php -->
<nav class="bg-white shadow w-full border-b-4 border-red-600">
    <div class="container mx-auto p-2 flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <img src="{{ asset('images/OSAS-Logo.png') }}" alt="Logo" class="h-12">
            <div>
                <h1 class="text-lg font-bold text-red-900">University of Southeastern Philippines</h1>
                
                <p class="text-orange-600 text-sm ">Student Organization Portal</p>
            </div>
        </div>
        <div class="text-right">
            <p class="text-orange-900 font-bold text-sm">Office of Student Affair and Services</p>
        </div>
    </div>
</nav>

{{-- dire kay re user navbar  --}}
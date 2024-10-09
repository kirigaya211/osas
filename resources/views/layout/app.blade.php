<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Dashboard</title>
</head>

<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-gray-50 dark:bg-red-700 shadow-md">
        <div class="h-full px-3 py-4 overflow-y-auto">
        @include('components.sidebar')
        </div>
    </aside>

    <!-- Main content area -->
    <div class="flex-1 ml-64"> <!-- Adjust the margin to match the sidebar width -->
        @yield('content')
    </div>

    <!-- Flowbite JS and other libraries -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>

</html>

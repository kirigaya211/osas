<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OSAS-SOP</title>

    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('images/OSAS-Logo.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    @livewireStyles
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>

<style>
    /* Base Styles */
    body,
    html {
        font-family: 'Quicksand', sans-serif; 
    }
</style>

</head>

<body class="flex flex-col min-h-screen">
    <nav class="bg-white shadow w-full border-b-4 border-red-600">
        <div class="container mx-auto p-2 flex justify-between items-center flex-col sm:flex-row">
            <div class="flex items-center space-x-2">
                <img src="{{ asset('images/OSAS-Logo.png') }}" alt="Logo" class="h-12">
                <div>
                    <h1 class="text-lg font-bold text-red-900">Office of Student Affair and Services</h1>
                </div>
            </div>
            <!-- Text will move to bottom only for screens 600px and below -->
            <div class="text-orange-900 font-bold text-sm mt-4 sm:mt-0 sm:text-right">
                <p>Student Organization Portal</p>
            </div>
        </div>
    </nav>

    <main class="flex-grow container mx-auto p-1">

        @yield('content')

    </main>


    <footer class="relative mt-auto" style="height: 400px;"> <!-- Set the desired height -->
        <!-- Text content with flexbox centering -->
        <div class="container mx-auto text-center text-white relative z-10 flex items-center justify-center h-full">
            <p>&copy; 2024 University of Southeastern Philippines. All rights reserved.</p>
        </div>
        <!-- Wavy Image at the bottom of the footer -->
        <img src="{{ asset('images/Vector.png') }}" alt="Footer Vector" class="absolute bottom-0 left-0 w-full h-auto">
    </footer>







    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

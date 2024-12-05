<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Client Side')</title> <!-- Allows title to be set by child views -->
    @vite('resources/css/app.css')


    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        /* Base Styles */
        body,
        html {
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
            background: #FFFFFF;
            /* Changed from #F3F4F6 to white */
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Quicksand', sans-serif;
            /* Applying the imported font */
        }

        header {
            width: 100%;
            border-bottom: 10px solid #dc2626;
            /* red-600 color */
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
        }

        /* Card Styles */
        .card {
            cursor: pointer;
            background: transparent;
            /* Updated to transparent */
            border-radius: 8px;
            padding: 20px;
            /* Increased padding */
            transition: border 0.3s ease, box-shadow 0.3s ease;
            /* Combined transitions */
            border: 2px solid #CCC5C5;
            margin: 0 auto;
            /* Centers the card */
        }

        .card img {
            transition: transform 0.3s ease;
            /* Smooth transition for the zoom effect */
        }

        .card:hover img {
            transform: scale(1.2);
            /* Scales the image to 120% of its original size */
        }

        .cards-container {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            /* Adjusts space between the cards */
        }

        .card:hover {
            border: 5px solid #A43B21;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .highlight {
            border: 2px solid #dc2626;
        }

        .hidden {
            display: none;
        }

        .show {
            display: inline-block;
        }

        /* Start Button Styles */
        .start-button {
            background: linear-gradient(to right, #ffdd00, #fbb034);
            border: none;
            color: white;
            padding: 10px 20px;
            border-radius: 20px;
            /* Updated to match updated button classes */
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .start-button:hover {
            background: linear-gradient(to right, #ffb300, #e64a19);
            transform: scale(1.05);
        }

        ::placeholder {
            font-size: 0.875rem;
            /* Tailwind's text-sm equivalent */
            color: #A0AEC0;
            /* Optional: Change placeholder color */
        }

        /* Custom checkbox styling to ensure immediate color change */
        input[type="checkbox"]:checked {
            background-color: #D38F2E !important;
            border-color: #D38F2E !important;
            outline: none;
            transition: none;
        }

        /* Custom Checkbox Styling */
        input[type="checkbox"] {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            width: 16px;
            height: 16px;
            background-color: #fff;
            border: 2px solid #D38F2E;
            border-radius: 4px;
            cursor: pointer;
            position: relative;
            display: inline-block;
            vertical-align: middle;
        }

        /* Checked state */
        input[type="checkbox"]:checked {
            background-color: #D38F2E;
            border-color: #D38F2E;
        }

        /* Checkmark icon */
        input[type="checkbox"]:checked::after {
            content: '✔';
            color: white;
            font-size: 12px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: block;
        }

        /* Label to ensure clicking the label checks the box */
        input[type="checkbox"]+label {
            cursor: pointer;
        }
    </style>
</head>

<body class="bg-white flex flex-col min-h-screen"> <!-- Changed class to bg-white -->
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


    <!-- Application Type Header (Optional) -->
    @yield('application-type-header')

    <!-- Main Content -->
    <main class="flex-grow container mx-auto p-6">
        @yield('content')
    </main>


   
    <footer class="relative">
        <div class="container mx-auto text-center text-white relative z-10 py-6">
            <p>&copy; 2024 University of Southeastern Philippines. All rights reserved.</p>
        </div>
        <img src="{{ asset('images/Vector.png') }}" alt="Footer Vector" class="absolute bottom-0 left-0 w-full">
    </footer>



    @stack('scripts')




</body>

</html>

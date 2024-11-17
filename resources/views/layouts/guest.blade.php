<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

<<<<<<< Updated upstream
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                etoo
            </div>
            <div>
                <a href="/">
                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
=======
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full bg-gray-50 dark:bg-neutral-800">
    <section class="h-screen w-full flex items-center justify-center">
        <div class="w-full h-full flex">
            <!-- Left column -->
            <div class="w-full md:w-6/12 h-full flex flex-col items-center justify-center bg-white dark:bg-white px-4 py-6">
                <div class="text-center mb-6">
                    <h4 class="mt-1 text-lg font-semibold">
                        Login to your Account
                    </h4>
                    <p class="text-sm">Embark on an unparalleled job-seeking adventure with PESO</p>
                </div>             
                <div class="w-full max-w-md mx-auto">
                    {{ $slot }}
                </div>
>>>>>>> Stashed changes
            </div>

            <!-- Right column -->
            <div class="w-full md:w-6/12 h-full flex items-center justify-center bg-[#0F172A] rounded-b-lg md:rounded-e-lg md:rounded-bl-none py-6">
                <img id="loginImage" src="{{ asset('login.png') }}" alt="Image" class="max-w-[80%] h-auto">
            </div>
        </div>
    </section>
</body>
</html>

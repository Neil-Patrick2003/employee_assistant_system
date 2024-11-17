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
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full bg-gray-50 dark:bg-neutral-800">
    <div class="font-[sans-serif]">
        <div class="min-h-screen flex flex-col items-center justify-center">
            <div
                class="grid md:grid-cols-2 items  gap-4 max-md:gap-8 max-w-6xl max-md:max-w-lg w-full p-4 m-4 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-md">
                <div class="md:max-w-md w-full px-4 py-4">
                    <div class="text-center mb-6">
                        <h4 class="mt-1 text-lg font-semibold">
                            Login to your Account
                        </h4>
                        <p class="text-sm">Embark on an unparalleled job-seeking adventure with PESO</p>
                    </div>
                    {{ $slot }}
                </div>

                <div class="flex items-center justify-center md:h-full bg-neutral-900 rounded-xl lg:p-16 p-12">
                    <img src="{{ asset('login.png') }}" alt="Image" class="max-w-[80%] h-auto">
                </div>
            </div>
        </div>
    </div>
    {{-- <section class="h-screen w-full flex items-center justify-center">
        <div class="w-full h-full flex">
            <div
                class="w-full md:w-full h-full flex flex-col items-center justify-center bg-white dark:bg-white px-4 py-6">
                <div class="text-center mb-6">
                    <h4 class="mt-1 text-lg font-semibold">
                        Login to your Account
                    </h4>
                    <p class="text-sm">Embark on an unparalleled job-seeking adventure with PESO</p>
                </div>             
                <div class="w-full max-w-md mx-auto">
                    {{ $slot }}
                </div>
            </div>

            <!-- Right column -->
<<<<<<< HEAD
            <div class="w-full md:w-6/12 h-full flex items-center justify-center bg-[#0F172A] rounded-b-lg md:rounded-e-lg md:rounded-bl-none py-6">
                <img id="loginImage" src="{{ asset('login.png') }}" alt="Image" class="max-w-[80%] h-auto">
=======
            <div
                class="w-full md:w-full h-full flex items-center justify-center bg-[#0F172A] rounded-b-lg md:rounded-e-lg md:rounded-bl-none py-6">
                <img src="{{ asset('login.png') }}" alt="Image" class="max-w-[80%] h-auto">
>>>>>>> origin/main
            </div>
        </div>
    </section> --}}
</body>

@vite(['resources/css/app.css', 'resources/js/app.js'])


</html>

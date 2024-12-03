<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-up {
            animation: fadeInUp 0.75s ease-out forwards;
        }

        body, html {
            overflow: hidden;
            height: 100%;
        }

        .no-scroll {
            overflow: hidden;
        }

        input:focus, textarea:focus {
            animation: inputFocus 0.3s ease-out forwards;
        }

        @keyframes inputFocus {
            0% {
                border-color: #d1d5db;
                transform: scale(1);
            }
            50% {
                border-color: #6366f1;
                transform: scale(1.02);
            }
            100% {
                border-color: #6366f1;
                transform: scale(1);
            }
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-full bg-gray-50 light:bg-neutral-800 no-scroll">
    <div class="font-[sans-serif] h-full">
        <div class="h-screen w-full flex">
            <div class="w-1/2 h-full flex flex-col items-center justify-center bg-white animate-fade-up">
                <div class="w-full max-w-md">
                    <div class="text-center mb-4">
                        <img src="{{ asset('logo.png') }}" alt="Logo" class="w-64 h-auto mx-auto">
                    </div>
                <div class="text-center mb-6">
                    <h4 class="mt-1 text-lg font-semibold">
                        Login to your Account
                    </h4>
                    <p class="text-sm">Embark on an unparalleled job-seeking adventure with Career Pathway</p>
                </div>
                    {{ $slot }}
                </div>
            </div>
            <div class="w-1/2 h-full flex items-center justify-center bg-neutral-900">
                <img src="{{ asset('login.png') }}" alt="Image" class="max-w-[80%] h-auto">
            </div>
        </div>
    </div>
</body>

@vite(['resources/css/app.css', 'resources/js/app.js'])

</html>

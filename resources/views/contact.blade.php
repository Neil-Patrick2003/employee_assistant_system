<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EAS | Contact</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">EAS</span>
                        <img class="h-8 w-auto" src="" alt=""> {{-- Logo here --}}
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="{{ url('/') }}" class="text-sm/6 font-semibold text-gray-900">Home</a>
                    <a href="{{ url('/about') }}" class="text-sm/6 font-semibold text-gray-900">About</a>
                    <a href="{{ url('/contact') }}" class="text-sm/6 font-semibold text-gray-900">Contact</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm/6 font-semibold text-gray-900">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm/6 font-semibold text-gray-900 mr-4">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="text-sm/6 font-semibold text-gray-900">Register</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </nav>
        </header>

        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-white opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>

            <div class="mx-auto max-w-7xl px-6 lg:px-8 py-24 sm:py-32">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Get in touch</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">We're here to help and answer any questions you might have</p>
                </div>

                <div class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-2">
                    <!-- Email Contact -->
                    <div class="flex flex-col items-center justify-center rounded-3xl bg-gray-50 px-8 py-10">
                        <div class="flex size-12 items-center justify-center rounded-full bg-indigo-600">
                            <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold leading-7 tracking-tight text-gray-900">Email Us</h3>
                        <p class="mt-2 text-base leading-7 text-gray-600">We'll respond you at the right time.</p>
                        <a href="mailto:contact@eas.com" class="mt-4 text-indigo-600 hover:text-indigo-500">example@email.com</a>
                    </div>

                    <!-- Facebook Contact -->
                    <div class="flex flex-col items-center justify-center rounded-3xl bg-gray-50 px-8 py-10">
                        <div class="flex size-12 items-center justify-center rounded-full bg-indigo-600">
                            <svg class="size-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                            </svg>
                        </div>
                        <h3 class="mt-6 text-xl font-semibold leading-7 tracking-tight text-gray-900">Facebook</h3>
                        <p class="mt-2 text-base leading-7 text-gray-600">Connect with us on Facebook</p>
                        <a href="#" target="_blank" class="mt-4 text-indigo-600 hover:text-indigo-500">Test</a>
                    </div>
                </div>
            </div>


            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-white opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
        </div>
    </div>
</body>
</html>

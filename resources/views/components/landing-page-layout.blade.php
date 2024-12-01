<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
                        alt="">
                </a>
            </div>

            <!-- Mobile Navigation Button -->
            <div class="flex lg:hidden">
                <button type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>

            <!-- Desktop Navigation Links -->
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="/"
                    class="text-sm font-semibold text-gray-900 hover:text-indigo-600 transition duration-300 ease-in-out 
                    {{ request()->is('/') ? 'underline text-indigo-600' : '' }}">Home</a>
                <a href="/about"
                    class="text-sm font-semibold text-gray-900 hover:text-indigo-600 transition duration-300 ease-in-out 
                    {{ request()->is('/about') ? 'underline text-indigo-600' : '' }}">About</a>
                <a href="/job_listings"
                    class="text-sm font-semibold text-gray-900 hover:text-indigo-600 transition duration-300 ease-in-out 
                    {{ request()->is('/job_listings') ? 'underline text-indigo-600' : '' }}">Jobs</a>
                <a href="/contact"
                    class="text-sm font-semibold text-gray-900 hover:text-indigo-600 transition duration-300 ease-in-out 
                    {{ request()->is('/contact') ? 'underline text-indigo-600' : '' }}">Contact</a>
            </div>

            <!-- Desktop Log In Button -->
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a href="#"
                    class="text-sm font-semibold text-gray-900 hover:text-indigo-600 transition duration-300 ease-in-out 
                    {{ request()->is('login') ? 'underline text-indigo-600' : '' }}">Log
                    in</a>
            </div>
        </nav>

        <!-- Mobile menu, show/hide based on menu open state -->
        <div class="lg:hidden" role="dialog" aria-modal="true">
            <div class="fixed inset-0 z-10"></div>
            <div
                class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto"
                            src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="">
                    </a>
                    <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Close menu</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                            <a href="#"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50 
                                {{ request()->is('/') ? 'underline text-indigo-600' : '' }}">Home</a>
                            <a href="/about"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50 
                                {{ request()->is('about') ? 'underline text-indigo-600' : '' }}">About</a>
                            <a href="/job_listings"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50 
                                {{ request()->is('services') ? 'underline text-indigo-600' : '' }}">Jobs</a>
                            <a href="contact"
                                class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold text-gray-900 hover:bg-gray-50 
                                {{ request()->is('contact') ? 'underline text-indigo-600' : '' }}">Contact</a>
                        </div>
                        <div class="py-6">
                            <a href="/login"
                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold text-gray-900 hover:bg-gray-50 
                                {{ request()->is('login') ? 'underline text-indigo-600' : '' }}">Log
                                in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="main bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </div>





</body>

</html>

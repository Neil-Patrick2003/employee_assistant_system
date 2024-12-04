<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Career Pathway</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <script src="https://unpkg.com/@popperjs/core@2.9.1/dist/umd/popper.min.js" charset="utf-8"></script>
</head>

<body class="h-full">
    <div x-data="{ sidebarOpen: false }" class="relative">
        <!-- Mobile Navigation Toggle -->
        <div class="fixed inset-0 flex z-40 lg:hidden" x-show="sidebarOpen" @click.away="sidebarOpen = false">
            <div class="fixed inset-0 bg-gray-600 bg-opacity-75" x-show="sidebarOpen"
                 x-transition:enter="transition-opacity ease-linear duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition-opacity ease-linear duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"></div>

            <div class="relative flex-1 flex flex-col max-w-xs w-full bg-white"
                 x-show="sidebarOpen"
                 x-transition:enter="transition ease-in-out duration-300 transform"
                 x-transition:enter-start="-translate-x-full"
                 x-transition:enter-end="translate-x-0"
                 x-transition:leave="transition ease-in-out duration-300 transform"
                 x-transition:leave-start="translate-x-0"
                 x-transition:leave-end="-translate-x-full">

                <div class="absolute top-0 right-0 -mr-12 pt-2">
                    <button @click="sidebarOpen = false" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Mobile Sidebar Content -->
                <div class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6">
                    <div class="flex h-16 shrink-0 items-center justify-center">
                        <img class="h-12 w-auto" src="{{ asset('career_path_logo.jpg') }}" alt="Your Company">
                    </div>
                    <nav class="flex flex-1 flex-col">
                        <ul role="list" class="flex flex-1 flex-col gap-y-7">
                            <li>
                                <ul role="list" class="-mx-2 space-y-1">
                                    <li>
                                        <a href="/admin/dashboard" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('admin/dashboard') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                            <svg class="size-6 shrink-0 {{ request()->is('admin/dashboard') ? 'text-indigo-600' : 'text-gray-400 group-hover:text-indigo-600' }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                            </svg>
                                            Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/manage-users" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('admin/manage-users') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                            <svg class="size-6 shrink-0 {{ request()->is('admin/manage-users') ? 'text-indigo-600' : 'text-gray-400 group-hover:text-indigo-600' }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                            </svg>
                                            User Management
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/manage-jobs" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('admin/manage-jobs') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                            <svg class="size-6 shrink-0 {{ request()->is('admin/manage-jobs') ? 'text-indigo-600' : 'text-gray-400 group-hover:text-indigo-600' }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                                            </svg>
                                            Job Management
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/admin/announcements" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('admin/announcements') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                            <svg class="size-6 shrink-0 {{ request()->is('admin/announcements') ? 'text-indigo-600' : 'text-gray-400 group-hover:text-indigo-600' }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                            </svg>
                                            Announcement
                                        </a>
                                    </li>

                                    <li>
                                        <a href="/admin/feedbacks" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('admin/feedbacks') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                            <svg class="size-6 shrink-0 {{ request()->is('admin/feedbacks') ? 'text-indigo-600' : 'text-gray-400 group-hover:text-indigo-600' }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                                            </svg>
                                            Feedbacks
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="py-1 w-full" role="none">
                            <form method="POST" action="/logout">
                                @csrf
                                <button type="submit" class="flex items-center w-full text-slate-950 px-4 py-2 rounded-md hover:bg-gray-200 transition duration-150 ease-in-out">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                    <span>Logout</span>
                                </button>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Mobile top bar -->
        <div class="lg:hidden">
            <div class="bg-white">
                <div class="px-4 sm:px-6">
                    <div class="flex items-center justify-between h-16">
                        <img class="h-12 w-auto" src="{{ asset('career_path_logo.jpg') }}" alt="Your Company">
                        <button @click="sidebarOpen = true" class="inline-flex items-center justify-center p
                        <button @click="sidebarOpen = true" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>

         <!-- Desktop Sidebar -->
         <div class="hidden lg:fixed lg:inset-y-0 lg:flex lg:w-72 lg:flex-col">
            <div class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6">
                <div class="flex h-16 shrink-0 items-center justify-center">
                    <img class="h-12 w-auto" src="{{ asset('career_path_logo.jpg') }}" alt="Your Company">
                </div>
                <nav class="flex flex-1 flex-col">
                    <ul role="list" class="flex flex-1 flex-col gap-y-7">
                        <li>
                            <ul role="list" class="-mx-2 space-y-1">
                                <li>
                                    <a href="/admin/dashboard" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('admin/dashboard') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                        <svg class="size-6 shrink-0 {{ request()->is('admin/dashboard') ? 'text-indigo-600' : 'text-gray-400 group-hover:text-indigo-600' }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                        </svg>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/manage-users" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('admin/manage-users') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                        <svg class="size-6 shrink-0 {{ request()->is('admin/manage-users') ? 'text-indigo-600' : 'text-gray-400 group-hover:text-indigo-600' }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                                        </svg>
                                        Users
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/manage-jobs" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('admin/manage-jobs') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                        <svg class="size-6 shrink-0 {{ request()->is('admin/manage-jobs') ? 'text-indigo-600' : 'text-gray-400 group-hover:text-indigo-600' }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 0 1 4.5 9.75h15A2.25 2.25 0 0 1 21.75 12v.75m-8.69-6.44-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" />
                                        </svg>
                                        Jobs
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/announcements" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('admin/announcements') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                        <svg class="size-6 shrink-0 {{ request()->is('admin/announcements') ? 'text-indigo-600' : 'text-gray-400 group-hover:text-indigo-600' }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
                                        </svg>
                                        Announcement
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/feedbacks" class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('admin/feedbacks') ? 'bg-indigo-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                        <svg class="size-6 shrink-0 {{ request()->is('admin/feedbacks') ? 'text-indigo-600' : 'text-gray-400 group-hover:text-indigo-600' }}" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" />
                                        </svg>
                                        Feedbacks
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="py-1 w-full" role="none">
                        <form method="POST" action="/logout">
                            @csrf
                            <button type="submit" class="flex items-center w-full text-slate-950 px-4 py-2 rounded-md hover:bg-gray-200 transition duration-150 ease-in-out">
                                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                </svg>
                                <span>Logout</span>
                            </button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Main Content -->
        <main class="py-10 lg:pl-72">
            <div class="px-4 sm:px-6 lg:px-8">
                {{ $slot }}
            </div>
        </main>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('navigation', () => ({
                init() {
                    this.$watch('sidebarOpen', (value) => {
                        if (value && window.innerWidth < 1024) {
                            document.body.style.overflow = 'hidden';
                        } else {
                            document.body.style.overflow = '';
                        }
                    });
                }
            }));
        });
    </script>
</body>

</html>

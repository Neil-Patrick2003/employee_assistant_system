<!DOCTYPE html>
<html lang="en" class="h-full ">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="icon" src="{{ asset('career_path_logo.jpg') }}" type="image/jpg">


    <title>Career Path</title>

</head>

<body class="bg-indigo-50">

    <div>
        <div id="sidebar" class="relative z-50 lg:hidden" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-900/80" aria-hidden="true"></div>
            <div class="fixed inset-0 flex">
                <div class="relative mr-16 flex w-full max-w-xs flex-1">
                    <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                        <button type="button" id="closeSidebar" class="-m-2.5 p-2.5">
                            <span class="sr-only">Close sidebar</span>
                            <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-white px-6 pb-4">
                        <div class="flex h-16 shrink-0 items-center justify-center">
                            <img class="h-12 w-auto" src="{{ asset('career_path_logo.jpg') }}" alt="Your Company">
                        </div>
                        <nav class="flex flex-1 flex-col">
                            <ul role="list" class="flex flex-1 flex-col gap-y-7">
                                <li>
                                    <ul role="list" class="-mx-2 space-y-1">
                                        <li>
                                            <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                                            <a href="{{ url('/employer/dashboard') }}"
                                                class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('employer/dashboard') ? 'bg-gray-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                                <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                                                </svg>
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/employer/jobs') }}"
                                                class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('employer/jobs*') ? 'bg-gray-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                                <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                                                </svg>
                                                Job Posting
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/employer/applications') }}"
                                                class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('employer/applications*') ? 'bg-gray-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                                <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                                </svg>

                                                Applicants
                                            </a>
                                        </li>
                                        <li>
                                            {{-- <a href="{{ url('/employer/reports') }}"
                                            class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('employer/reports*') ? 'bg-gray-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                                <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                                                </svg>
                                                Reports
                                            </a> --}}
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="text-xs/6 font-semibold text-gray-400"></div>
                                    <ul role="list" class="-mx-2 mt-2 space-y-1">
                                        <li>
                                            <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                                            <a href="{{ url('/employer/profile') }}"
                                                class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('employer/profile*') ? 'bg-gray-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                                <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                                </svg>

                                                <span class="truncate">Company Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/employer/notifications') }}"
                                                class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('employer/notifications*') ? 'bg-gray-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                                <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600"
                                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                                                </svg>

                                                <span class="truncate">Notifications</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            </li>
                            </ul>
                            </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <button id="openMenu" class="fixed top-0 left-0 z-50 p-4 bg-indigo-600 text-white rounded-md lg:hidden">
            <span class="sr-only">Open Menu</span>
            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Button Script -->



    <!-- Static sidebar for desktop -->
    <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-72 lg:flex-col">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-gray-200 bg-white px-6 pb-4">
            <div class="flex h-16 shrink-0 items-center justify-center">
                <img class="h-12 w-auto" src="{{ asset('career_path_logo.jpg') }}" alt="Your Company">
            </div>
            <nav class="flex flex-1 flex-col">
                <ul role="list" class="flex flex-1 flex-col gap-y-7">
                    <li>
                        <ul role="list" class="-mx-2 space-y-1">
                            <li>
                                <x-employer-nav-link href="{{ url('/employer/dashboard') }}" :active="request()->is('employer/dashboard')">
                                    <x-slot:icon>
                                        <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                                        </svg>
                                    </x-slot:icon>
                                    Home
                                </x-employer-nav-link>
                            </li>
                            <li>
                                <x-employer-nav-link href="{{ url('/employer/jobs') }}" :active="request()->is('employer/jobs')">
                                    <x-slot:icon>
                                        <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                                        </svg>
                                    </x-slot:icon>
                                    Job Posting
                                </x-employer-nav-link>
                            </li>
                            <li>
                                <x-employer-nav-link href="{{ url('/employer/applications') }}" :active="request()->is('employer/applications')">
                                    <x-slot:icon>
                                        <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                                        </svg>
                                    </x-slot:icon>
                                    Applicants
                                </x-employer-nav-link>
                            </li>
                            <li>
                                <!-- Current: "bg-gray-50 text-indigo-600", Default: "text-gray-700 hover:text-indigo-600 hover:bg-gray-50" -->
                                <a href="{{ url('/employer/profile') }}"
                                    class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('employer/profile*') ? 'bg-gray-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                    <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
                                    </svg>
    
                                    <span class="truncate">Company Profile</span>
                                </a>
                            </li>
                            <li>
                                {{-- <a href="{{ url('/employer/reports') }}"
    class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('employer/reports*') ? 'bg-gray-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                    <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 0 1 3 19.875v-6.75ZM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V8.625ZM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 0 1-1.125-1.125V4.125Z" />
                                    </svg>
                                    Reports
                                </a> --}}
                            </li>
                    </li>

                </ul>
                </li>
                <li>
                    <div class="text-xs/6 font-semibold text-gray-400"></div>
                    <ul role="list" class="-mx-2 mt-2 space-y-1">
                        
                        {{-- <li>
                            <a href="{{ url('/employer/notifications') }}"
                                class="group flex gap-x-3 rounded-md p-2 text-sm/6 font-semibold {{ request()->is('employer/notifications*') ? 'bg-gray-50 text-indigo-600' : 'text-gray-700 hover:bg-gray-50 hover:text-indigo-600' }}">
                                <svg class="size-6 shrink-0 text-gray-400 group-hover:text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                                </svg>
                                <span class="truncate">Notifications</span>
                            </a>
                        </li> --}}
                    </ul>
                </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="lg:pl-72">
        <div
            class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-gray-200 bg-white px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
            <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden">
                <span class="sr-only">Open sidebar</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true" data-slot="icon">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>

            <!-- Separator -->
            <div class="h-6 w-px bg-gray-200 lg:hidden" aria-hidden="true"></div>

            <div class="flex flex-1 gap-x-4 self-stretch lg:gap-x-6">
                <form class="relative flex flex-1" action="#" method="GET">
                    <label for="search-field" class="sr-only">Search</label>
                    <svg class="pointer-events-none absolute inset-y-0 left-0 h-full w-5 text-gray-400"
                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                        <path fill-rule="evenodd"
                            d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z"
                            clip-rule="evenodd" />
                    </svg>
                    <input id="search-field"
                        class="block size-full border-0 py-0 pl-8 pr-0 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm"
                        placeholder="Search..." type="search" name="search">
                </form>
                <div class="flex items-center gap-x-4 lg:gap-x-6">
                    <button type="button" class="-m-2.5 p-2.5 text-gray-400 hover:text-gray-500">
                        <span class="sr-only">View notifications</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                        </svg>
                    </button>

                    <!-- Separator -->
                    <div class="hidden lg:block lg:h-6 lg:w-px lg:bg-gray-200" aria-hidden="true"></div>



                    <!-- Profile dropdown -->
                    <div class="relative">
                        <div class="relative inline-block text-left">
                            <div x-data="{ dropdownOpen: false }">
                                <button type="button"
                                    class="inline-flex w-full justify-center rounded-lg hover:rouned-4xl p-2 rouned-lg"
                                    id="menu-button" aria-expanded="true" aria-haspopup="true"
                                    @click="dropdownOpen = !dropdownOpen">
                                    <span class="sr-only">Open user menu</span>

                                    <span class="hidden lg:flex lg:items-center">
                                        <span class="ml-4 text-sm/6 font-semibold text-gray-900"
                                            aria-hidden="true">{{Auth::user()->name}}</span>
                                        <svg class="ml-2 size-5 text-gray-400" viewBox="0 0 20 20"
                                            fill="currentColor" aria-hidden="true" data-slot="icon">
                                            <path fill-rule="evenodd"
                                                d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>


                                </button>

                                <!-- Dropdown menu, show/hide based on dropdownOpen state -->
                                <div x-show="dropdownOpen" x-cloak
                                    class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="menu-button"
                                    tabindex="-1" x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95">
                                    <div
                                        class="flex items-center w-full text-slate-950 px-4 py-2 rounded-md hover:bg-gray-200 transition duration-150 ease-in-out">
                                        <a href="/profile">Profile</a>
                                    </div>
                                    <div class="py-1 w-full" role="none">
                                        <form method="POST" action="/logout">
                                            @csrf
                                            <button type="submit"
                                                class="flex items-center w-full text-slate-950 px-4 py-2 rounded-md hover:bg-gray-200 transition duration-150 ease-in-out">
                                                Logout
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main class="py-10 bg-indigo-50">
            <div class="px-4 sm:px-6 lg:px-8 bg-indigo-50 h-full">
                {{ $slot }}
            </div>
        </main>
    </div>
    </div>

    <script>
        const openMenuButton = document.getElementById('openMenu');
        const closeSidebarButton = document.getElementById('closeSidebar');
        const sidebar = document.getElementById('sidebar');

        openMenuButton.addEventListener('click', () => {
            sidebar.classList.remove('hidden');
            openMenuButton.classList.add('hidden');
            closeSidebarButton.classList.remove('hidden');
        });

        closeSidebarButton.addEventListener('click', () => {
            sidebar.classList.add('hidden');
            openMenuButton.classList.remove('hidden');
            closeSidebarButton.classList.add('hidden');
        });
    </script>

</body>

</html>

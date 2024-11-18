<x-app-layout>

    <div aria-live="assertive" class="z-50 fixed inset-0 flex justify-center px-4 py-6 pointer-events-none sm:p-6">
        <div class="w-full flex flex-col items-center space-y-4"></div>
    </div>
    <div class="max-w-7xl mx-auto flex flex-col gap-8">
        <div class="flex"><a class="w-auto" href="/jobs"><button
                    class="flex items-center gap-4 text-xs font-medium"><svg xmlns="http://www.w3.org/2000/svg"
                        width="7" height="12" fill="none" class="stroke-slate-800">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 11 1 6l5-5">
                        </path>
                    </svg>Back to Jobs</button></a></div>
        <div>
            <div class="flex justify-between">
                <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                    <p>{{ $job->company->name }}</p>
                    <div class="flex gap-2 items-center">
                        <p class="text-slate-600 text-xs ">Actively hiring</p><span>-</span>
                        <p class="text-slate-600 text-xs ">Posted 3 months ago</p>
                    </div>
                </div>
                <div class="flex justify-between gap-6"><button class="stroke-slate-600"><svg
                            xmlns="http://www.w3.org/2000/svg" width="15" height="18" fill="none">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m5.103 10.352 4.544 2.921m0-8.546L5.103 7.648m9.147 6.977a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0ZM5.5 9a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm8.75-5.625a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z">
                            </path>
                        </svg></button><button type="button"
                        class="px-5 py-3 font-medium flex justify-center items-center border transition duration-150 ease-in-out rounded-md text-sm focus:outline-none disabled:opacity-75 disabled:cursor-not-allowed text-white bg-slate-800 hover:bg-slate-700 focus:border-slate-700 focus:shadow-outline-slate active:bg-slate-700 hidden sm:block">Apply
                        Now</button></div>
            </div>
            <div class="mt-2 flex justify-between items-center w-full">
                <div class="flex items-center">
                    <div class="flex items-center gap-4">
                        <div
                            class="bg-white flex-initial border h-16 w-16 aspect-square flex items-center justify-center rounded-md">
                            <img class="w-auto object-fit rounded-md w-16"
                            src="{{ asset('storage/' . $job->company->logo_url) }}" >
                        </div>
                        <h3 class="text-3xl font-medium text-slate-600">{{ $job->title }}</h3>
                    </div>
                </div>
            </div>
        </div><button type="button"
            class="px-5 py-3 font-medium flex justify-center items-center border transition duration-150 ease-in-out rounded-md text-sm focus:outline-none disabled:opacity-75 disabled:cursor-not-allowed text-white bg-slate-800 hover:bg-slate-700 focus:border-slate-700 focus:shadow-outline-slate active:bg-slate-700 sm:hidden w-full">Apply
            Now</button>
        <div class="grid grid-cols-1 gap-4 items-start sm:grid-cols-3" data-has-compensation="true"
            data-has-equity="false">
            <div class="bg-white rounded-2xl px-6 py-4 flex flex-col gap-1">
                <div class="space-y-2">
                    <p class="text-xs md:text-sm font-medium text-slate-700">Yearly Compensation</p>
                    <div class="flex items-center">
                        <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-slate-800">$40,000 - $8,000,000</p>
                    </div>
                </div>
                <div class="flex items-center gap-4"></div>
            </div>
            <div class="bg-white rounded-2xl px-6 py-4 flex flex-col gap-2">
                <div class="space-y-2">
                    <p class="text-xs md:text-sm font-medium text-slate-700">Minimum Experience Required</p>
                    <div class="flex items-center">
                        <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-slate-800">3 years</p>
                    </div>
                </div>
            </div>
            <div class="bg-white rounded-2xl px-6 py-4 gap-1 space-y-2">
                <div class="flex justify-between">
                    <p class="text-xs md:text-sm font-medium text-slate-700">Location</p>
                </div>
                <div>
                    <div class="flex flex-wrap">
                        <div>
                            <div
                                class="px-3 py-2 inline-flex items-center rounded-full text-xs font-medium p-2 bg-[#F4F4F4] rounded-md border mr-2 mb-2">
                                {{$job->location}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-2xl px-6 py-4">
            <div>
                <div class="sm:hidden"><label for="tabs" class="sr-only">Select a tab</label><select id="tabs"
                        name="tabs"
                        class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option>Job Details</option>
                        <option>Company Info</option>
                        <option>News</option>
                    </select></div>
                <div class="hidden sm:block">
                    <ul class="flex space-x-4" aria-label="Tabs">
                        <li><button type="button" title=""
                                class="bg-slate-900 text-white rounded-2xl px-4 py-3 text-base font-medium disabled:cursor-not-allowed">Job
                                Details</button></li>
                        <li><button type="button" disabled="" title="No info available for this company"
                                class="text-slate-500 hover:text-slate-900 rounded-2xl px-4 py-3 text-base font-medium disabled:cursor-not-allowed">Company
                                Info</button></li>
                        <li><button type="button" disabled="" title="No info available for this company"
                                class="text-slate-500 hover:text-slate-900 rounded-2xl px-4 py-3 text-base font-medium disabled:cursor-not-allowed">News</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-full mx-auto space-y-8">
            <div class="bg-white rounded-2xl p-6 w-full sm:w-auto">
                <div class="gap-8">
                    <div class="flex items-center">
                        <div>
                            <p class="text-2xl text-slate-800">Requirements</p>
                        </div>
                    </div>
                    <div>
                        <div class="mt-4 flex flex-col gap-2 text-base job-description ">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    {{-- <div class="mt-6">
        <div class="max-w-7xl mx-auto border border-solid">
            <div class="overflow-hidden">
                <div class="p-4 text-gray-900">
                    <div class="flex items-center gap-4">
                        <div
                            class="flex-initial border h-16 w-16 aspect-square flex items-center justify-center rounded-md bg-gray-100">
                            <!-- Company Logo -->
                            <a href="https://boards.greenhouse.io/kalshi">
                                <img class="object-cover rounded-md h-16 w-16"
                                    src="{{ asset('storage/' . $job->company->logo_url) }}">
                            </a>
                        </div>
                        <div class="flex flex-col">
                            <h3 class="text-3xl font-medium text-slate-600">
                                {{ $job->title }}
                            </h3>
                        </div>
                    </div>
                    <div class="flex flex-col">
                    </div>
                </div>
            </div>
        </div>
    </div>






    <div class="py-2">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 gap-4 items-start sm:grid-cols-3" data-has-compensation="true"
                data-has-equity="false">
                <div class="bg-white rounded-2xl px-6 py-4 flex flex-col gap-1">
                    <div class="space-y-2">
                        <p class="text-xs md:text-sm font-medium text-slate-700">Monthly Compensation</p>
                        <div class="flex items-center">
                            <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-slate-800">{{$job->salary}}
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4"></div>
                </div>
                <div class="bg-white rounded-2xl px-6 py-4 flex flex-col gap-2">
                    <div class="space-y-2">
                        <p class="text-xs md:text-sm font-medium text-slate-700">Minimum Experience Required</p>
                        <div class="flex items-center">
                            <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-slate-800">{{$job->requierd_work_experience}} year/s</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-2xl px-6 py-4 gap-1 space-y-1">
                    <div class="flex justify-between">
                        <p class="text-xs md:text-sm font-medium text-slate-700">Location</p>
                    </div>
                    <div>
                        <div class="flex flex-wrap">
                            <div>
                                <div
                                    class="px-3 py-2 inline-flex items-center rounded-full text-xs font-medium p-2 bg-[#F4F4F4] rounded-md border mr-2 mb-2">
                                    {{$job->location}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>

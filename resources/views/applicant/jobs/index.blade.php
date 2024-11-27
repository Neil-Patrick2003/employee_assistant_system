<x-app-layout>

    <div class="flex p-4 sm: flex-col sm:flex-col md:flex-row md:flex-row">
        <div class="w-1/5"> 1</div>
        <div class=" flex-row sm:w-full md:w-4/5">
            <form>
                <div class="flex gap-x-4">
                    <div>
                        <div class="relative flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="absolute w-5 h-5 top-2.5 left-2.5 text-slate-600">
                                <path fill-rule="evenodd"
                                    d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <input
                                class="w-full bg-white placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-10 pr-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                placeholder="Search Jobs" />
                        </div>
                    </div>

                    <div>
                        <div class="relative flex items-center">
                            <!-- SVG icon -->
                            <svg class="w-6 h-6 text-slate-600 absolute left-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                    clip-rule="evenodd" />
                            </svg>

                            <!-- Input field -->
                            <input
                                class="w-full bg-white placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-md pl-10 pr-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                placeholder="Enter Location" />
                        </div>
                    </div>
                    <div>
                        <select id="countries"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2">
                            <option selected>Category</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div>

                    <button type="button"
                        class="inline-flex items-center gap-x-1.5 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        <svg class="-ml-0.5 size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                            data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        Button text
                    </button>
                    <button type="button"
                        class="inline-flex items-center gap-x-1.5 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        <svg class="-ml-0.5 size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                            data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        Button text
                    </button>
                    <button type="button"
                        class="inline-flex items-center gap-x-1.5 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        <svg class="-ml-0.5 size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                            data-slot="icon">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        Button text
                    </button>

                    <div>

            </form>
        </div>
    </div>

    <div class="">
        <div class="w-full mx-auto>
                    <div class="overflow-hidden shadow-sm sm:rounded-lg">
            <div class="">
                @foreach ($jobs as $job)
                    <div class="">
                        <ul class="w-full flex flex-col gap-6 mt-4">
                            <li class="bg-white rounded-md flex p-6">
                                <div class="w-full space-y-1 md:space-y-2">
                                    <div class="flex justify-between items-start">
                                        <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                                            <p class="text-slate-600 text-xs ">{{ $job->company->name }}</p>
                                            <div class="flex items-center gap-2">
                                                <p class="text-slate-600 text-xs">
                                                    {{ $job->created_at }}
                                                </p>
                                                {{-- <div
                                                        class="px-3 py-2 inline-flex items-center rounded-full text-xs font-medium bg-green-100 text-green-500 !py-1 !px-2 text-[10px]">
                                                        Actively hiring
                                                    </div> --}}
                                            </div>
                                        </div>
                                        <div class="flex gap-4">
                                            <button class="stroke-slate-600" fdprocessedid="wwanx">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="18"
                                                    fill="none">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m5.103 10.352 4.544 2.921m0-8.546L5.103 7.648m9.147 6.977a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0ZM5.5 9a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm8.75-5.625a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z">
                                                    </path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-col gap-4 w-full sm:gap-8 sm:flex-row sm:justify-between sm:items-center">
                                        <div class="flex flex-col justify-center gap-4">
                                            <div class="flex gap-4">
                                                <div
                                                    class="flex-initial border h-16 w-16 aspect-square flex items-center justify-center rounded-md">
                                                    <img class="w-auto object-fit rounded-md w-16"
                                                        src="{{ asset('storage/' . $job->company->logo_url) }}">
                                                </div>
                                                <h3 class="text-xl font-medium text-slate-600 md:text-2xl mt-2 flex-1">
                                                    {{ $job->title }}
                                                </h3>

                                            </div>
                                            <div class="flex items-center space-x-3">
                                                <div class="text-xs text-gray-500 flex items-center space-x-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                        aria-hidden="true" class="w-5 h-5 text-gray-500">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                        </path>
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    </svg><span class="">{{ $job->location }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="flex flex-col justify-center items-center divide-y sm:flex-row sm:divide-x sm:divide-y-0 sm:items-center">
                                            <div
                                                class="pb-4 w-full flex flex-col gap-4 justify-center sm:w-auto sm:pr-4 sm:pt-0">
                                                <p class="text-xl text-slate-700 sm:text-right">P
                                                    {{ $job->salary }}/month</p>
                                                <div class="w-full flex justify-between gap-6 sm:justify-end">
                                                    <a class="w-full" href="/jobs/{{ $job->id }}">
                                                        <button type="button"
                                                            class="px-5 py-3 font-medium flex justify-center items-center border transition duration-150 ease-in-out rounded-md text-sm focus:outline-none disabled:opacity-75 disabled:cursor-not-allowed text-slate-600 bg-white border-slate-500 hover:bg-slate-200 whitespace-nowrap w-full"
                                                            fdprocessedid="u6ko35">View Details
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>

    </div>







</x-app-layout>

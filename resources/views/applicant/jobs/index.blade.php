<x-app-layout>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-4">
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                        height="18" fill="none">
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
                                                            {{$job->title}}
                                                        </h3>
                                                    
                                                </div>
                                                <div class="flex items-center space-x-3">
                                                    <div class="text-xs text-gray-500 flex items-center space-x-1"><svg
                                                            xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                            aria-hidden="true" class="w-5 h-5 text-gray-500">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                            </path>
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                        </svg><span class="">{{$job->location}}</span></div>
                                                </div>
                                            </div>
                                            <div
                                                class="flex flex-col justify-center items-center divide-y sm:flex-row sm:divide-x sm:divide-y-0 sm:items-center">
                                                <div
                                                    class="pb-4 w-full flex flex-col gap-4 justify-center sm:w-auto sm:pr-4 sm:pt-0">
                                                    <p class="text-xl text-slate-700 sm:text-right">P {{$job->salary}}/month</p>
                                                    <div class="w-full flex justify-between gap-6 sm:justify-end">
                                                        <a
                                                            class="w-full"
                                                            href="/jobs/{{$job->id}}">
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

</x-app-layout>

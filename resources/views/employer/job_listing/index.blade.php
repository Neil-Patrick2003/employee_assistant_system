<x-employer-layout>

    <div>
        <div class="mt-2 md:flex md:items-center md:justify-between">
            <div class="min-w-0 flex-1">
                <h2 class="text-2xl/7 font-bold text-gray-900 sm:truncate sm:text-3xl sm:tracking-tight">My Posted Jobs
                </h2>
            </div>
            <div class="mt-4 flex shrink-0 md:ml-4 md:mt-0">
                <a href="/employer/jobs/create">
                    <button type="button"
                        class="ml-3 inline-flex items-center rounded-md bg-slate-800 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-slate-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-600">


                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>

                        Post Job
                    </button>
                </a>
            </div>

        </div>
    </div>


    @if (session('success'))
        <div id="success-alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative"
            role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <button type="button" onclick="document.getElementById('success-alert').style.display='none'">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <title>Close</title>
                        <path
                            d="M14.348 5.652a1 1 0 00-1.414 0L10 8.586 7.066 5.652a1 1 0 10-1.414 1.414L8.586 10l-2.934 2.934a1 1 0 001.414 1.414L10 11.414l2.934 2.934a1 1 0 001.414-1.414L11.414 10l2.934-2.934a1 1 0 000-1.414z" />
                    </svg>
                </button>
            </span>
        </div>
    @endif
    <div class="mt-2 overflow-hidden rounded-lg">
        @foreach ($company->jobs as $job)
            <div class="">
                <ul class="w-full flex flex-col gap-6 mt-4 rounded-lg">
                    <li
                        class="bg-white rounded-2xl flex p-6 transition-all duration-300 ease-in-out hover:border-2 hover:border-slate-600">
                        <div class="w-full space-y-1 md:space-y-2">
                            <div class="flex justify-between items-start">
                                <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                                    <p class="text-slate-600 text-xs ">{{ $job->company->name }}</p>
                                    <div class="flex items-center gap-2">
                                        <p class="text-slate-600 text-xs">
                                            {{ $job->created_at }}
                                        </p>
                                    </div>
                                </div>
                                <div class="flex gap-4">
                                    <a href="/employer/jobs/edit/{{ $job->id }}" class="stroke-slate-600">
                                        <svg class="w-6 h-6 text-gray-800" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="0.5"
                                                d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>
                                    </a>
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
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="2" stroke="currentColor" aria-hidden="true"
                                                class="w-5 h-5 text-gray-500">
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
                                        <p class="text-xl text-slate-700 sm:text-right">P {{ $job->salary }}/month</p>
                                        <div class="w-full flex justify-between gap-6 sm:justify-end">
                                            <a class="w-full" href="">
                                                <button type="button"
                                                    class="px-5 py-3 font-medium text-neutral-100 bg-slate-900 flex justify-center items-center transition duration-300 ease-in-out rounded-full text-sm focus:outline-none disabled:opacity-75 disabled:cursor-not-allowed  border-slate-500 hover:bg-slate-600 whitespace-nowrap w-full hover:border-slate-500 focus:ring focus:ring-slate-900 active:scale-95">
                                                    View Details
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
</x-employer-layout>

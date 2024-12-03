<x-app-layout>

    <div aria-live="assertive" class="z-50 fixed inset-0 flex justify-center px-4 py-6 pointer-events-none sm:p-6">
        <div class="w-full flex flex-col items-center space-y-4"></div>
    </div>
    <div class="max-w-7xl mx-auto mt-6 flex flex-col gap-8">
        <div class="flex">
            <a class="w-auto" href="/jobs">
                <button class="flex items-center gap-4 text-xs font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" fill="none"
                        class="stroke-slate-800">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 11 1 6l5-5">
                        </path>
                    </svg>
                    Back to Jobs
                </button>
            </a>
        </div>
        <div>
            <div class="flex justify-between">
                <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                    <p>{{ $job->company->name }}</p>
                    <div class="flex gap-2 items-center">
                        <p class="text-slate-600 text-xs ">Actively hiring</p><span>-</span>
                        <p class="text-slate-600 text-xs ">Posted ago</p>
                    </div>
                </div>
                <form action="/applicant/applications" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $job->id }}" name="job_id">
                    <div x-data="{ modalIsOpen: false }">
                        @if ($job->my_application)
                            <p>Applied last {{ $job->my_application->created_at }}</p>
                        @else
                            <button @click="modalIsOpen = true" type="button"
                                class="cursor-pointer whitespace-nowrap rounded-md bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0">
                                Apply
                                Now
                            </button>
                        @endif
                        <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms
                            x-trap.inert.noscroll="modalIsOpen" @keydown.esc.window="modalIsOpen = false"
                            @click.self="modalIsOpen = false"
                            class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-SM sm:items-center lg:p-8"
                            role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
                            <!-- Modal Dialog -->
                            <div x-show="modalIsOpen"
                                x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
                                x-transition:enter-start="opacity-0 scale-50"
                                x-transition:enter-end="opacity-100 scale-100"
                                class="flex max-w-lg flex-col gap-4 overflow-hidden rounded-md bg-white text-neutral-600 dark:bg-white dark:text-neutral-900">
                                <!-- Dialog Header -->
                                <div class="flex items-center justify-between bg-neutral-50 p-4 dark:bg-neutral-100">
                                    <h3 id="defaultModalTitle"
                                        class="font-semibold tracking-wide text-neutral-900 dark:text-black">Please
                                        Select Resume to Procced
                                        Application
                                    </h3>
                                    <button @click="modalIsOpen = false" aria-label="close modal">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true"
                                            stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>

                                <!-- Dialog Body -->
                                <div class="px-4 py-8">
                                    <input type="hidden" value="{{ $job->id }}">
                                    <select name="resume_id" required
                                        class="w-full py-2 px-3 border border-neutral-300 rounded-md text-sm text-neutral-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition ease-in-out ">
                                        @foreach ($resumes as $resume)
                                            <option value="{{ $resume->id }}">{{ $resume->template }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- Dialog Footer -->
                                <div
                                    class="flex flex-col-reverse justify-between gap-2 bg-neutral-50 p-4 dark:bg-neutral-100 sm:flex-row sm:items-center md:justify-end">
                                    <button @click="modalIsOpen = false" type="button"
                                        class="cursor-pointer whitespace-nowrap rounded-md px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-600 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:text-neutral-900 dark:focus-visible:outline-black">
                                        Cancel
                                    </button>
                                    <button @click="modalIsOpen = false" type="submit"
                                        class="cursor-pointer whitespace-nowrap rounded-md bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-black dark:text-white dark:focus-visible:outline-black">
                                        Apply
                                        Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
            <div class="mt-2 flex justify-between items-center w-full">
                <div class="flex items-center">
                    <div class="flex items-center gap-4">
                        <div
                            class="bg-white flex-initial border h-16 w-16 aspect-square flex items-center justify-center rounded-md">
                            <img class="w-auto object-fit rounded-md w-16"
                                src="{{ asset('storage/' . $job->company->logo_url) }}">
                        </div>
                        <h3 class="text-3xl font-medium text-slate-600">{{ $job->title }}</h3>
                    </div>
                </div>
            </div>
        </div>


        <div class="grid grid-cols-1 gap-4 items-start sm:grid-cols-3" data-has-compensation="true"
            data-has-equity="false">
            <div class="bg-white h-24  rounded-2xl px-6 py-4 flex flex-col gap-1">
                <div class="space-y-2">
                    <p class="text-xs md:text-sm font-medium text-slate-700">Monthly Compensation</p>
                    <div class="flex items-center">
                        <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-slate-800"> ₱ {{ $job->salary }}</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">

                </div>
            </div>
            <div class="bg-white h-24 rounded-2xl px-6 py-4 flex flex-col gap-2">
                <div class="space-y-2">
                    <p class="text-xs md:text-sm font-medium text-slate-700">Minimum Experience Required</p>
                    <div class="flex items-center">
                        <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-slate-800">
                            {{ $job->requierd_work_experience }} years</p>
                    </div>
                </div>
            </div>
            <div class="bg-white h-24  rounded-2xl px-6 py-4 gap-1 space-y-2">
                <div class="flex justify-between">
                    <p class="text-xs md:text-sm font-medium text-slate-700">Location</p>
                </div>
                <div>
                    <div class="flex flex-wrap">
                        <div>
                            <div
                                class="px-3 py-2 inline-flex items-center rounded-full text-xs font-medium p-2 bg-[#F4F4F4] rounded-md border mr-2 mb-2">
                                {{ $job->location }}</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-white h-24 rounded-2xl px-6 py-4 flex flex-col gap-2">
                <div class="space-y-2">
                    <p class="text-xs md:text-sm font-medium text-slate-700">Scope</p>
                    <div class="flex items-center">
                        <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-slate-800">
                            {{ $job->scope }}</p>
                    </div>
                </div>
            </div>
            <div class="bg-white h-24 rounded-2xl px-6 py-4 flex flex-col gap-2">
                <div class="space-y-2">
                    <p class="text-xs md:text-sm font-medium text-slate-700">Work Policy</p>
                    <div class="flex items-center">
                        <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-slate-800">
                            {{ $job->work_policy }} </p>
                    </div>
                </div>
            </div>
            <div class="bg-white h-24 rounded-2xl px-6 py-4 flex flex-col gap-2">
                <div class="space-y-2">
                    <p class="text-xs md:text-sm font-medium text-slate-700">Category</p>
                    <div class="flex items-center">
                        <p class="text-base sm:text-lg md:text-xl lg:text-2xl text-slate-800">
                            {{ $job->category}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-2xl px-6 py-4">
            <div>
                <div class="sm:hidden">
                    <label for="tabs" class="sr-only">
                        Select a tab
                    </label>
                    <select id="tabs" name="tabs"
                        class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        <option>Job Details</option>
                        <option>Company Info</option>
                        <option>News</option>
                    </select>
                </div>
                <div class="hidden sm:block">
                    <ul class="flex space-x-4" aria-label="Tabs">
                        <li>
                            <button type="button" title=""
                                class="bg-slate-900 text-white rounded-2xl px-4 py-3 text-base font-medium disabled:cursor-not-allowed">
                                Job
                                Details
                            </button>
                        </li>
                        <li>
                            <button type="button" disabled="" title="No info available for this company"
                                class="text-slate-500 hover:text-slate-900 rounded-2xl px-4 py-3 text-base font-medium disabled:cursor-not-allowed">
                                Company
                                Info
                            </button>
                        </li>
                        <li>
                            <button type="button" disabled="" title="No info available for this company"
                                class="text-slate-500 hover:text-slate-900 rounded-2xl px-4 py-3 text-base font-medium disabled:cursor-not-allowed">
                                News
                            </button>
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
                            <h2><strong>Description</strong></h2>
                            <p>{{ $job->description }}</p>
                            <ul>
                                <li>
                                    <strong>Require Skills:</strong>
                                </li>
                                @foreach ($job_skills as $job_skill)
                                    <li>{{ $job_skill->name }}ha</li>
                                @endforeach
                            </ul>
                            <h2><strong>Educations</strong></h2>

                                <li>
                                    <strong>{{$job_educations->level}}</strong>
                                    <p>{{ $job_educations->description }}</p>
                                </li>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</x-app-layout>

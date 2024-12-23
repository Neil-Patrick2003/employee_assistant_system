<x-app-layout>



    <div class="bg-indigo-50 h-full container  mx-auto px-4 sm:px-6 lg:px-8">
        <div class=" flex-col h-36 font-sans text-white p-2 md:p-4 lg:p-6 bg-slate-900">
            <p class="text-md lg:text-lg">Hello {{ Auth::check() ? Auth::user()->name : 'Guest' }}</p>
            <h1 class="text-3xl sm:text-2xl md:text-3xl lg:text-4xl font-rubik">Find Your Great Job</h1>
        </div>

        <div class="flex flex-col gap-x-4 sm:flex-col md:flex-col lg:flex-row xl:flex-row text-gray-900">
            <div class="w-full lg:w-4/5  ">
                <div
                    class="w-full overflow-x-hidden mb-4 border rounded-lg shadow-sm bg-white p-2 md:p-4 lg:p-5 xl:p-8 mt-4 border">
                    <h1 class="text-xl font-semibold mb-4">Recommended Jobs</h1>
                    <div class="flex gap-4 overflow-x-auto">
                        @foreach ($matched_jobs as $matched_job)
                            <div
                                class="inline-block bg-white border rounded-xl w-full sm:w-11/12 md:w-96 lg:w-80 xl:w-96 min-w-[280px]">
                                <!-- Card Content -->
                                <div class="flex flex-col justify-between h-full">
                                    <!-- Job Header -->
                                    <div class="flex mt-4 p-4 gap-2 text-gray-900">
                                        <img src="{{ asset('storage/' . $matched_job->company->logo_url) }}"
                                            alt="Company Logo"
                                            class="w-12 h-12 rounded-lg bg-white object-cover ring-1 ring-gray-900/10">
                                        <div class="text-sm font-medium">
                                            <h1 class="text-lg font-semibold">{{ $matched_job->title }}</h1>
                                            <p class="text-sm font-light">{{ $matched_job->created_at }}</p>
                                        </div>
                                    </div>
                                    <!-- Job Details -->
                                    <div class="text-gray-900 px-6 py-4 text-sm divide-y divide-gray-100">
                                        <div class="flex justify-between gap-x-4 py-3">
                                            <dt class="text-gray-500">Status</dt>
                                            <dd class="text-gray-700"><time
                                                    datetime="2022-12-13">{{ $matched_job->status }}</time></dd>
                                        </div>
                                        <div class="flex justify-between gap-x-4 py-3">
                                            <dt class="text-gray-500">Salary</dt>
                                            <dd class="text-gray-700">{{ $matched_job->salary }}</dd>
                                        </div>
                                        <div
                                            class="justify-between sm:flex-col md:flex-col lg:flex-row xl:flex-row gap-x-4 py-3">
                                            <dt class="text-gray-500">Description</dt>
                                            <dd class="text-gray-700">{{ $matched_job->description }}</dd>
                                        </div>
                                    </div>
                                    <!-- Buttons -->
                                    <div
                                        class="flex justify-between px-2 gap-x-2 mb-2 sm:flex-col md:flex-row lg:flex-row xl:flex-row">
                                        <!-- Details Button (Full width on small screens, 1/4 on medium and up) -->
                                        <a href="/jobs/{{ $matched_job->id }}"
                                            class="sm:w-full md:w-1/3 lg:w-1/3 xl:w-1/3 text-sm py-1 px-6 border rounded-full flex justify-center text-indigo-600 hover:bg-indigo-100">
                                            Details
                                        </a>

                                        <!-- Apply Now Button and Modal (Full width on small screens, 3/4 on medium and up) -->
                                        <form action="/applicant/applications" method="POST" class="w-full p-0 m-0">
                                            @csrf
                                            <input type="hidden" value="{{ $matched_job->id }}" name="job_id">
                                            <div x-data="{ modalIsOpen: false }" class="w-full">
                                                @if ($matched_job->my_application)
                                                    <p>Applied last {{ $matched_job->my_application->created_at }}</p>
                                                @else
                                                    <button @click="modalIsOpen = true" type="button"
                                                        class="w-full cursor-pointer whitespace-nowrap rounded-full bg-black px-2 py-1.5 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0">
                                                        Apply Now
                                                    </button>
                                                @endif

                                                <!-- Modal for Resume Selection -->
                                                <div x-cloak x-show="modalIsOpen" x-transition.opacity.duration.200ms
                                                    x-trap.inert.noscroll="modalIsOpen"
                                                    @keydown.esc.window="modalIsOpen = false"
                                                    @click.self="modalIsOpen = false"
                                                    class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-SM sm:items-center lg:p-8"
                                                    role="dialog" aria-modal="true"
                                                    aria-labelledby="defaultModalTitle">

                                                    <!-- Modal Dialog -->
                                                    <div x-show="modalIsOpen"
                                                        x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity"
                                                        x-transition:enter-start="opacity-0 scale-50"
                                                        x-transition:enter-end="opacity-100 scale-100"
                                                        class="flex max-w-lg flex-col gap-4 overflow-hidden rounded-md bg-white text-neutral-600 dark:bg-white dark:text-neutral-900">

                                                        <!-- Dialog Header -->
                                                        <div
                                                            class="flex items-center justify-between bg-neutral-50 p-4 dark:bg-neutral-100">
                                                            <h3 id="defaultModalTitle"
                                                                class="font-semibold tracking-wide text-neutral-900 dark:text-black">
                                                                Please Select Resume to Proceed Application
                                                            </h3>
                                                            <button @click="modalIsOpen = false"
                                                                aria-label="close modal">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24" aria-hidden="true"
                                                                    stroke="currentColor" fill="none"
                                                                    stroke-width="1.4" class="w-5 h-4">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </button>
                                                        </div>

                                                        <!-- Dialog Body -->
                                                        <div class="px-4 py-8">
                                                            <input type="hidden" value="{{ $matched_job->id }}">
                                                            <select name="resume_id" required
                                                                class="w-full py-2 px-3 border border-neutral-300 rounded-md text-sm text-neutral-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition ease-in-out">
                                                                @foreach ($resumes as $resume)
                                                                    <option value="{{ $resume->id }}">
                                                                        {{ $resume->template }}</option>
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
                                                                Apply Now
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class=" border shadow-sm bg-white p:2 md:p-2 lg:p6 xl:p-8 rounded-lg">
                    <div class="mt-2">
                        <h1 class="text-xl font-semibold mb-4">My Recent Applications</h1>
                        <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            @foreach ($applications as $application)
                                <li class="col-span-1 divide-y divide-gray-200 rounded-lg border bg-white shadow">
                                    <div class="flex w-full items-center justify-between space-x-6 p-6">
                                        <div class="flex-1 truncate">
                                            <div class="flex items-center space-x-3">
                                                <h3 class="truncate text-sm font-medium text-gray-900">
                                                    {{ $application->job->title }}</h3>

                                                @if ($application->status == 'Submitted')
                                                    <span
                                                        class="inline-flex shrink-0 items-center rounded-full bg-blue-50 px-1.5 py-0.5 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-600/20">{{ $application->status }}</span>
                                                @elseif ($application->status == 'Hired')
                                                    <span
                                                        class="inline-flex shrink-0 items-center rounded-full bg-red-50 px-1.5 py-0.5 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">{{ $application->status }}</span>
                                                @elseif ($application->status == 'Rejected')
                                                    <span
                                                        class="inline-flex shrink-0 items-center rounded-full bg-blue-50 px-1.5 py-0.5 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-600/20">{{ $application->status }}</span>
                                                @elseif ($application->status == 'Screening')
                                                    <span
                                                        class="inline-flex shrink-0 items-center rounded-full bg-orange-50 px-1.5 py-0.5 text-xs font-medium text-orange-700 ring-1 ring-inset ring-orange-600/20">{{ $application->status }}</span>
                                                @endif

                                            </div>
                                            <p class="mt-1 truncate text-sm text-gray-500">
                                                {{ $application->job->company->name }}</p>
                                        </div>
                                        <img src="{{ asset('storage/' . $application->job->company->logo_url) }}"
                                            alt="Company Logo"
                                            class="w-12 h-12 rounded-lg bg-white object-cover ring-1 ring-gray-900/10">
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>

            {{-- right side --}}
            <div class="w-full bg-white md:w-full lg:w-1/5 xl:w-15 mt-4 p-2 lg:p-4 border rounded-xl">
                <div class="border p-2">
                    <h2 class="text-sm font-medium text-gray-500">Announcement</h2>
                    <ul>
                        @if ($announcements->isEmpty())
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('empty-announcement.png') }}" alt="Notification Icon"
                                    class="max-w-full max-h-24 object-contain">
                            </div>
                            <p class="w-1/2 text-xs font-light text-gray-900 mx-auto text-center">
                                No announcements available at the moment.
                            </p>
                        @else
                            @foreach ($announcements as $announcement)
                                <div class="mt-6 p-2 border rounded">
                                    <div>
                                        <h3 class="text-base font-semibold text-gray-900 mb-2">
                                            {{ $announcement->title }}</h3>
                                        <p class="text-sm font-light emibold text-gray-900">
                                            {{ $announcement->content }}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </ul>
                </div>

                <div class="border mt-4 py-6 px-4">
                    <h2 class="text-sm font-medium text-gray-500">Notification</h2>

                    <ul>
                        @if ($notifications->isEmpty())
                            <div class="flex justify-center items-center">
                                <img src="{{ asset('empty-notif.jpg') }}" alt="Notification Icon"
                                    class="max-w-full max-h-24 object-contain">
                            </div>
                            <p class="w-1/2 text-xs font-light text-gray-900 mx-auto text-center">
                                No notification available at the moment.
                            </p>
                        @else
                            @foreach ($notifications as $notification)
                                <div class="mt-6 p-2 border rounded">
                                    <div class="flex items-start">
                                            <div class="shrink-0">
                                            @if ($notification->message == 'Your application has been marked as Hired')

                                                <svg class="w-6 h-6 text-gray-600 " aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            @elseif ($notification->message == 'Your application has been marked as Screening')
                                                <svg class="w-6 h-6 text-gray-600 " aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M8 12.732A1.99 1.99 0 0 1 7 13H3v6a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2h-2a4 4 0 0 1-4-4v-2.268ZM7 11V7.054a2 2 0 0 0-1.059.644l-2.46 2.87A2 2 0 0 0 3.2 11H7Z"
                                                        clip-rule="evenodd" />
                                                    <path fill-rule="evenodd"
                                                        d="M14 3.054V7h-3.8c.074-.154.168-.3.282-.432l2.46-2.87A2 2 0 0 1 14 3.054ZM16 3v4a2 2 0 0 1-2 2h-4v6a2 2 0 0 0 2 2h7a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-3Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            @else
                                                <svg class="w-6 h-6 text-gray-600" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="currentColor" viewBox="0 0 24 24">
                                                    <path fill-rule="evenodd"
                                                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v5a1 1 0 1 0 2 0V8Zm-1 7a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H12Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            @endif


                                        </div>
                                        <div class="ml-3 w-0 flex-1 pt-0.5">
                                            <p class="text-sm font-medium text-gray-900">Application no. {{$notification->application_id}}</p>
                                            <p class="mt-1 text-sm text-gray-500">{{ $notification->message }}</p>
                                            <div class="mt-3 flex space-x-7">
                                                <a href="/applicant/applications"
                                                    class="rounded-md bg-white text-sm font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">View</button>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </ul>

                </div>
            </div>

        </div>
    </div>

</x-app-layout>

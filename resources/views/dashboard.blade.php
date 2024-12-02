<x-app-layout>


    <div class="bg-white h-full container  mx-auto px-4 sm:px-6 lg:px-8">

        <div class="flex flex-col gap-x-2 sm:flex-col md:flex-col lg:flex-row xl:flex-row text-gray-900">
            <div class="w-full  lg:w-4/5 ">
                <div class=" flex-col font-sans text-white sm:p-2 md:p-4 lg:p-6 bg-slate-900">
                    <p class="sm:text-sm lg:text-lg">Hello {{ Auth::check() ? Auth::user()->name : 'Guest' }}</p>
                    <h1 class="text-3lg sm:text-2xl md:text-3xl lg:text-4xl font-rubik">Find Your Great Job</h1>
                </div>
                <div class="w-full overflow-x-auto bg-white p-4">
                    <h1 class="text-xl font-semibold mb-4">Recommended Jobs</h1>
                    <div class="flex gap-4 overflow-x-auto">
                        @foreach ($matched_jobs as $matched_job)
                            <div
                                class="inline-block bg-white border rounded-xl w-full sm:w-11/12 md:w-96 lg:w-80 xl:w-96 min-w-[280px]">
                                <!-- Card Content -->
                                <div class="flex flex-col h-full">
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
                                    <div class="flex px-2 gap-x-2 mb-2 sm:flex-col md:flex-row lg:flex-row xl:flex-row">
                                        <a href=""
                                            class="sm:w-full md:w-1/3 lg:w-1/3 xl:w-1/3 text-sm py-1 px-2 border rounded-full flex justify-center text-indigo-600 hover:bg-indigo-100">
                                            Details
                                        </a>
                                        <a href=""
                                            class="sm:w-full md:w-2/3 lg:w-2/3 xl:w-2/3 text-sm py-1 px-2 border bg-slate-900 text-white rounded-full flex justify-center hover:bg-slate-600">
                                            Apply Now
                                        </a>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div>
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


                        <!-- More people... -->
                    </ul>

                </div>
            </div>

            {{-- right side --}}
            <div class="w-1/5 h-90 p-2 lg:p-4 border rounded-xl">
                <h2 class="text-sm font-medium text-gray-500">Announcement</h2>

                <ul>
                    @foreach ($announcements as $announcement)
                        <div class="mt-6 p-2 border rounded">
                            <ul></ul>
                            <div>
                                <h3 class="text-base font-semibold text-gray-900 mb-2">{{$announcement->title}}</h3>

                                <p class="text-sm font-light emibold text-gray-900">{{$announcement->content}}</p>
                            </div>

                        </div>
                    @endforeach
                </ul>






            </div>

        </div>
    </div>








    </div>












</x-app-layout>

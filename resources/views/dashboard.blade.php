<x-app-layout>

    <div class="bg-white container mx-auto px-4 sm:px-6 lg:px-8">




        <div class=" flex-col font-sans text-white sm:p-2 md:p-4 lg:p-6 bg-slate-900">
            <p class="sm:text-sm lg:text-lg">Hello {{ Auth::check() ? Auth::user()->name : 'Guest' }}</p>
            <h1 class="text-3lg sm:text-2xl md:text-3xl lg:text-4xl font-rubik">Find Your Great Job</h1>
        </div>


        <div class="w-full overflow-x-auto bg-white p-4">
            <h1>Recommended Jobs</h1>
            <div class="flex gap-2 sm:gap-4 md:gap-2">
                @foreach ($matched_jobs as $matched_job)
                    <div
                        class="inline-block w-40 min-w-[200px] h-80 min-h-[240px] bg-white border justify-between  rounded-xl sm:w-52 md:w-64 lg:w-72 xl:w-86">
                        <!-- Card Content -->

                        <div class="flex justify-between h-full flex-col">
                            
                            <div class="flex mt-4 p-4 gap-2 h-full text-white">
                                <img src="{{ asset('storage/' . $matched_job->company->logo_url) }}" alt="Tuple"
                                    class="size-12 flex-none rounded-lg bg-white object-cover ring-1 ring-gray-900/10">
                                <div class="text-sm/6 font-medium text-gray-900">
                                    <h1 class="text-lg font-medium">{{ $matched_job->title }}</h1>
                                    <p class="text-sm font-light">{{ $matched_job->created_at }}</p>
                                </div>
                            </div>
                            <div class="text-gray-900 px-2 divide-y divide-gray-100 px-6 py-4 text-sm/6">
                                <div class="flex justify-between gap-x-4 py-3">
                                    <dt class="text-gray-500">Status</dt>
                                    <dd class="text-gray-700"><time datetime="2022-12-13">{{ $matched_job->status }}</time>
                                    </dd>
                                </div>
                                <div class="flex justify-between gap-x-4 py-3">
                                    <dt class="text-gray-500">Status</dt>
                                    <dd class="text-gray-700"><time datetime="2022-12-13">{{ $matched_job->status }}</time>
                                    </dd>
                                </div>
                                <div class="flex justify-between gap-x-4 py-3">
                                    <dt class="text-gray-500">Status</dt>
                                    <dd class="text-gray-700"><time datetime="2022-12-13">{{ $matched_job->status }}</time>
                                    </dd>
                                </div>
                            </div>
                            
                            <div class="flex flex-row px-2 gap-x-2 mb-2">
                                <a href="" class="w-1/3 text-sm py-1 px-2 border rounded-full flex justify-center">Details</a>
                                <a href="" class="w-2/3 text-white text-sm py-1 px-2 border bg-slate-900 rounded-full flex justify-center">Apply Now</a>

                            </div>
                            
                        </div>
                    </div>
                @endforeach
            </div>
        </div>



    </div>












</x-app-layout>

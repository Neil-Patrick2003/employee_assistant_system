<x-employer-layout>


    <div class="mx-auto max-w-7xl px-0 md:px-2 lg:px-4">

        <div class="flex bg-white h-64 relative">
            <img src="{{ asset('home.png') }}" alt="Notification Icon" class="max-w-full object-cover">
            <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center bg-black bg-opacity-50">
                <div class="text-center text-white">
                    <h2 class="text-2xl font-bold mb-4">Welcome Employers!</h2>
                    <p class="mb-4">Looking to post a new job? Click below to get started and attract top talent to
                        your company.</p>
                    <a href="/jobs/create" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                        Post a Job
                    </a>
                </div>
            </div>
        </div>

        @if (empty($all_jobs))
            <div>
                <h3 class="text-base font-semibold text-gray-900">Last 30 days</h3>
                <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
                    <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                        <dt class="truncate text-sm font-medium text-gray-500">All Jobs</dt>
                        <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $all_jobs }}</dd>
                    </div>
                    <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                        <dt class="truncate text-sm font-medium text-gray-500">Open Jobs</dt>
                        <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $active_jobs }}</dd>
                    </div>
                    <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                        <dt class="truncate text-sm font-medium text-gray-500">Applicants</dt>
                        <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{ $all_applicants }}</dd>
                    </div>
                </dl>
            </div>
        @endif





    </div>



</x-employer-layout>

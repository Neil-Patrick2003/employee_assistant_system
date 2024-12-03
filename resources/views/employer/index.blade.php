<x-employer-layout>


    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div>
            <h3 class="text-base font-semibold text-gray-900">Last 30 days</h3>
            <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
                <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                    <dt class="truncate text-sm font-medium text-gray-500">All Jobs</dt>
                    <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{$all_jobs}}</dd>
                </div>
                <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                    <dt class="truncate text-sm font-medium text-gray-500">Open Jobs</dt>
                    <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{$active_jobs}}</dd>
                </div>
                <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                    <dt class="truncate text-sm font-medium text-gray-500">Applicants</dt>
                    <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">{{$all_applicants}}</dd>
                </div>
            </dl>
        </div>

    </div>



</x-employer-layout>

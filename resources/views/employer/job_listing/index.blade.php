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
                        class="ml-3 inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Post Job</button>
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
    <div class="mt-2 overflow-hidden rounded-lg bg-white shadow">
        @foreach ($company->jobs as $job)
            <div class="overflow-hidden rounded-lg bg-white shadow">
                <div class="p-4 grid grid-cols-4 gap-4">
                    <div class="col-span-3 ...">
                        <div class="flex justify-start  gap-2">
                            <div><img class="inline-block size-16 rounded-md " src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                            </div>
                            <div class="S">
                                <h3>{{$job->title}}</h3>
                                <p>Description</p>
                            </div>
                        </div>
                    </div>
                    <div class="...">2</div>

                </div>
            </div>
        @endforeach
    </div>




</x-employer-layout>

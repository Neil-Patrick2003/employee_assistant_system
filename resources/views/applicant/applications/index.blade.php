<x-app-layout>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">



        <div class="sm:flex sm:items-center py-6">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold text-gray-900">My Applications</h1>
            </div>
        </div>
        <div class="border rounded-xl bg-slate-900  ">

            <div class="mt-4 flow-root">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class=" inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="  p-4 bg-slate-900 ">
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 ml-8 text-left text-sm font-semibold text-slate-100 sm:pl-0">
                                        <div class="pl-4">Job Title</div>

                                    </th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-slate-100">Project</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-slate-100">Resume</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-slate-100">Status</th>
                                    <th scope="col"
                                        class="px-3 py-3.5 text-left text-sm font-semibold text-slate-100">Created At
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white ">
                                @foreach ($applications as $application)
                                    <tr>
                                        <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                            <div class="text-gray-900 font-medium">
                                                <a
                                                    href="/jobs/{{ $application->job_id }}">{{ $application->job->title }}</a>
                                                </ </div>
                                        </td>
                                        <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                                            <div class="flex items-center">
                                                <div class="size-11 shrink-0">


                                                    <img class="size-11 rounded-full"
                                                        src="{{ asset('storage/' . $application->job->company->logo_url) }}"
                                                        alt="Logo">
                                                </div>
                                                <div class="ml-4">
                                                    <div class="font-medium text-gray-900">
                                                        {{ $application->job->company->name }}
                                                    </div>
                                                    <div></div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                            <a href="/resumes/${{ $application->resume_id }}">View Resume
                                            </a>
                                        </td>

                                        <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">

                                            @if ($application->status == 'Submitted')
                                                <span
                                                    class="inline-flex items-center rounded-md bg-blue-100 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-600/20">{{ $application->status }}</span>
                                            @elseif ($application->status == 'Accepted')
                                                <span
                                                    class="inline-flex items-center rounded-md bg-green-100 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">{{ $application->status }}</span>
                                            @else
                                                <span
                                                    class="inline-flex items-center rounded-md bg-red-100 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">{{ $application->status }}</span>
                                            @endif




                                        </td>
                                        <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                            {{ $application->created_at }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>




</x-app-layout>

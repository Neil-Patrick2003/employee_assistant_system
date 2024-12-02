<x-employer-layout>
    <div class="flex gap-4  mb-6">
        <div class="w-1/4">
            <div
                class="flex rounded-3xl flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-4 sm:px-6 xl:px-8">
                <dt class="text-sm/6 font-medium text-gray-500">All Applications</dt>
                <dd class="w-full flex-none text-3xl/10 font-medium tracking-tight text-gray-900">{{ $all_count }}
                </dd>
            </div>
        </div>
        <div class="w-1/4 ">
            <div
                class="flex rounded-3xl flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-4 sm:px-6 xl:px-8">
                <dt class="text-sm/6 font-medium text-gray-500">Submitted</dt>
                <dd class="w-full flex-none text-3xl/10 font-medium tracking-tight text-gray-900">{{ $submitted_count }}
                </dd>
            </div>
        </div>

        <div class="w-1/4">
            <div
                class="flex rounded-3xl flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-4 sm:px-6 xl:px-8">
                <dt class="text-sm/6 font-medium text-gray-500">Screening</dt>
                <dd class="w-full flex-none text-3xl/10 font-medium tracking-tight text-gray-900">{{ $screening_count }}
                </dd>
            </div>
        </div>
        <div class="w-1/4">
            <div
                class="flex rounded-3xl flex-wrap items-baseline justify-between gap-x-4 gap-y-2 bg-white px-4 py-4 sm:px-6 xl:px-8">
                <dt class="text-sm/6 font-medium text-gray-500">Hired</dt>
                <dd class="w-full flex-none text-3xl/10 font-medium tracking-tight text-gray-900">{{ $hired_count }}
                </dd>
            </div>
        </div>

    </div>




    {{-- sucess message --}}
    @if (session('status'))
        <div id="notification" class="rounded-md bg-green-50 p-4">
            <div class="flex">
                <div class="shrink-0">
                    <svg class="size-5 text-green-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                        data-slot="icon">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16Zm3.857-9.809a.75.75 0 0 0-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 1 0-1.06 1.061l2.5 2.5a.75.75 0 0 0 1.137-.089l4-5.5Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium text-green-800">{{ session('status') }}</p>
                </div>
                <div class="ml-auto pl-3">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button"
                            class="inline-flex rounded-md bg-green-50 p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50"
                            onclick="document.getElementById('notification').style.display='none'">
                            <span class="sr-only">Dismiss</span>
                            <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
                                data-slot="icon">
                                <path
                                    d="M6.28 5.22a.75.75 0 0 0-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 1 0 1.06 1.06L10 11.06l3.72 3.72a.75.75 0 1 0 1.06-1.06L11.06 10l3.72-3.72a.75.75 0 0 0-1.06-1.06L10 8.94 6.28 5.22Z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif

    {{-- table for applicant list --}}
    <div class="px-4 sm:px-6 lg:px-8 border bg-white shadow-sm rounded-3xl ">
        <div class="mt-8 bg-white flow-root">
            <div class="-mx-4 -my-2 bg-white overflow-x-auto sm:-mx-6 lg:-mx-8 ">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <table class="min-w-full bg-white divide-y divide-gray-300">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                    <div class="pl-4">Job</div>
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Applicant Name </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Resume</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Status</th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Created at</th>
                                <th scope="col"
                                    class="relative py-3.5 pl-3 pr-4 sm:pr-0 font-semibold text-gray-900">
                                    <div>Action</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach ($applications as $application)
                                <tr>
                                    <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                        <div class="text-gray-900">
                                            <a href="/jobs/{{ $application->job_id }}">{{ $application->job->title }}
                                            </a>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                                        <div class="flex items-center">
                                            <div class="size-11 shrink-0">
                                                <img class="size-11 rounded-full"
                                                    src="{{ $application->user->photo_url ? asset('storage/' . $application->user->photo_url) : 'https://www.pngmart.com/files/23/Profile-PNG-Photo.png' }}"
                                                    alt="User Photo">

                                            </div>
                                            <div class="ml-4">
                                                <div class="font-medium text-gray-900">{{ $application->user->name }}
                                                </div>
                                                <div class="mt-1 text-gray-500">{{ $application->user->email }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                        <a href="/resumes/${{ $application->resume_id }}">View Resume
                                        </a>
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                        <center>
                                            @if ($application->status == 'Submitted')
                                                <span
                                                    class="inline-flex items-center rounded-md bg-blue-100 px-2 py-1 text-xs font-medium text-blue-700 ring-1 ring-inset ring-blue-600/20">{{ $application->status }}</span>
                                            @elseif ($application->status == 'Hired')
                                                <span
                                                    class="inline-flex items-center rounded-md bg-green-100 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">{{ $application->status }}</span>
                                            @else
                                                <span
                                                    class="inline-flex items-center rounded-md bg-red-100 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">{{ $application->status }}</span>
                                            @endif
                                        </center>
                                    </td>
                                    <td>
                                        <div class="ml-4">
                                            <div class="font-medium text-sm text-gray-900">
                                                {{ $application->created_at }}
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="flex whitespace-nowrap py-5 pl-3 pr-4 text-sm font-medium sm:pr-0 gap-x-2">
                                        @if ($application->status == 'Submitted')
                                            <div class="flex w-full gap-2">
                                                <form action="/employer/applications/{{ $application->id }}"
                                                    method="POST" class="w-1/2">
                                                    @csrf
                                                    @method('Patch')
                                                    <input type="hidden" name="status" value="Screening">
                                                    <button type="submit"
                                                        class="w-full px-4 py-2 bg-green-600 rounded-full text-neutral-100 hover:bg-green-700 transition duration-300 ease-in-out hover:text-white">
                                                        For Screening
                                                    </button>
                                                </form>
                                                <form action="/employer/applications/{{ $application->id }}"
                                                    method="POST" class="w-1/2">
                                                    @csrf
                                                    @method('Patch')
                                                    <input type="hidden" name="status" value="Rejected">
                                                    <button type="submit"
                                                        class="w-full px-4 py-2 bg-red-600 rounded-full text-neutral-100 hover:bg-red-700 transition duration-300 ease-in-out hover:text-white">
                                                        Reject
                                                    </button>
                                                </form>
                                            </div>
                                        @elseif ($application->status == 'Screening')
                                            <div class="flex w-full gap-2">
                                                <form action="/employer/applications/{{ $application->id }}"
                                                    method="POST" class="w-1/2">
                                                    @csrf
                                                    @method('Patch')
                                                    <input type="hidden" name="status" value="Hired">
                                                    <button type="submit"
                                                        class="w-full px-4 py-2 bg-green-600 rounded-full text-neutral-100 hover:bg-green-700 transition duration-300 ease-in-out hover:text-white">
                                                        Accept
                                                    </button>
                                                </form>
                                                <form action="/employer/applications/{{ $application->id }}"
                                                    method="POST" class="w-1/2">
                                                    @csrf
                                                    @method('Patch')
                                                    <input type="hidden" name="status" value="Rejected">
                                                    <button type="submit"
                                                        class="w-full px-4 py-2 bg-red-600 rounded-full text-neutral-100 hover:bg-red-700 transition duration-300 ease-in-out hover:text-white">
                                                        Reject
                                                    </button>
                                                </form>
                                            </div>
                                        @else
                                            <div class="flex justify-center items-center text-gray-500 w-full">---
                                            </div>
                                        @endif
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</x-employer-layout>

<x-employer-layout>
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="px-4 py-6 sm:px-6 flex items-center">
            <div>
                <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Configuration</p>
            </div>
        </div>

        <div class="border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-900">Category</dt>
                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">

                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-900">Job skills</dt>
                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">
                        <div class="space-y-2">
                            <div class="space-y-2">
                                <label for="job_skills" class="block text-sm/6 font-medium text-gray-900">Add
                                    Skills</label>
                                <form action="/employer/configuration/add-skill" method="POST">
                                    @csrf
                                    <div class="flex">
                                        <div class="grow">
                                            <input type="text" name="job_skill" id="job_skills"
                                                class="block w-full rounded-md border-0 pl-2 py-1.5 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-sky-500 sm:text-sm/6"
                                                placeholder="Skills" aria-describedby="add-team-members-helper">
                                        </div>
                                        <span class="ml-3">
                                            <button type="submit"
                                                class="inline-flex items-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                                <svg class="-ml-0.5 size-5 text-gray-400" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path
                                                        d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
                                                </svg>
                                                Add
                                            </button>
                                        </span>
                                    </div>
                                </form>
                            </div>

                            <div class="border-b border-gray-200">
                                <ul role="list" class="divide-y divide-gray-200">
                                    @foreach ($job_skills as $job_skill)
                                    <li class="flex py-4">
                                        <div class="ml-3 flex flex-col">
                                            <span class="text-sm font-medium text-gray-900"> {{$job_skill->name}} </span>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-900">Education Level</dt>
                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">sadadsa</dd>
                </div>
            </dl>
        </div>
    </div>

    <button type="button" onclick="document.getElementById('modal').classList.remove('hidden')"
        class="inline-flex items-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
        <svg class="-ml-0.5 size-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"
            data-slot="icon">
            <path
                d="M10.75 4.75a.75.75 0 0 0-1.5 0v4.5h-4.5a.75.75 0 0 0 0 1.5h4.5v4.5a.75.75 0 0 0 1.5 0v-4.5h4.5a.75.75 0 0 0 0-1.5h-4.5v-4.5Z" />
        </svg>
        Add
    </button>

    <!-- Modal -->
    <div id="modal" class="relative z-10 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500/75 transition-opacity" aria-hidden="true"></div>
        <div class="fixed inset-0 z-10 flex items-center justify-center w-screen overflow-y-auto">
            <div
                class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>
                <div class="mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                    <button type="button"
                        class="inline-flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:col-start-2">Deactivate</button>
                    <button type="button" onclick="document.getElementById('modal').classList.add('hidden')"
                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:col-start-1 sm:mt-0">Cancel</button>
                </div>
            </div>
        </div>
    </div>

</x-employer-layout>

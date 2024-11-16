<x-employer-layout>

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <form action="/employer/jobs/create" method="POST">
            @csrf
            <div class="space-y-12">
                <div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
                    <div>
                        <h2 class="text-base/7 font-semibold text-gray-900">Job Details</h2>
                        <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful
                            what you share.</p>
                    </div>

                    <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
                        <div class="sm:col-span-4">
                            <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="title" id="title"
                                        class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6">
                                </div>
                                @error('title')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="description"
                                class="block text-sm/6 font-medium text-gray-900">Description</label>
                            <div class="mt-2">
                                <textarea id="description" name="description" rows="3"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"></textarea>
                            </div>
                            <p class="mt-3 text-sm/6 text-gray-600">Write a few description about Jobs.</p>
                            @error('description')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="sm:col-span-4">
                            <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="salary" id="salary" placeholder="00.00"
                                        class="block pl-2 flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6">
                                </div>
                                @error('salary')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="location" class="block text-sm/6 font-medium text-gray-900">Location</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="location" id="location"
                                        class="block pl-2 flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm/6">
                                </div>
                                @error('location')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="work_policy" class="block text-sm/6 font-medium text-gray-900">Work
                                Policy</label>
                            <div class="mt-2">
                                <select id="work_policy" name="work_policy"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6">
                                    <option>Onsite</option>
                                    <option>Remote</option>
                                    <option>Hybrid</option>
                                </select>
                            </div>
                            @error('work_policy')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="sm:col-span-4">
                            <label for="category" class="block text-sm/6 font-medium text-gray-900">
                                category</label>
                            <div class="mt-2">
                                <select id="category" name="category"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm/6">
                                    <option>Category</option>
                                    <option>category 1</option>
                                    <option>category 2</option>
                                </select>
                            </div>
                            @error('category')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-x-8 gap-y-10 border-b border-gray-900/10 pb-12 md:grid-cols-3">
                    <div>
                        <h2 class="text-base/7 font-semibold text-gray-900">Background Requirements</h2>
                        <p class="mt-1 text-sm/6 text-gray-600">Use a permanent address where you can receive mail.</p>
                    </div>

                    <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 md:col-span-2">
                        <div class="sm:col-span-3">
                            <label for="min_age" class="block text-sm/6 font-medium text-gray-900">Minimum Age</label>
                            <div class="mt-2">
                                <input type="text" name="min_age" id="min-age"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                            </div>
                            @error('min_age')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="sm:col-span-3">
                            <label for="max_age" class="block text-sm/6 font-medium text-gray-900">Maximum Age</label>
                            <div class="mt-2">
                                <input type="text" name="max_age" id="max_age" autocomplete="family-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                            </div>
                            @error('max_age')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="sm:col-span-3">
                            <label for="work_experience" class="block text-sm/6 font-medium text-gray-900">
                                Work Experience (in years)</label>
                            <div class="mt-2">
                                <input type="text" name="work_experience" id="wprk_experience"
                                    autocomplete="family-name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                            </div>
                            @error('work_experience')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-span-full">
                            <label for="scope" class="block text-sm/6 font-medium text-gray-900">Scope</label>
                            <div class="mt-2">
                                <textarea id="scope" name="scope" rows="3"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6"></textarea>
                            </div>
                            <p class="mt-3 text-sm/6 text-gray-600">Write a scope of the Jobs.</p>
                            @error('scope')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </div>




</x-employer-layout>

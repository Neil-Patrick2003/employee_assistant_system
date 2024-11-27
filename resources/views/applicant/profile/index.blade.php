<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-12 py-4">

        <form action="/applicant/profile/edit" method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-3 lg:grid-cols-5">
                <!-- Profile Image Section -->

                <div class="py-2 h-120 pt-4 col-span-1  border rounded-lg bg-white shadow">
                    <div class="flex-col justify-center align-center pt-6">
                        <center>
                            <img class="inline-block size-14 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </center>

                        <div>
                            <label for="uploadFile1"
                                class="flex bg-gray-800 hover:bg-gray-700 mt-2 text-white text-sm px-3 py-1 outline-none rounded w-max cursor-pointer mx-auto font-[sans-serif]">
                                Upload Image
                                <input type="file" id='uploadFile1' class="hidden" />
                            </label>

                        </div>

                    </div>
                    <div class=" p-4">
                        <h1 class="text-xl font-medium">{{ Auth::user()->name }}</h1>
                        <p class="text-sm font-light"></p>
                    </div>
                </div>

                <!-- Input Fields Section -->
                <div class="col-span-2 sm:col-span-3 lg:col-span-2">


                    <!-- Salary Expectations -->
                    <div class="border mb-4 divide-gray-200 rounded-lg bg-white shadow ">
                        <div class="p-4 h-28">
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="salary_expectations" class="text-sm font-medium text-gray-900">Salary
                                        Expectations</label>
                                    <button
                                        class="toggle-btn p-2 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                        data-target="salary_expectations">
                                        <svg class="w-[20px] h-[20px] text-gray-800 " aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>

                                    </button>
                                </div>
                                <div class="mt-2">
                                    <input type="text" name="salary_expectations" id="salary_expectations"
                                        class="block w-full rounded-full px-4 py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                        style="border: none;" placeholder="Enter Salary" readonly
                                        value="{{ old('salary_expectations', $jobPreferences->min_salary ?? '') }}">
                                    @error('salary_expectations')
                                        <div class="text-red-500 text-sm mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Years of Work Experience -->
                    <div class="border mb-4 divide-gray-200 rounded-lg bg-white shadow ">
                        <div class="p-4 h-28">
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="work_experience" class="text-sm font-medium text-gray-900">Years Work
                                        Experience</label>
                                    <button
                                        class="toggle-btn p-2 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                        data-target="work_experience">
                                        <svg class="w-[20px] h-[20px] text-gray-800" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>

                                    </button>
                                </div>
                                <div class="mt-2">
                                    <input type="text" name="work_experience" id="work_experience"
                                        class="block w-full rounded-full px-4 py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                        style="border: none;" placeholder="Enter Work Experience" readonly>
                                    @error('work_experience')
                                        <div class="text-red-500 text-sm mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Category -->
                    <div class="border mb-4 divide-gray-200 rounded-lg bg-white shadow ">
                        <div class="p-4 h-28">
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="category" class="text-sm font-medium text-gray-900">Category</label>
                                    <button
                                        class="toggle-btn p-2 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                        data-target="category">
                                        <svg class="w-[20px] h-[20px] text-gray-800 aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>

                                    </button>
                                </div>
                                <div class="mt-2">
                                    <input type="text" name="category" id="category"
                                        class="block w-full rounded-full px-4 py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                        style="border: none;" placeholder="Enter Category" readonly>
                                    @error('category')
                                        <div class="text-red-500 text-sm mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Additional Fields -->
                <div class="col-span-1 sm:col-span-3 lg:col-span-2 ">

                    <!-- Work Policy -->
                    <div class="border mb-4 divide-gray-200 rounded-lg bg-white shadow ">
                        <div class="p-4 h-28">
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="work_policy" class="text-sm font-medium text-gray-900">Work
                                        Policy</label>
                                    <button
                                        class="toggle-btn p-2 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                        data-target="work_policy">
                                        <svg class="w-[20px] h-[20px] text-gray-800 " aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>

                                    </button>
                                </div>
                                <div class="mt-2">
                                    <input type="text" name="work_policy" id="work_policy"
                                        class="block w-full rounded-full px-4 py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                        style="border: none;" placeholder="Enter Work Policy" readonly>

                                    @error('work_policy')
                                        <div class="text-red-500 text-sm mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Location -->
                    <div class="border mb-4 divide-gray-200 rounded-lg bg-white shadow ">
                        <div class="p-4 h-28">
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="location" class="text-sm font-medium text-gray-900">Location</label>
                                    <button
                                        class="toggle-btn p-2 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                        data-target="location">
                                        <svg class="w-[20px] h-[20px] text-gray-800 " aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>

                                    </button>
                                </div>
                                <div class="mt-2">
                                    <input type="text" name="location" id="location"
                                        class="block w-full rounded-full px-4 py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                        style="border: none;" placeholder="Enter Location" readonly>
                                    @error('location')
                                        <div class="text-red-500 text-sm mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- scope -->
                    <div class="border mb-4 divide-gray-200 rounded-lg bg-white shadow ">
                        <div class="p-4 h-28">
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="scope" class="text-sm font-medium text-gray-900">Scope</label>
                                    <button
                                        class="toggle-btn p-2 text-white rounded-md  focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                        data-target="scope">
                                        <svg class="w-[20px] h-[20px] text-gray-800" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                        </svg>

                                    </button>
                                </div>
                                <div class="mt-2">
                                    <input type="text" name="scope" id="scope"
                                        class="block w-full rounded-full px-4 py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                        style="border: none;" placeholder="Enter Location" readonly>

                                    @error('scope')
                                        <div class="text-red-500 text-sm mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>

                        <button type="submit"
                            class="w-full py-2 px-4 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            Save Changes
                        </button>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->


        </form>

        <div class="grid grid-cols-1 gap-12 sm:grid-cols-3 lg:grid-cols-5">
            <div></div>
            <div class="col-span-4">
                <div class="overflow-hidden rounded-lg bg-white shadow">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex space between">

                            <h3 class="relative">
                                Education
                            </h3>



                            <div x-data="{ modelOpen: false }">
                                <button @click="modelOpen =!modelOpen"
                                    class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform rounded-md mt-4">
                                    <svg class="w-6 h-6 text-gray-800 " aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4.243a1 1 0 1 0-2 0V11H7.757a1 1 0 1 0 0 2H11v3.243a1 1 0 1 0 2 0V13h3.243a1 1 0 1 0 0-2H13V7.757Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span>Invite Member</span>
                                </button>

                                <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto"
                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                    <div
                                        class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
                                        <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                                            x-transition:enter="transition ease-out duration-200 transform"
                                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                                            class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40"
                                            aria-hidden="true"></div>

                                        <div x-cloak x-show="modelOpen"
                                            x-transition:enter="transition ease-out duration-300 transform"
                                            x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave="transition ease-in duration-200 transform"
                                            x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                            x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                            class="inline-block w-full max-w-xl p-8 my-20 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl 2xl:max-w-2xl">

                                            <div class="flex items-center justify-between space-x-4">
                                                <h1 class="text-xl font-medium text-gray-800">Add Education</h1>
                                                <button @click="modelOpen = false"
                                                    class="text-gray-600 focus:outline-none hover:text-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                </button>
                                            </div>

                                            <p class="mt-2 text-sm text-gray-500">Add your Education Level and
                                                Description here</p>

                                            <form action="/applicant/profile/add-education" class="mt-5"
                                                method="POST">
                                                @csrf
                                                <div>
                                                    <label for="countries"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select
                                                        an option</label>
                                                    <select id="countries" name='level'
                                                        class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                                        <option selected>Choose a country</option>
                                                        <option value="Elementary">Elementary</option>
                                                        <option value="High School">High School</option>
                                                        <option value="College">College</option>
                                                    </select>
                                                </div>

                                                <div class="mt-4">
                                                    <label for="description"
                                                        class="block text-sm text-gray-700 capitalize border-gray-300">
                                                        Description</label>
                                                    <input type="textarea" name="description"
                                                        class="block w-full px-3 py-2 mt-2 text-gray-600 placeholder-gray-400 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40">
                                                </div>

                                                <div class="flex justify-end mt-6">
                                                    <button type="submit"
                                                        class="px-3 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                                        Add
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>





                        <div class="p-4 mt-4 divide-gray-200 rounded-lg bg-indigo-50  ">
                            <div class="flex items-center justify-between">
                                <label for="scope" class="text-sm font-medium text-gray-900">Education</label>
                                <button
                                    class="toggle-btn p-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                    data-target="scope">
                                    <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                    </svg>

                                </button>
                            </div>
                            <div class="mt-2">
                                <input type="text" name="scope" id="scope"
                                    class="block w-full bg-indigo-50 rounded-full px-4 py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                    style="border: none;" placeholder="Enter Location" readonly>

                                @error('scope')
                                    <div class="text-red-500 text-sm mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>





    <!-- JavaScript to handle toggle between readonly and editable -->
    <script>
        function toggleEditability(inputId, button, event) {
            event.preventDefault(); // Prevent form submission when the button is clicked

            const inputField = document.getElementById(inputId);

            // Check if the input is readonly or not
            if (inputField.hasAttribute('readonly')) {
                // If readonly, remove it to make the field editable
                inputField.removeAttribute('readonly');
                // Change the icon to "Save" (checkmark)
                button.querySelector('svg path').setAttribute('d', 'M5 13l4 4L19 7'); // Save Icon (checkmark)
            } else {
                // If editable, add readonly back to make the field non-editable
                inputField.setAttribute('readonly', true);
                // Change the icon to "Edit" (pencil)
                button.querySelector('svg path').setAttribute('d',
                    'm14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z'
                ); // Edit Icon (pencil)
            }
        }

        // Attach the event listeners to the toggle buttons
        document.querySelectorAll('.toggle-btn').forEach(button => {
            button.addEventListener('click', (event) => {
                const inputId = button.getAttribute('data-target');
                toggleEditability(inputId, button, event); // Pass the event to the function
            });
        });
    </script>

</x-app-layout>

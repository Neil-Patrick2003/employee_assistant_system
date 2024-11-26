<x-app-layout>
    <div class="px-4 sm:px-6 lg:px-12 py-4">

        <form action="/applicant/profile/edit" method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-2 sm:grid-cols-3 lg:grid-cols-5">
                <!-- Profile Image Section -->
                <div class="py-2 h-120 pt-4 col-span-1 divide-y border divide-gray-200 rounded-lg bg-white shadow">
                    <center>
                        <img class="inline-block size-12 rounded-full"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                    </center>
                </div>

                <!-- Input Fields Section -->
                <div class="p-2 col-span-2 sm:col-span-3 lg:col-span-2 gap-y-2">

                    <!-- Salary Expectations -->
                    <div class="border mb-4 divide-gray-200 rounded-lg bg-white shadow ">
                        <div class="p-6 h-40">
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="salary_expectations" class="text-sm font-medium text-gray-900">Salary
                                        Expectations</label>
                                    <button
                                        class="toggle-btn p-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                        data-target="salary_expectations">
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
                                    <input type="text" name="salary_expectations" id="salary_expectations"
                                        class="block w-full rounded-full px-4 py-1.5 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                        style="border: none;" placeholder="Enter Salary" readonly value="{{ old('salary_expectations', $jobPreferences->min_salary ?? '') }}">
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
                        <div class="p-6 h-40">
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="work_experience" class="text-sm font-medium text-gray-900">Years Work
                                        Experience</label>
                                    <button
                                        class="toggle-btn p-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                        data-target="work_experience">
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
                        <div class="p-6 h-40">
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="category" class="text-sm font-medium text-gray-900">Category</label>
                                    <button
                                        class="toggle-btn p-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                        data-target="category">
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
                <div class="p-2 col-span-1 sm:col-span-3 lg:col-span-2 gap-y-2">

                    <!-- Work Policy -->
                    <div class="border mb-4 divide-gray-200 rounded-lg bg-white shadow ">
                        <div class="p-6 h-40">
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="work_policy" class="text-sm font-medium text-gray-900">Work
                                        Policy</label>
                                    <button
                                        class="toggle-btn p-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                        data-target="work_policy">
                                        <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white" aria-hidden="true"
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
                        <div class="p-6 h-40">
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="location" class="text-sm font-medium text-gray-900">Location</label>
                                    <button
                                        class="toggle-btn p-2  bg-blue-500 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                        data-target="location">
                                        <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
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
                        <div class="p-6 h-40">
                            <div>
                                <div class="flex items-center justify-between">
                                    <label for="scope" class="text-sm font-medium text-gray-900">Scope</label>
                                    <button
                                        class="toggle-btn p-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                        data-target="scope">
                                        <svg class="w-[20px] h-[20px] text-gray-800 dark:text-white"
                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
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

                </div>

            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit"
                    class="w-full py-2 px-4 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    Save Changes
                </button>
            </div>
        </form>

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

<x-app-layout>
    <div class="grid grid-cols-4 gap-5 max-w-7xl mx-auto py-8">
        <div>

            <div class="bg-white border shadow-sm rounded-lg p-5" x-data="{ modalOpen: false, formData: {{ $user }} }">
                <center>
                    <img class="inline-block size-14 rounded-full" src="{{ asset('storage/' . $user->photo_url) }}"
                        alt="">
                </center>
                <h1 class="text-xl font-bold text-center">{{ $user->name }}</h1>

                <center>
                    <form action="/update/photo" method="POST" enctype="multipart/form-data" id="upload-form">
                        @csrf
                        @method('Patch')
                        <div>
                            <input type="file" id="file-input" name="profile_photo" accept="image/*"
                                onchange="handleFileSelect(event)" class="hidden" />

                            <button type="button" id="file-button"
                                onclick="document.getElementById('file-input').click()" class="border w-1/2">
                                Change Photo
                            </button>

                            <button type="submit" id="submit-button" class="border w-1/2 hidden">
                                Submit
                            </button>
                        </div>
                    </form>
                </center>



                <x-user.manage-primary-details-modal :show="'modalOpen'" :onClose="'modalOpen = false'" />

                @if ($user->job_title)
                    <h3 class="text-lg font-semibold text-center">{{ $user->job_title }}</h3>
                @endif

                <ul class="flex gap-x-8 justify-center my-5 list-disc">
                    <li>{{ $user->email }}</li>
                </ul>


                @if ($user->bio)
                    <h3 class="text-base font-medium tracking-wide mt-4 text-center">{{ $user->bio }}</h3>
                @endif

                @if ($editable)
                    <div class="flex justify-center mt-8">
                        <button @click="modalOpen = true; formData = {{ $user }}"
                            class="bg-slate-800 text-white rounded-lg px-3 py-1">
                            Update Details
                        </button>
                    </div>
                @endif
            </div>
        </div>

        <div class="col-span-3 border bg-gray-100 p-2 rounded-lg">
            <div class="grid grid-cols-3 gap-5">
                <div class="bg-white rounded p-2.5" x-data="{ modalOpen: false, formData: {{ $user->job_preference }} }">
                    <x-job-preference.manage-minimum-salary :show="'modalOpen'" :onClose="'modalOpen = false'" />

                    <x-job-preference.preference-display :title="'Minimum Salary'" :value="$user->job_preference->min_salary ? 'PHP ' . $user->job_preference->min_salary : null" :editable="$editable"
                        :action="'modalOpen = true;'" />
                </div>

                <div class="bg-white rounded p-2.5" x-data="{ modalOpen: false, formData: {{ $user->job_preference }} }">
                    <x-job-preference.manage-years-of-experience :show="'modalOpen'" :onClose="'modalOpen = false'" />

                    <x-job-preference.preference-display :title="'Years of Experience'" :value="$user->job_preference->work_experience" :editable="$editable"
                        :action="'modalOpen = true;'" />
                </div>

                <div class="bg-white rounded p-2.5" x-data="{ modalOpen: false, formData: {{ $user->job_preference }} }">
                    <x-job-preference.manage-category :show="'modalOpen'" :onClose="'modalOpen = false'" />

                    <x-job-preference.preference-display :title="'Category'" :value="$user->job_preference->category" :editable="$editable"
                        :action="'modalOpen = true;'" />
                </div>
                <div class="bg-white rounded p-2.5" x-data="{ modalOpen: false, formData: {{ $user->job_preference }} }">
                    <x-job-preference.manage-work-policy :show="'modalOpen'" :onClose="'modalOpen = false'" />

                    <x-job-preference.preference-display :title="'Work Policy'" :value="$user->job_preference->work_policy" :editable="$editable"
                        :action="'modalOpen = true;'" />
                </div>

                <div class="bg-white rounded p-2.5" x-data="{ modalOpen: false, formData: {{ $user->job_preference }} }">
                    <x-job-preference.manage-scope :show="'modalOpen'" :onClose="'modalOpen = false'" />

                    <x-job-preference.preference-display :title="'Scope'" :value="$user->job_preference->scope" :editable="$editable"
                        :action="'modalOpen = true;'" />
                </div>

                <div class="bg-white rounded p-2.5" x-data="{ modalOpen: false, formData: {{ $user->job_preference }} }">
                    <x-job-preference.manage-location :show="'modalOpen'" :onClose="'modalOpen = false'" />

                    <x-job-preference.preference-display :title="'Location'" :value="$user->job_preference->location" :editable="$editable"
                        :action="'modalOpen = true;'" />
                </div>
            </div>

            <div class="mt-12 space-y-12">
                <div class="bg-white rounded p-5" x-data="{ modalOpen: false, mode: 'add', formData: {} }">
                    <x-work-experience.manage-work-experience-modal :show="'modalOpen'" :onClose="'modalOpen = false'" />

                    <div class="border-b flex justify-between py-2">
                        <h3 class="text-xl font-bold tracking-wide ">Work Experiences</h3>

                        @if ($editable)
                            <button @click="modalOpen = true; mode = 'add'; formData = {}"
                                class="bg-slate-800 text-white rounded-lg px-3 py-1">
                                Add Work Experience
                            </button>
                        @endif
                    </div>

                    <ul class="list-disc ml-5 space-y-12 mt-6">
                        @foreach ($user->work_experiences as $work_experience)
                            <li class="space-y-2">
                                <div class="flex justify-between">
                                    <p class="text-xl font-medium tracking-wide">{{ $work_experience->job_title }}</p>

                                    @if ($editable)
                                        <div class="flex">
                                            <button
                                                @click="modalOpen = true; mode = 'edit'; formData = {{ $work_experience }}"
                                                class="p-2 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                                <svg class="w-[20px] h-[20px] text-gray-800" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                                </svg>
                                            </button>

                                            <form
                                                action="{{ route('work-experiences.destroy', $work_experience->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this work experience?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="p-2 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                                                    <!-- Delete Icon -->
                                                    <svg class="w-[20px] h-[20px] text-red-500 " aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                                <p class="text-base">{{ $work_experience->company }}</p>
                                <p class="text-base">
                                    {{ $work_experience->getDuration() }}
                                </p>
                                <p class="text-base text-slate-600">
                                    {{ $work_experience->description }}
                                </p>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="bg-white rounded p-5" x-data="{ modalOpen: false, mode: 'add', formData: {} }">
                    <x-educations.manage-education-modal :show="'modalOpen'" :onClose="'modalOpen = false'" />

                    <div class="border-b flex justify-between py-2">
                        <h3 class="text-xl font-bold tracking-wide ">Educations</h3>

                        @if ($editable)
                            <button @click="modalOpen = true; mode = 'add'; formData = {}"
                                class="bg-slate-800 text-white rounded-lg px-3 py-1">
                                Add Education
                            </button>
                        @endif
                    </div>

                    <ul class="list-disc ml-5 space-y-4 mt-6">
                        @foreach ($user->educations as $education)
                            <li class="space-y-1">
                                <div class="flex justify-between">
                                    <p class="text-base tracking-wide">{{ $education->level }}</p>

                                    @if ($editable)
                                        <div class="flex">
                                            <button
                                                @click="modalOpen = true; mode = 'edit'; formData = {{ $education }}"
                                                class="p-2 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                                <svg class="w-[20px] h-[20px] text-gray-800" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                                </svg>
                                            </button>

                                            <form action="{{ route('educations.destroy', $education->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this education?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="p-2 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                                                    <!-- Delete Icon -->
                                                    <svg class="w-[20px] h-[20px] text-red-500 " aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                                <p class="text-base tracking-wide">{{ $education->institution }}</p>
                                <p class="text-base tracking-wide">{{ $education->description }}</p>
                                <p class="text-base tracking-wide">{{ $education->year }}</p>

                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="rounded p-5 bg-white" x-data="{ modalOpen: false, mode: 'add', formData: {} }">
                    <x-skills.manage-skill-modal :show="'modalOpen'" :onClose="'modalOpen = false'" />

                    <div class="border-b flex justify-between py-2">
                        <h3 class="text-xl font-bold tracking-wide ">Skills</h3>

                        @if ($editable)
                            <button @click="modalOpen = true; mode = 'add'; formData = {}"
                                class="bg-slate-800 text-white rounded-lg px-3 py-1">
                                Add Skills
                            </button>
                        @endif
                    </div>

                    <ul class="list-disc ml-5 space-y-4 mt-6">
                        @foreach ($user->skills as $skill)
                            <li class="space-y-2">
                                <div class="flex justify-between">
                                    <p class="text-base tracking-wide">{{ $skill->title }}</p>

                                    @if ($editable)
                                        <div class="flex">
                                            <button
                                                @click="modalOpen = true; mode = 'edit'; formData = {{ $skill }}"
                                                class="p-2 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                                <svg class="w-[20px] h-[20px] text-gray-800" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-width="2"
                                                        d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                                </svg>
                                            </button>

                                            <form action="{{ route('skills.destroy', $skill->id) }}" method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete this skill?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="p-2 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                                                    <!-- Delete Icon -->
                                                    <svg class="w-[20px] h-[20px] text-red-500" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round"
                                                            stroke-linejoin="round" stroke-width="2"
                                                            d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                </div>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>
        </div>
    </div>



    <script>
        function handleFileSelect(event) {
            var file = event.target.files[0];

            if (file) {
                document.getElementById('file-button').textContent = 'Change Photo';
                document.getElementById('submit-button').classList.remove('hidden');
            }
        }
    </script>



</x-app-layout>

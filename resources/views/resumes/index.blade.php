<x-app-layout>

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 ">
        <div class="py-6 bg-gradient-to-r from-sky-800 to-slate-800 rounded-xl">
            <div class="max-w-screen-xl mx-auto sm:px-6 lg:px-8">
                <div class=" overflow-hidden  sm:rounded-b-2xl">
                    <div class="p-6 text-neutral-200">
                        <h2 class="text-3xl font-bold text-center mb-6">Choose Your Resume Template</h2>

                    </div>
                </div>
            </div>
        </div>




        <div class=" mt-6">
            <h2 class="text-2xl font-bold mx-12 mb-6">Templates</h2>

            <!-- Make the container horizontally scrollable -->
            <div class="overflow-x-auto">
                <div class="flex space-x-6">
                    <!-- Template Example 1 -->
                    <a href="/resumes/create?template=basic"
                        class="flex-none w-60 flex flex-col divide-y divide-gray-200 border border-gray-600 rounded-lg bg-white text-center shadow h-96 border-2 border-transparent hover:border-slate-900 transition duration-300">
                        <div class="flex justify-center items-center h-full">
                            <div class="text-center rounded ">
                                <img src="{{ asset('storage\images\logo\one_column-resume.png') }}" alt="Logo">
                            </div>
                        </div>
                    </a>

                    <!-- Template Example 2 -->
                    <a href="/resumes/create?template=two-columns"
                        class="flex-none w-60 flex flex-col divide-y divide-gray-200 rounded-lg bg-white text-center shadow h-96 border-2 border-transparent hover:border-slate-900 transition duration-300">
                        <div class="flex justify-center items-center h-full">
                            <div class="text-center rounded ">
                                <img src="{{ asset('storage\images\logo\two-column-resume.png') }}" alt="Logo">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <div class="p-6 mt-8">
            <h2 class="text-2xl font-bold mx-12 mb-6">Your Resumes</h2>
            <div class="mx-12 overflow-x-auto">
                <!-- Use grid with responsive columns -->
                <ul role="list"
                    class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                    @foreach ($resumes as $resume)
                        <li
                            class="flex flex-col divide-y divide-gray-200 rounded-lg bg-white text-center shadow h-96 transition duration-300 hover:scale-95">
                            <a href="/resumes/{{ $resume->id }}" class="flex flex-col h-full">
                                <div class="text-lg font-medium">{{ $resume->template }}</div>
                                <div class="flex justify-center items-center h-full">
                                    <p class="text-lg border rounded-lg bg-gray-100 px-3 py-2">No preview available</p>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>








</x-app-layout>

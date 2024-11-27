<x-app-layout>
    <div class="py-6">
        <div class="max-w-screen-xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-b-2xl">
                <div class="p-6 text-gray-900">
                    Resume List
                </div>

                <a href="/resumes/create" class="inline-block mt-4 bg-blue-600 text-white rounded px-4 py-2">
                    Create new
                </a>
            </div>
        </div>
    </div>

    <h1 class="text-2xl font-bold mt-6 mx-12">Templates</h1>
    
    <div class="mx-12 mt-6">
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
            
            <!-- Template Example 1 -->
            <a href="/resumes/create?template=basic" class="col-span-1 flex flex-col divide-y divide-gray-200 rounded-lg bg-white text-center shadow h-96 transition duration-300 hover:scale-95">
                <div class="flex justify-center items-center h-full">
                    <div class="text-center">
                        Basic Template
                    </div>
                </div>
            </a>

            <!-- Template Example 2 -->
            <a href="/resumes/create?template=two-columns" class="col-span-1 flex flex-col divide-y divide-gray-200 rounded-lg bg-white text-center shadow h-96 transition duration-300 hover:scale-95">
                <div class="flex justify-center items-center h-full">
                    <div class="text-center">
                        Double Column Template
                    </div>
                </div>
            </a>

        </div>
    </div>

    <div class="p-6 mt-8">
        <h2 class="text-2xl font-bold mx-12 mb-6">Your Resumes</h2>
        <ul role="list" class="mx-12 grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
            @foreach ($resumes as $resume)
                <a href="/resumes/{{ $resume->id }}" class="col-span-1 flex flex-col divide-y divide-gray-200 rounded-lg bg-white text-center shadow h-96 transition duration-300 hover:scale-95">
                    <div class="flex justify-center items-center h-full">
                        <div class="text-center">
                            <p class="text-lg">{{ $resume->template }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </ul>
    </div>

</x-app-layout>

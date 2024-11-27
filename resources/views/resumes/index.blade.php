<x-app-layout>

    <div class="mx-auto max-w-full h-36 sm:h-48 sm:px-6 lg:px-8 bg-slate-900 overflow-hidden shadow-sm rounded-b-2xl sm:rounded-b-3xl">
        <div class="p-4 sm:p-6 text-white">
            <div class="">
                <p class="text-lg sm:text-xl font-medium">
                    Hello User
                </p>
                <h1 class="text-2xl sm:text-4xl font-bold leading-tight">
                    Find Your Great Job
                </h1>
            </div>
        </div>
    </div>




    <div class="py-4">
        <div class="max-x8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-b-2xl">
                <div class="p-6 text-gray-900">
                    Resume List
                </div>

                <a href="/resumes/create">Create new</a>
            </div>

            <ul>
                @foreach($resumes as $resume)
                   <a href="/resumes/{{$resume->id}}">
                       <p>{{$resume->template}}</p>
                   </a>
                @endforeach
            </ul>
        </div>
    </div>
</x-app-layout>


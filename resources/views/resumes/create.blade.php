<x-app-layout>
    <div class="w-full max-w-7xl mx-auto space-y-5 mt-8 pb-8 ">
        <div class="bg-white px-4 py-4 rounded-2xl">
            <h2 class="text-xl font-medium text-slate-800">Create new Resume</h2>
{{-- 
            <div class="grid grid-cols-6 gap-5">
                <a class="border p-3 rounded" href="/resumes/create?template=basic">
                    Basic
                </a>

                <a class="border p-3 rounded" href="/resumes/create?template=two-columns">
                    Two Columns
                </a>
            </div> --}}

            <form
                action="{{ route('resumes.store')  }}"
                method="POST"
            >
                @csrf
                <input type="hidden" name="template" value="{{$template}}">

                <div class="flex justify-end">
                    <a href="/resumes/create" class="bg-gray-300 px-4 py-2 rounded mr-2">
                        Cancel
                    </a>
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                        Save
                    </button>
                </div>
            </form>
        </div>
        <div class="w-full min-h-screen max-w-7xl mx-auto flex justify-center items-center space-y-5 py-8">
            <x-resume-template :user="$user" :name="$template" :editable="true"/>
        </div>
    </div>

</x-app-layout>


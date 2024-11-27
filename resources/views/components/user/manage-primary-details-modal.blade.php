<div
    x-show="{{ $show }}"
    class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50 text-slate-800"
    x-cloak
>

    <div class="bg-white p-6 rounded shadow-lg w-full max-w-3xl mx-auto">
        <h2 class="text-xl font-bold mb-4">Update Profile</h2>

        <form
            action="/profile"
            method="POST"
        >
            @csrf
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="redirect" value="{{request()->path()}}">

            <!-- Form Fields -->
            <div class="mb-4">
                <label class="block mb-1">Name</label>
                <input type="text" name="name" x-model="formData.name" class="w-full border p-2 rounded" required>

                @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block mb-1">Job Title</label>
                <input type="text" name="job_title" x-model="formData.job_title" class="w-full border p-2 rounded">
                @error('job_title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block mb-1">Bio</label>
                <textarea rows="10" name="bio" x-model="formData.bio" class="w-full border p-2 rounded"></textarea>
                @error('bio')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Modal Actions -->
            <div class="flex justify-end">
                <button
                    type="button"
                    class="bg-gray-300 px-4 py-2 rounded mr-2"
                    @click="{{ $onClose }}"
                >
                    Cancel
                </button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>


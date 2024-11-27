<div
    x-show="{{ $show }}"
    class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50"
    x-cloak
>
    <div class="bg-white p-6 rounded shadow-lg w-full max-w-3xl mx-auto">
        <h2 class="text-xl font-bold mb-4" x-text="mode === 'add' ? 'Add Work Experience' : 'Edit Work Experience'"></h2>

        <form
            :action="mode === 'add' ? '/work-experiences' : `/work-experiences/${formData.id}`"
            method="POST"
        >
            @csrf
            <template x-if="mode === 'edit'">
                <input type="hidden" name="_method" value="PUT">
            </template>

            <!-- Form Fields -->
            <div class="mb-4">
                <label class="block mb-1">Position</label>
                <input type="text" name="job_title" x-model="formData.job_title" class="w-full border p-2 rounded" required>

                @error('job_title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block mb-1">Company</label>
                <input type="text" name="company" x-model="formData.company" class="w-full border p-2 rounded" required>

                @error('company')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block mb-1">Start Date</label>
                <input type="date" name="start_date" x-model="formData.start_date" class="w-full border p-2 rounded" required>
                @error('start_date')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block mb-1">End Date</label>
                <input type="date" name="end_date" x-model="formData.end_date" class="w-full border p-2 rounded">
                @error('end_date')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block mb-1">Description</label>
                <textarea rows="10" name="description" x-model="formData.description" class="w-full border p-2 rounded"></textarea>
                @error('description')
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


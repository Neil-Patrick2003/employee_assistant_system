<div
    x-show="{{ $show }}"
    class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50 text-slate-800"
    x-cloak
>

    <div class="bg-white p-6 rounded shadow-lg w-full max-w-3xl mx-auto">
        <h2 class="text-xl font-bold mb-4" x-text="mode === 'add' ? 'Add Education' : 'Edit Education'"></h2>

        <form
            :action="mode === 'add' ? '/educations' : `/educations/${formData.id}`"
            method="POST"
        >
            @csrf
            <template x-if="mode === 'edit'">
                <input type="hidden" name="_method" value="PUT">
            </template>

            <!-- Form Fields -->
            <div class="mb-4">
                <label class="block mb-1">Position</label>
                <select name="level" x-model="formData.level" required class="w-full border p-2 rounded">
                    <option value="">Select Education Level</option>
                    <option value="Elementary">Elementary</option>
                    <option value="High-School">High-School</option>
                    <option value="Vocational">Vocational</option>
                    <option value="College">College</option>
                    <option value="Masteral">Masteral</option>
                    <option value="Doctoral">Doctoral</option>
                </select>

                @error('level')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block mb-1">Institution</label>
                <input type="text" name="institution" x-model="formData.institution" class="w-full border p-2 rounded" required>

                @error('institution')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block mb-1">Description</label>
                <input type="text" name="description" x-model="formData.description" class="w-full border p-2 rounded">
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label class="block mb-1">Year Graduated</label>
                <input type="number" min="1900" max="2024" name="year" x-model="formData.year" class="w-full border p-2 rounded">
                @error('year')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

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


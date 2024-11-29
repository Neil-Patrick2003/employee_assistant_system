<div
    x-show="{{ $show }}"
    class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50 text-slate-800"
    x-cloak
>
    <div class="bg-white p-6 rounded shadow-lg w-full max-w-lg mx-auto">
        <h2 class="text-xl font-bold mb-4" x-text="'Update Category'"></h2>

        <form
            action="/applicant/preference"
            method="POST"
        >
            @csrf
            <input type="hidden" name="_method" value="PUT">

            <!-- Form Fields -->
            <div class="mb-4">
                <select name="category" x-model="formData.category" class="w-full border p-2 rounded" required>
                    <option value="">Please select</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Sales">Sales</option>
                    <option value="Marketing">Marketing</option>
                </select>

                @error('category')
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


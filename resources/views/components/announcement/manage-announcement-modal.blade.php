<div
    x-show="{{ $show }}"
    class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50 text-slate-800"
    x-cloak
>
    <div class="bg-white p-6 rounded shadow-lg w-full max-w-3xl mx-auto">
        <h2 class="text-xl font-bold mb-4" x-text="mode === 'add' ? 'Add Announcement' : 'Edit Announcement'"></h2>

        <form
            :action="mode === 'add' ? '/admin/announcements' : `/admin/announcements/${formData.id}`"
            method="POST"
        >
            @csrf
            <template x-if="mode === 'edit'">
                <input type="hidden" name="_method" value="PUT">
            </template>

            <!-- Form Fields -->
            <div class="mb-4">
                <label class="block mb-1">Title</label>
                <input type="text" name="title" x-model="formData.title" class="w-full border p-2 rounded" required>

                @error('title')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block mb-1">Status</label>
                <select name="status" x-model="formData.status" class="w-full border p-2 rounded" required>
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>

                @error('status')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>


            <div class="mb-4">
                <label class="block mb-1">Content</label>
                <textarea name="content" x-model="formData.content" class="w-full border p-2 rounded" required rows="10">
                </textarea>

                @error('content')
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


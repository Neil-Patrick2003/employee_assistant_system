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
                    <option value="Administrative & Office Support">Administrative & Office Support</option>
                    <option value="Accounting & Finance">Accounting & Finance</option>
                    <option value="Customer Service">Customer Service</option>
                    <option value="Education & Training">Education & Training</option>
                    <option value="Healthcare & Medical">Healthcare & Medical</option>
                    <option value="Human Resources">Human Resources</option>
                    <option value="Information Technology">Information Technology</option>
                    <option value="Legal">Legal</option>
                    <option value="Marketing & Communications">Marketing & Communications</option>
                    <option value="Sales & Business Development">Sales & Business Development</option>
                    <option value="Skilled Trades & Construction">Skilled Trades & Construction</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Creative & Design">Creative & Design</option>
                    <option value="Manufacturing & Production">Manufacturing & Production</option>
                    <option value="Transportation & Logistics">Transportation & Logistics</option>
                    <option value="Hospitality & Tourism">Hospitality & Tourism</option>
                    <option value="Science & Research">Science & Research</option>
                    <option value="Government & Public Sector">Government & Public Sector</option>
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


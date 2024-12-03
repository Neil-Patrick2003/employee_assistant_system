<div
    x-show="{{ $show }}"
    class="fixed inset-0 flex items-center justify-center bg-gray-800 bg-opacity-50 z-50 text-slate-800"
    x-cloak
>
    <div class="bg-white p-6 rounded shadow-lg w-full max-w-lg mx-auto">
        <h2 class="text-xl font-bold mb-4" x-text="'Update Location'"></h2>

        <form
            action="/applicant/preference"
            method="POST"
        >
            @csrf
            <input type="hidden" name="_method" value="PUT">

            <!-- Form Fields -->
            <div class="mb-4">
                <select name="location" x-model="formData.location" class="w-full border p-2 rounded" required>
                    <option value="" disabled selected>Select a location</option>
                    <option value="Agoncillo">Agoncillo</option>
                    <option value="Alitagtag">Alitagtag</option>
                    <option value="Balayan">Balayan</option>
                    <option value="Balete">Balete</option>
                    <option value="Batangas City">Batangas City</option>
                    <option value="Bauan">Bauan</option>
                    <option value="Calaca">Calaca</option>
                    <option value="Calatagan">Calatagan</option>
                    <option value="Cuenca">Cuenca</option>
                    <option value="Ibaan">Ibaan</option>
                    <option value="Laurel">Laurel</option>
                    <option value="Lemery">Lemery</option>
                    <option value="Lian">Lian</option>
                    <option value="Lipa City">Lipa City</option>
                    <option value="Mabini">Mabini</option>
                    <option value="Malvar">Malvar</option>
                    <option value="Mataasnakahoy">Mataasnakahoy</option>
                    <option value="Nasugbu">Nasugbu</option>
                    <option value="Padre Garcia">Padre Garcia</option>
                    <option value="Rosario">Rosario</option>
                    <option value="San Jose">San Jose</option>
                    <option value="San Juan">San Juan</option>
                    <option value="San Luis">San Luis</option>
                    <option value="San Nicolas">San Nicolas</option>
                    <option value="San Pascual">San Pascual</option>
                    <option value="Santa Teresita">Santa Teresita</option>
                    <option value="Santo Tomas">Santo Tomas</option>
                    <option value="Taal">Taal</option>
                    <option value="Talisay">Talisay</option>
                    <option value="Tanauan City">Tanauan City</option>
                    <option value="Tuy">Tuy</option>
                </select>

                @error('location')
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


<x-employer-layout>
    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="px-4 py-6 sm:px-6 flex items-center">
            <!-- Company Logo Image -->
            <div class="mr-4">
                <img
                    src="{{ asset('storage/' . $company->logo_url) }}"
                    alt="Company Logo"
                    class="w-12 h-12 rounded-full object-cover"
                >
            </div>

            <!-- Company Name and Edit Button -->
            <div>
                <h3 class="text-base/7 font-semibold text-gray-900">{{$company->name}}</h3>
                <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">{{$company->user->name}}</p>
            </div>

            <!-- Edit Button for Logo (Optional) -->
            <div class="ml-auto">
                <a href="/employer/profile/edit" class="text-sm text-blue-500 hover:underline">Edit Profile</a>
            </div>
        </div>

        <div class="border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-900">Company Details</dt>
                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{$company->details}}</dd>
                </div>
            </dl>
        </div>
    </div>
</x-employer-layout>

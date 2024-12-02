<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="min-h-screen bg-gray-100 flex items-center justify-center">
    <div class="max-w-3xl w-full bg-white rounded-lg shadow-lg p-8">
        <form action="/employer/profile/edit" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-12">
                <div class="border-b border-gray-200 pb-12">
                    <h2 class="text-lg font-semibold text-gray-900">Compony Information</h2>
                    <p class="mt-1 text-sm text-gray-600">Please complete the form to continue</p>

                    <div class="mt-10 col-span-full w-full">
                        <div class="sm:col-span-4">
                            <label for="name" class="block text-sm font-medium text-gray-900">Company Name</label>
                            <div class="mt-2">
                                <div
                                    class="flex rounded-md w-full shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                    <input type="text" name="name" id="name" autocomplete="name"
                                        class="block w-full border-0 bg-transparent py-2 px-3 text-gray-900 placeholder-gray-400 focus:ring-0 sm:text-sm"
                                        required>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="details" class="block text-sm font-medium text-gray-900">About</label>
                            <div class="mt-2">
                                <textarea id="details" name="details" rows="3"
                                    class="block w-full rounded-md border-0 py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm"
                                    required></textarea>
                            </div>
                            <p class="mt-3 text-sm text-gray-600">Write a few sentences about your company.</p>
                        </div>

                        <div class="col-span-full">
                            <label for="cover-photo" class="block text-sm font-medium text-gray-900">Company Logo</label>
                            <div
                                class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-300 px-6 py-10 bg-gray-50">
                                <div class="text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-300" fill="currentColor" viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="mt-4 flex text-sm text-gray-600">
                                        <label for="file_upload"
                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <span>Upload a file</span>
                                            <input id="file_upload" name="file_upload" type="file" class="sr-only"
                                                required>
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/" class="text-sm font-semibold text-gray-700 hover:text-gray-900">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </div>
</body>

</html>

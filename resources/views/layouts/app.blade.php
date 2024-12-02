<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap" rel="stylesheet">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>


    <style>
        .font-rubik {
            font-family: 'Rubik', sans-serif;
        }
    </style>

</head>

<body class="font-rubik bg-white">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')

        <main class="bg-white">
            {{ $slot }}

            @if (\Illuminate\Support\Facades\Auth::check())
                <div x-data="{ open: false }">
                    <button @click="open = true"
                        class="fixed bottom-5 right-5 bg-blue-600 text-white p-3 rounded-full shadow-lg hover:bg-blue-700 focus:outline-none transition duration-300">
                        Submit Feedback
                    </button>

                    <!-- Modal -->
                    <div x-show="open"
                        class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50" x-cloak>
                        <div class="bg-white p-6 rounded-lg w-96 shadow-xl">
                            <h3 class="text-xl font-semibold text-gray-800">Submit Feedback</h3>
                            <form method="POST" action="{{ route('feedback.store') }}" class="mt-4">
                                @csrf

                                <div class="mb-4">
                                    <label class="block mb-1">Status</label>
                                    <select name="type" class="w-full border p-2 rounded" required>
                                        <option value="Suggestion">Suggestion</option>
                                        <option value="Issue">Issue</option>
                                    </select>

                                    @error('type')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>


                                <div class="mb-4">
                                    <label class="block mb-1">Message</label>
                                    <textarea name="message" class="w-full border p-2 rounded" required rows="10"></textarea>

                                    @error('message')
                                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="mt-4 flex justify-end gap-2">
                                    <button type="button" @click="open = false"
                                        class="px-4 py-2 bg-gray-300 rounded-md text-gray-800 hover:bg-gray-400 transition duration-200">
                                        Cancel
                                    </button>
                                    <button type="submit"
                                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none transition duration-300">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endif

        </main>
    </div>
</body>

</html>

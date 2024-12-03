<!-- resources/views/components/modal.blade.php -->
@props(['id', 'title', 'active'])

@php
    $classes = ($active ?? false)
        ? 'fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50'
        : 'hidden';
@endphp

<div id="{{ $id }}" class="{{ $classes }}">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md p-6">
        <div class="flex justify-between items-center">
            <h3 class="text-lg font-semibold text-gray-900">{{ $title }}</h3>
            <button onclick="document.getElementById('{{ $id }}').classList.add('hidden');" class="text-gray-500 hover:text-gray-700">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="mt-4">
            {{ $slot }}
        </div>
    </div>
</div>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</head>

<body class="">
<div class="min-h-screen bg-gray-100">

    <main>

        <div class="w-full max-w-7xl mx-auto space-y-5 py-8">
            <x-resume-template :user="$resume->user" :name="$resume->template" :editable="false"/>
        </div>

    </main>
</div>
</body>

</html>


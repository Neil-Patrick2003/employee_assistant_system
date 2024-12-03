<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="main bg-white">
        <div class="container mt-12 mx-auto px-4 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </div>
</body>

</html>

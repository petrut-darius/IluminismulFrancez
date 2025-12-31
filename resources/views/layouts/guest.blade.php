<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=EB+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-orange-900/20 my-4">
        <h1 class="text-5xl text-center mt-4 mb-2">Iluminismul Francez</h1>

        @include("layouts.navigation")

        <main class="mt-8 bg-white mx-auto w-max p-6 border rounded border-solid border-green-700">
            {{ $slot }}
        </main>
    </body>
</html>

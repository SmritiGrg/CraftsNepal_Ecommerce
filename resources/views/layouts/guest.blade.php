<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div
        class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gradient-to-r from-orange-50 via-orange-100 to-orange-200">
        {{-- <div>
            <a href="/">
                <img src="{{ asset('assets/img/Logo_Crafts-removebg.png') }}" alt="" width="150px"
                    height="150px">
            </a>
        </div> --}}

        {{-- <div
            class="flex w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-white shadow-lg overflow-hidden sm:rounded-lg border border-gray-200">
            {{ $slot }}
        </div> --}}
        <div
            class="flex flex-col lg:flex-row w-full sm:max-w-5xl mt-6 bg-white dark:bg-white shadow-lg overflow-hidden sm:rounded-lg border border-gray-200">
            {{ $slot }}
        </div>


    </div>
</body>

</html>

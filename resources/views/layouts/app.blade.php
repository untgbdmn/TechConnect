<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href={{ asset('/public/logo.svg') }} />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 flex flex-row w-full">
        @include('layouts.sidebar')

        <main class="text-black w-full">
            <div class="px-5 pt-5">
                {{-- Page Heading --}}
                @isset($header)
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-5 flex flex-col">
                            <span class="capitalize font-semibold text-sm">System Management panel</span>
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <div class="pt-5">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </div>
</body>

</html>

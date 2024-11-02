<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href={{ asset('/public/logo.svg') }} />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Share+Tech+Mono&family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="node_modules/@material-tailwind/html@latest/scripts/dialog.js"></script>
    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/dialog.js"></script>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-white flex flex-row w-full">
        @include('layouts.sidebar')
        @include('sweetalert::alert')

        <main class="text-black w-full">
            <div class="px-5 pt-5">
                {{-- Page Heading --}}
                @isset($header)
                    <header class="bg-white">
                        <div class="max-w-7xl mx-auto py-3 px-4 sm:px-6 lg:px-5 flex flex-col">
                            <span class="capitalize font-semibold text-sm">System Management panel</span>
                            {{ $header }}
                        </div>
                    </header>
                @endisset

                <div class="pt-1">
                    {{ $slot }}
                </div>
            </div>
        </main>
    </div>
</body>

</html>

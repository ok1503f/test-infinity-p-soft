<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
    @stack('styles')
</head>
<body class="min-h-screen flex flex-col">
    <div class="flex flex-col min-h-screen">
        <header class="sticky top-0 z-50">
            @include('layouts.navigation')
        </header>

        <main class="flex-grow z-0">
            @yield('content')
        </main>

        @include('layouts.footer')
    </div>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    @stack('scripts')
</body>
</html>

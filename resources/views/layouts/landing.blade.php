<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Azonation — Organisation Management SaaS</title>
    <meta name="description"
        content="Azonation is a minimal, modern SaaS for organisation management — memberships, meetings, events, projects, billing and more. Start for free.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph / Twitter --}}
    <meta property="og:title" content="Azonation — Organisation Management SaaS">
    <meta property="og:description" content="Run your organisation in one place. Start for free.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/azonation-og.jpg') }}">
    <meta name="twitter:card" content="summary_large_image">

    @vite('resources/css/app.css')
</head>

{{--

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head> --}}

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('components.nav')

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
        <!-- Footer -->
        @include('components.footer')
    </div>
</body>

</html>
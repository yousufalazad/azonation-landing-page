<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- SEO Title (long, descriptive) --}}
    <title>Azonation — Organisation Management Solution | Memberships, Meetings, Events, Projects & Billing</title>
    <meta name="description"
        content="Azonation is a minimal, modern SaaS for organisation management — memberships, meetings, events, projects, billing and more. Start for free.">
    <meta name="robots" content="index,follow">
    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Favicon (multiple formats for best support) --}}
    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/favicon.png') }}">

    {{-- <img src="{{ asset('storage/images/azonation-logo.png') }}" alt="Azonation" class="h-7 w-auto"> --}}


    {{-- Open Graph / Twitter --}}
    <meta property="og:title" content="Azonation — Organisation Management SaaS">
    <meta property="og:description" content="Run your organisation in one place. Start for free.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('images/azonation-og.jpg') }}">
    <meta name="twitter:card" content="summary_large_image">

    @vite('resources/css/app.css')
</head>

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
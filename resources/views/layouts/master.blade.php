<!DOCTYPE html>
<html lang="es" class="transition-colors duration-300">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page-title', 'Inicio') | {{ config('app.name', 'Uapa Salon') }}</title>
    <meta description="@yield('page-description')">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.jpg') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
</head>
<body class="bg-bg-warm dark:bg-slate-900 text-slate-900 dark:text-white font-['Montserrat'] antialiased selection:bg-pink-strong selection:text-white">
    <div class="flex h-screen overflow-hidden">

        @include('layouts.sidebar')

        <main class="flex-1 flex flex-col min-w-0 bg-bg-warm dark:bg-slate-900 pb-16 md:pb-0 relative z-10">

            @include('layouts.header')

            <div class="flex-1 overflow-y-auto p-4 md:p-6 lg:flex lg:gap-6">
                <div class="flex-1 flex flex-col space-y-6 min-w-0">

                    @yield('page-content')
                    @include('layouts.example')

                </div>

                @include('layouts.example-right-panel')

            </div>

            @include('layouts.footer')

        </main>

        @include('layouts.bottom-navigation-bar')

    </div>

    <script type="text/javascript" src="{{ asset('vendor/js/dashboard.js') }}"></script>
    @yield('scripts')
</body>
</html>

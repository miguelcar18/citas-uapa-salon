<!DOCTYPE html>
<html lang="es" class="transition-colors duration-300">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page-title', 'Inicio') | {{ config('app.name', 'Uapa Salon') }}</title>
    <meta description="@yield('page-description')">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
</head>
<body class="font-sans bg-bg-warm dark:bg-slate-900 text-slate-800 dark:text-slate-200 flex min-h-screen transition-colors duration-300">
    @include('layouts.sidebar')

    <main class="flex-1 flex flex-col min-w-0">
        @include('layouts.header')

        <div class="p-8 flex-1 overflow-y-auto flex flex-col">
            @yield('page-content')
            @include('layouts.example')
            @include('layouts.footer')
        </div>
    </main>

    <script type="text/javascript" src="{{ asset('vendor/js/dashboard.js') }}"></script>
    @yield('scripts')
</body>
</html>

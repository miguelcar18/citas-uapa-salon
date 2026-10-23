<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('page-title') | {{ config('app.name', 'Uapa Salon') }}</title>
    <meta description="@yield('page-description')">
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.jpg') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('styles')
</head>
<body class="font-sans bg-bg-warm text-slate-800 flex items-center justify-center min-h-screen">
    @yield('screen')

    <div class="max-w-md w-full bg-white p-8 rounded-xl shadow-md border border-slate-200">
        <img src="images/logo.jpg" alt="Logo Uapa Salón" class="block mx-auto h-30 w-30 object-contain mb-10 rounded-lg shadow-sm">
        <h1 class="font-logo text-5xl mb-6 text-center text-slate-900 font-normal">@yield('card-title')</h1>
        @yield('page-content')
    </div>

    @yield('scripts')
</body>
</html>

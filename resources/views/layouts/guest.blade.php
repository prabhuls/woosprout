<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/woosprout-leaf.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/woosprout-leaf.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/woosprout-leaf.png') }}">
        <link rel="manifest" href="{{ asset('img/woosprout-leaf.png') }}">
        <link rel="mask-icon" href="{{ asset('img/woosprout-leaf.png') }}" color="#5bbad5">
        <link rel="shortcut icon" href="{{ asset('img/woosprout-leaf.png') }}">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="{{ asset('img/woosprout-leaf.png') }}">
        <meta name="theme-color" content="#ffffff">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gradient-to-b from-stone-100 min-h-screen">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
            <div>
                <a href="/">
                    <x-application-logo class="w-48 h-auto max-w-xs fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
            
            @stack('gfooter')
        </div>

        @stack('scripts')
    </body>
</html>

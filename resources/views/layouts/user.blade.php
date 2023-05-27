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
    @vite(['resources/css/user.css', 'resources/js/user.js'])
</head>

<body class="bg-stone-100 font-sans antialiased lg:flex" x-data="{ open: false }">
    @include('layouts.sidebar')

    <div class="relative z-0 lg:flex-grow">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="flex bg-stone-50 border-t border-t-stone-200 border-b border-b-stone-200 items-center px-3">
                <button class="p-2 focus:outline-none focus:bg-stone-200 hover:bg-stone-200 rounded-md lg:hidden"
                    @click="open = true">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <span class="block text-2xl sm:text-3xl font-bold p-4">{{ $header }}</span>
            </header>
        @endif



        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    @stack('scripts')
</body>

</html>

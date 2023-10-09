<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- OR -->
     {!! SEO::generate() !!}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Scripts -->
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>


    <!-- Styles -->
    {{-- @vite('resources/css/app.css','resources/js/app.js') --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-white dark:bg-gray-900 ">

    @include('layouts.navigation')
    <main class="min-h-screen container px-6 lg:px-12">

        @yield('content', $slot ?? '')

    </main>


</body>

</html>
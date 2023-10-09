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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-white dark:bg-gray-900 ">

    @include('layouts.navigation')

    <main class="min-h-screen container px-6 lg:px-12">

        @yield('breadcrumbs')

        <article class="prose prose-lg prose-zinc max-w-3xl mx-auto py-12 dark:text-white/90
            rounded-lg prose-pre:bg-[#eaeef3] prose-code:p-2 prose-pre:dark:bg-slate-20 prose-code:dark:bg-slate-20
            prose-a:text-blue-500 prose-a:text-sm prose-a:lg:text-base    
            prose-code:dark:text-pink-500/90 prose-code:text-black 
            prose-ol:dark:text-white prose-li:text-lg prose-li:dark:text-gray-300 prose-li:my-0   prose-li:text-gray-900/90 prose-ul:dark:text-gray-200 prose-li:marker:text-gray-500/80   prose-li:marker:dark:text-gray-400
            prose-strong:dark:text-white prose-h1:h1 prose-h2:text-h2 prose-h3:text-h3  prose-h4:text-h4  prose-h5:text-[1.5em] prose-h6:text-h6  prose-headings:py-1 prose-headings:dark:text-gray-50   prose-headings:font-extrabold
            prose-blockquote-p:text-gray-900 prose-blockquote:bg-slate-100 prose-blockquote:dark:bg-slate-600/95  prose-blockquote-p:dark:text-xl prose-blockquote-p:font-medium
            p-0 prose-p:dark:text-gray-50 prose-p:font-normaltext-gray-900 prose-p:dark:font-normal">
                <x-markdown>

                    @yield('content', $slot ?? '')

                </x-markdown>
        </article>

    </main>


</body>

</html>
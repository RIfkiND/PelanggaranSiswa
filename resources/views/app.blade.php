<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/smea-icon.png" />
    <link rel="icon" type="image/png" href="./assets/img/smea-icon.png" />
    @vite('resources/css/app.css')
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('Assets/CSS/pluss.css') }}">
    @include('Admin.Dashboard.Components.link')
</head>
<body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>
    @include('Admin.Dashboard.Components.header')
    <!-- sidenav -->

    <main>
        <!-- cards -->
        <!-- end cards -->
        {{ $slot }}
    </main>

    @include('Admin.Dashboard.Components.footer')

    <!-- plugin for charts  -->
    @livewireScripts
    @include('Admin.Dashboard.Components.script')
</body>
</html>

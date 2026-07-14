<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? config('app.name') }}</title>

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Marked js cdn (cdn url was edited) -->
        <script src="https://cdn.jsdelivr.net/npm/marked/lib/marked.min.js"></script>

        <!-- Dompurify cdn (url was not edited) -->
        <script src="https://cdn.jsdelivr.net/npm/dompurify@3.4.12/dist/purify.min.js"></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        {{ $slot }}

        @livewireScripts
    </body>
</html>

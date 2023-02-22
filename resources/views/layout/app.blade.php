<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Justice Bole</title>

        <meta name="csrf-token" content="{{csrf_token()}}">

        @vite('resources/js/app.js')

        <link href="{{ asset('../css/app.css')}}" rel="stylesheet">

        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    </head>
    <body class="antialiased text-gray-800 dark:text-gray-200">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-900 pt-24">
            <x-layout.navbar></x-layout.navbar>
            {{$slot}}
            <x-layout.footer></x-layout.footer>
        </div>
    </body>
</html>

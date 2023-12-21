<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite (['resources\css\app.css', 'resources\js\app.js'])
        <title>Laravel Gruppo 3</title>
    </head>
    <body>
        <x-navbar></x-navbar>
        {{$slot}}
        <x-footer></x-footer>
    </body>
</html>

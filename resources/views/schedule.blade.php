<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <x-icon-app/>
    <title>Schedule</title>
    @vite('resources/css/app.css') 
</head>
<body class="bg-purple-500"> 
    
    <x-navbar />
    
    <x-footer />

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
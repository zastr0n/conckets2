<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soundwave!</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-r from-purple-500 to-pink-500"> 
    
    <x-navbar/> 
    <x-hero/>
    <x-features/>
    <x-call-to-action/>
    <x-footer/>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
{{-- 
@include('/components/call-to-action') <div class="blur-target"> </div> --}}
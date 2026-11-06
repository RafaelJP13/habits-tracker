<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name') }}</title>
    </head>
    @vite('resources/css/app.css')
<body class="bg-[#FFEDD6]">
    {{-- HEADER --}}
    <!-- Esse HEADER aparece como comentário -->
    <x-header/>
    {{ $slot }}
    <x-footer/>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="//unpkg.com/alpinejs" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-background min-h-dvh flex flex-col">
    <x-nav-bar />
    <main class="flex-grow flex flex-col">
        @yield('content')
    </main>
</body>

</html>

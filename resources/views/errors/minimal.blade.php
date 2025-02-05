<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-netflixBlack">
<div class="flex lg:flex-1 max-w-7xl mx-auto">
    <a href="#" class="-m-1.5 p-1.5">
        <p class="text-5xl text-netflixRed">KITFLIX</p>
    </a>
</div>
<div class="relative flex items-top justify-center min-h-screen bg-net sm:items-center sm:pt-0">
    <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
        <div class="flex items-center pt-8 sm:justify-start sm:pt-0">
            <div class="px-4 text-lg text-gray-500 border-r border-gray-400 tracking-wider">
                @yield('code')
            </div>

            <div class="ml-4 text-lg text-gray-500 uppercase tracking-wider">
                @yield('message')
            </div>
        </div>
    </div>
</div>
</body>
</html>

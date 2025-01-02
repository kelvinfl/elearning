<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-green-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-green-600 p-4">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <a href="/" class="text-white font-bold text-xl">Calon Influencer</a>
            <div>
                @auth

                @else
                    <a href="{{ route('login') }}" class="text-white">Login</a>
                    <a href="{{ route('register') }}" class="ml-4 text-white">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>

</body>
</html>

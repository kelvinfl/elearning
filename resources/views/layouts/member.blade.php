<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <title>Member Area - Calon Influencer</title>
    <style>
        .bg-primary-green {
            background-color: #22c55e;
        }
        .text-primary-green {
            color: #22c55e;
        }
        .border-primary-green {
            border-color: #22c55e;
        }
        .hover-primary-green:hover {
            background-color: #16a34a;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="border-gray-200 px-4 lg:px-6 py-2.5 bg-white shadow-sm">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="#" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap">Calon Influencer</span>
            </a>
            <div class="flex items-center gap-4">
                <div class="relative">
                    <button class="flex items-center text-gray-600 hover:text-gray-900">
                        <span class="mr-2">{{ $name }}</span>
                        <img src="https://flowbite.com/docs/images/logo.svg" class="w-8 h-8 rounded-full" alt="profil" />
                    </button>
                </div>
                        <!-- Tombol Logout -->
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700">
                                Logout
                            </button>
                        </form>
            </div>

        </div>
    </nav>

    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 min-h-screen bg-white shadow-sm">
            <div class="px-3 py-4">
                <ul class="space-y-2">
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg bg-gray-100">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                            <span class="ml-3">Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('list.kelas.member')}}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            <span class="ml-3">Kelas Saya</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                            <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            <span class="ml-3">Jadwal</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        @yield('content')

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.5.2/flowbite.min.js"></script>
    @vite('resources/js/app.js')
</body>
</html>

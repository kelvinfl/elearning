<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kelas - Platform E-Learning</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'primary-green': '#16a34a',
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 min-h-screen">
    <!-- Header Section -->
    <div class="bg-white shadow-sm border-b border-gray-200">
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center space-x-4">
                <a href="{{route('member.index')}}" class="text-gray-600 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                    </svg>
                </a>
                <h1 class="text-xl font-semibold text-gray-900">Membuat Konten Instagram</h1>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Main Content -->
            <div class="lg:col-span-2">
                <!-- Video Player -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden mb-6">
                    <div class="aspect-w-16 aspect-h-9 bg-gray-800">
                        <div class="w-full h-full bg-gray-800">
                            <video class="w-full h-full object-cover" controls>
                                <source src="video.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    <div class="p-6">
                        <h2 class="text-xl font-semibold mb-4">1. Pengenalan Dasar Instagram</h2>
                        <div class="prose max-w-none">
                            <p class="text-gray-600">Dalam video ini kita akan belajar tentang dasar-dasar Instagram dan bagaimana cara memulai membuat konten yang menarik untuk platform ini.</p>
                        </div>
                    </div>
                </div>

                <!-- Course Progress -->
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-6">
                    <h3 class="font-semibold text-lg mb-4">Progress Belajar</h3>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 mb-2">
                        <div class="bg-primary-green h-2.5 rounded-full" style="width: 65%"></div>
                    </div>
                    <div class="text-sm text-gray-600">65% Selesai</div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-sm border border-gray-200 sticky top-6">
                    <div class="p-6">
                        <h3 class="font-semibold text-lg mb-4">Daftar Materi</h3>
                        <div class="space-y-4">
                            <!-- Current lesson -->
                            <div class="flex items-center p-3 bg-green-50 rounded-lg border border-green-200">
                                <div class="flex-shrink-0 w-8 h-8 bg-green-100 rounded-full flex items-center justify-center text-primary-green">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-3 flex-1">
                                    <p class="text-sm font-medium text-gray-900">1. Pengenalan Dasar Instagram</p>
                                    <p class="text-sm text-gray-500">20 menit</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <svg class="w-5 h-5 text-primary-green" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>

                            <!-- Other lessons -->
                            <div class="flex items-center p-3 hover:bg-gray-50 rounded-lg cursor-pointer">
                                <div class="flex-shrink-0 w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center text-gray-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-3 flex-1">
                                    <p class="text-sm font-medium text-gray-900">2. Membuat Konten yang Menarik</p>
                                    <p class="text-sm text-gray-500">25 menit</p>
                                </div>
                            </div>

                            <div class="flex items-center p-3 hover:bg-gray-50 rounded-lg cursor-pointer">
                                <div class="flex-shrink-0 w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center text-gray-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-3 flex-1">
                                    <p class="text-sm font-medium text-gray-900">3. Strategi Hashtag</p>
                                    <p class="text-sm text-gray-500">15 menit</p>
                                </div>
                            </div>

                            <div class="flex items-center p-3 hover:bg-gray-50 rounded-lg cursor-pointer">
                                <div class="flex-shrink-0 w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center text-gray-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="ml-3 flex-1">
                                    <p class="text-sm font-medium text-gray-900">4. Mengoptimalkan Engagement</p>
                                    <p class="text-sm text-gray-500">30 menit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

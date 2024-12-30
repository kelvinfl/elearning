
@extends('layouts.admin')
@section('content')
<!-- Main Content -->
<main class="flex-1 p-8">
    <!-- Welcome Section -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-900">Selamat datang kembali, {{ $name }} </h1>
        <p class="text-gray-600">Lanjutkan perjalananmu menjadi influencer.</p>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
        <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-200">
            <div class="flex items-center justify-between space-x-6">
                <div class="p-4 rounded-full bg-green-100 text-primary-green">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
                <div class="flex-1">
                    <h2 class="text-gray-600 text-lg mb-2">Jumlah Kelas Rekaman</h2>
                    <p class="text-3xl font-semibold text-gray-900">3</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-200">
            <div class="flex items-center justify-between space-x-6">
                <div class="p-4 rounded-full bg-green-100 text-primary-green">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="flex-1">
                    <h2 class="text-gray-600 text-lg mb-2">Kelas Mendatang</h2>
                    <p class="text-3xl font-semibold text-gray-900">2</p>
                </div>
            </div>
        </div>

        <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-200">
            <div class="flex items-center justify-between space-x-6">
                <div class="p-4 rounded-full bg-green-100 text-primary-green">
                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                    </svg>
                </div>
                <div class="flex-1">
                    <h2 class="text-gray-600 text-lg mb-2">Kelas Selesai</h2>
                    <p class="text-3xl font-semibold text-gray-900">5</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Ongoing Courses -->
    <div class="mb-8">
        <h2 class="text-xl font-bold text-gray-900 mb-4">Kelas Berlangsung</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                <a href="{{ route('member.video') }}" class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden block">
                    <img src="{{ asset('assets/course.jpg') }}" class="w-full h-48 object-cover" alt="thumbnail kelas" />
                    <div class="p-4">
                        <h3 class="font-semibold text-lg mb-2">Membuat Konten Instagram</h3>
                        <div class="flex items-center text-sm text-gray-500 mb-4">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span>4 jam tersisa</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-primary-green h-2.5 rounded-full" style="width: 65%"></div>
                        </div>
                        <div class="mt-2 text-sm text-gray-600">65% Selesai</div>
                    </div>
                </a>

            </div>

            <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                <a href="{{ route('member.video') }}" class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden block">
                <img src="{{ asset('assets/course.jpg') }}" class="w-full h-48 object-cover" alt="thumbnail kelas" />
                <div class="p-4">
                    <h3 class="font-semibold text-lg mb-2">Personal Branding</h3>
                    <div class="flex items-center text-sm text-gray-500 mb-4">
                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span>2 jam tersisa</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-primary-green h-2.5 rounded-full" style="width: 45%"></div>
                    </div>
                    <div class="mt-2 text-sm text-gray-600">45% Selesai</div>
                </div>
            </a>
            </div>
        </div>
    </div>

    <!-- Upcoming Classes -->
    <div class="mb-8">
        <h2 class="text-xl font-bold text-gray-900 mb-4">Upcoming Classes</h2>
        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
            <div class="p-4">
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <div class="bg-green-100 text-primary-green p-3 rounded-full">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-semibold">Live Session: Content Strategy</h3>
                                <p class="text-sm text-gray-600">Tomorrow, 2:00 PM</p>
                            </div>
                        </div>
                        <button class="px-4 py-2 bg-primary-green text-white rounded-lg hover:bg-green-600">Join Class</button>
                    </div>

                    <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                        <div class="flex items-center">
                            <div class="bg-green-100 text-primary-green p-3 rounded-full">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div class="ml-4">
                                <h3 class="font-semibold">Workshop: Viral Content Creation</h3>
                                <p class="text-sm text-gray-600">Friday, 3:00 PM</p>
                            </div>
                        </div>
                        <button class="px-4 py-2 bg-primary-green text-white rounded-lg hover:bg-green-600">Join Class</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Available Courses -->
    <div class="mb-8">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-bold text-gray-900">Kursus Tersedia</h2>
            <button class="text-primary-green hover:text-green-600">Lihat Semua</button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Course Card 1 -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                <img src="{{ asset('assets/course.jpg') }}" class="w-full h-48 object-cover" alt="course thumbnail" />
                <div class="p-4">
                    <span class="px-2 py-1 bg-green-100 text-primary-green text-sm rounded-full">Pemula</span>
                    <h3 class="font-semibold text-lg mt-2">Mastery Pemasaran TikTok</h3>
                    <p class="text-gray-600 text-sm mt-2">Pelajari cara membuat konten yang menarik dan membangun pengikut TikTok Anda</p>
                    <div class="flex items-center mt-4">
                        <img src="{{ asset('assets/course.jpg') }}" class="w-8 h-8 rounded-full" alt="instructor" />
                        <div class="ml-2">
                            <p class="text-sm font-medium">Sarah Johnson</p>
                            <p class="text-xs text-gray-500">Ahli Media Sosial</p>
                        </div>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-lg font-bold text-primary-green">Rp 749.000</span>
                        <button class="px-4 py-2 bg-primary-green text-white rounded-lg hover:bg-green-600">Daftar Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Course Card 2 -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                <img src="{{ asset('assets/course.jpg') }}" class="w-full h-48 object-cover" alt="course thumbnail" />
                <div class="p-4">
                    <span class="px-2 py-1 bg-green-100 text-primary-green text-sm rounded-full">Menengah</span>
                    <h3 class="font-semibold text-lg mt-2">Strategi Pertumbuhan Instagram</h3>
                    <p class="text-gray-600 text-sm mt-2">Kuasi seni pemasaran Instagram dan pembuatan konten</p>
                    <div class="flex items-center mt-4">
                        <img src="{{ asset('assets/course.jpg') }}" class="w-8 h-8 rounded-full" alt="instructor" />
                        <div class="ml-2">
                            <p class="text-sm font-medium">Mike Thompson</p>
                            <p class="text-xs text-gray-500">Spesialis Instagram</p>
                        </div>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-lg font-bold text-primary-green">Rp 899.000</span>
                        <button class="px-4 py-2 bg-primary-green text-white rounded-lg hover:bg-green-600">Daftar Sekarang</button>
                    </div>
                </div>
            </div>

            <!-- Course Card 3 -->
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 overflow-hidden">
                <img src="{{ asset('assets/course.jpg') }}" class="w-full h-48 object-cover" alt="course thumbnail" />
                <div class="p-4">
                    <span class="px-2 py-1 bg-green-100 text-primary-green text-sm rounded-full">Lanjutan</span>
                    <h3 class="font-semibold text-lg mt-2">Membangun Merek Digital</h3>
                    <p class="text-gray-600 text-sm mt-2">Ciptakan dan pertahankan kehadiran digital yang kuat</p>
                    <div class="flex items-center mt-4">
                        <img src="{{ asset('assets/course.jpg') }}" class="w-8 h-8 rounded-full" alt="instructor" />
                        <div class="ml-2">
                            <p class="text-sm font-medium">Lisa Chen</p>
                            <p class="text-xs text-gray-500">Strategi Merek</p>
                        </div>
                    </div>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-lg font-bold text-primary-green">Rp 1.199.000</span>
                        <button class="px-4 py-2 bg-primary-green text-white rounded-lg hover:bg-green-600">Daftar Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection

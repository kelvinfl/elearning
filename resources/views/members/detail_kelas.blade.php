@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Main Layout -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Thumbnail and Details Section -->
        <div class="md:col-span-1">
            <div class="relative h-60 md:h-96">
                <img src="{{ Storage::url($class->thumbnail) }}" alt="{{ $class->name }}" class="w-full h-full object-cover rounded-t-lg md:rounded-lg">
            </div>
            <div class="p-6">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800 mb-4">{{ $class->name }}</h1>
                <p class="text-lg text-emerald-600 font-semibold mb-4">
                    Rp.{{ number_format($class->price, 0, ',', '.') }}
                    @if($class->discount)
                        <span class="text-gray-500 line-through ml-2">
                            Rp.{{ number_format($class->price + $class->discount, 0, ',', '.') }}
                        </span>
                    @endif
                </p>
                <p class="text-gray-600 mb-6">{{ $class->description }}</p>
                @auth
                <a href="{{ route('member.index', ['class_id' => $class->id]) }}"
                   class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-500 transition">
                   Daftar Sekarang
                </a>
            @else
                <a href="{{ route('login', ['class_id' => $class->id]) }}"
                   class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-500 transition">
                   Daftar Sekarang
                </a>
            @endauth
            </div>
        </div>

        <!-- Tabs Section -->
        <div class="md:col-span-2">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <div class="border-b">
                    <nav class="flex">
                        <a href="{{ route('detail.kelas', ['class_id' => $class->id, 'tab' => 'videos']) }}"
                            class="px-6 py-4 text-gray-600 font-medium border-b-2 hover:text-emerald-600 focus:outline-none
                            {{ request('tab', 'videos') === 'videos' ? 'border-emerald-500 text-emerald-600' : 'border-transparent' }}">
                            Videos ({{ count($class->videos) }})
                        </a>
                        <a href="{{ route('detail.kelas', ['class_id' => $class->id, 'tab' => 'pdfs']) }}"
                            class="px-6 py-4 text-gray-600 font-medium border-b-2 hover:text-emerald-600 focus:outline-none
                            {{ request('tab') === 'pdfs' ? 'border-emerald-500 text-emerald-600' : 'border-transparent' }}">
                            PDFs ({{ count($class->pdfs) }})
                        </a>
                    </nav>
                </div>

                <div class="p-6">
                    <!-- Videos Tab -->
                    @if(request('tab', 'videos') === 'videos')
                        <div class="space-y-4">
                            @forelse($class->videos as $index => $video)
                                <div class="flex items-center bg-gray-50 rounded-lg p-4">
                                    <div class="bg-emerald-100 rounded-full p-3 mr-4">
                                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-medium text-gray-800">Video {{ $index + 1 }}</h3>
                                        <p class="text-sm text-gray-500">{{ basename($video) }}</p>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center text-gray-500 py-4">Tidak ada video tersedia</div>
                            @endforelse
                        </div>
                    @endif

                    <!-- PDFs Tab -->
                    @if(request('tab') === 'pdfs')
                        <div class="space-y-4">
                            @forelse($class->pdfs as $index => $pdf)
                                <a href="{{ Storage::url($pdf) }}" target="_blank"
                                class="flex items-center bg-emerald-50 rounded-lg p-4 hover:bg-emerald-100 transition duration-200">
                                    <div class="bg-emerald-100 rounded-full p-3 mr-4">
                                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-medium text-gray-800">PDF {{ $index + 1 }}</h3>
                                        <p class="text-sm text-emerald-600">{{ basename($pdf) }}</p>
                                    </div>
                                </a>
                            @empty
                                <div class="text-center text-gray-500 py-4">Tidak ada PDF tersedia</div>
                            @endforelse
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

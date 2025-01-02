@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    @if ($errors->any())
    <script>
        @foreach ($errors->all() as $error)
            alert("{{ $error }}");
        @endforeach
    </script>
@endif

    <!-- Receipt Page -->
    <div class="bg-white rounded-lg shadow-lg overflow-hidden max-w-xl mx-auto">
        <!-- Thumbnail Section -->
        <div class="relative h-60">
            <img src="{{ Storage::url($class->thumbnail) }}" alt="{{ $class->name }}" class="w-full h-full object-cover">
        </div>

        <!-- Class Details -->
        <div class="p-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">{{ $class->name }}</h1>
            <p class="text-lg text-emerald-600 font-semibold mb-4">
                Rp.{{ number_format($class->price, 0, ',', '.') }}
                @if($class->discount)
                    <span class="text-gray-500 line-through ml-2">
                        Rp.{{ number_format($class->price + $class->discount, 0, ',', '.') }}
                    </span>
                @endif
            </p>
            <p class="text-gray-600 mb-6">{{ $class->description }}</p>

            <!-- Payment Button -->
            <form action="{{ route('proses.bayar', $class->id) }}" method="POST">
                @csrf
                <!-- form fields here -->
                <input type="hidden" name="class_id" id="class_id" value="{{ $class->id }}">

                <!-- Button with styling -->
                <button type="submit" class="w-full py-3 mt-4 bg-emerald-600 text-white font-semibold text-lg rounded-md shadow-md hover:bg-emerald-700 transition duration-300">
                    Checkout Sekarang!!
                </button>
            </form>

        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
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
            <form action="{{ route('proses.bayar', $class->id) }}" method="POST" id="payment-form">
                @csrf
                <button type="button" id="pay-button" class="bg-emerald-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-emerald-700 transition">
                    Bayar Sekarang!!
                </button>
                <input type="hidden" name="snap_token" id="snap_token" value="{{ $snapToken }}">
            </form>
        </div>
    </div>
</div>

<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>
<script>
    document.getElementById('pay-button').onclick = function () {
        snap.pay(document.getElementById('snap_token').value, {
            onSuccess: function(result) {
                alert("Payment Success!");

                // Buat form dinamis untuk POST ke route tambah.user.kelas
                var form = document.createElement('form');
                form.method = 'POST';
                form.action = '{{ route("tambah.user.kelas", ":class_id") }}'.replace(":class_id", "{{ $class->id }}");

                // Tambahkan token CSRF untuk validasi
                var csrfToken = document.createElement('input');
                csrfToken.type = 'hidden';
                csrfToken.name = '_token';
                csrfToken.value = '{{ csrf_token() }}';
                form.appendChild(csrfToken);

                // Kirim form secara otomatis
                document.body.appendChild(form);
                form.submit();
            },
            onPending: function(result) {
                alert("Payment Pending!");
            },
            onError: function(result) {
                alert("Payment Error: " + result.status_message);
            }
        });
    };
</script>


@endsection

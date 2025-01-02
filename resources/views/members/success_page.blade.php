<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil</title>
    <!-- Link to Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-emerald-500 to-teal-500 min-h-screen flex justify-center items-center">

    <!-- Main Container -->
    <div class="bg-white rounded-lg shadow-lg p-6 max-w-lg w-full">
        <!-- Lottie Animation (Centering it) -->
        <div class="flex justify-center mb-6">
            <script src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs" type="module"></script>
            <dotlottie-player src="https://lottie.host/0cf62f43-546e-4e92-ac62-58ce86749343/EpDWzI1NiF.lottie" background="transparent" speed="1" style="width: 150px; height: 150px" loop autoplay></dotlottie-player>
        </div>

        <!-- Title and Message -->
        <h1 class="text-3xl font-semibold text-center text-emerald-700 mb-4">Pendaftaran Berhasil!</h1>
        <p class="text-lg text-gray-700 text-center mb-6">Selamat! Anda telah berhasil mendaftar untuk kelas ini. Berikut adalah detail kelas yang Anda pilih:</p>

        <!-- Class Detail -->
        @if($class)
            <div class="bg-gray-100 p-4 rounded-lg shadow-sm">
                <h2 class="text-xl font-bold text-emerald-600">Kelas: {{ $class->name }}</h2>
                <p class="text-md text-gray-700 mt-2">Harga: Rp.{{ number_format($class->price, 0, ',', '.') }}</p>
            </div>
        @else
            <p class="text-gray-600 text-center mt-4">Data kelas tidak ditemukan.</p>
        @endif

        <!-- Back to Member Area Button -->
        <div class="mt-6 text-center">
            <a href="{{ route('member.index') }}" class="inline-block bg-emerald-600 text-white px-6 py-3 rounded-lg shadow-md hover:bg-emerald-700 transition">
                Kembali ke Member Area
            </a>
        </div>
    </div>

</body>
</html>

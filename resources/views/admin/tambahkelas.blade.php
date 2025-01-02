
@extends('layouts.admin')
@section('content')
<form id="tambahKelasForm" action="{{ route('tambah.kelas.proses') }}" method="POST" enctype="multipart/form-data" class="bg-white p-8 rounded-lg shadow-sm border border-gray-200">

    @csrf
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="col-span-1">
            <label for="class_name" class="block text-gray-700 font-semibold mb-2">Nama Kelas</label>
            <input type="text" id="class_name" name="class_name" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Masukkan nama kelas" required>
        </div>

        <div class="col-span-1">
            <label for="thumbnail" class="block text-gray-700 font-semibold mb-2">Thumbnail</label>
            <input type="file" id="thumbnail" name="thumbnail" class="w-full p-3 border border-gray-300 rounded-lg">
        </div>

        <div class="col-span-1">
            <label for="class_description" class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
            <textarea id="class_description" name="class_description" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Masukkan deskripsi kelas" required></textarea>
        </div>

        <div class="col-span-1">
            <label for="price" class="block text-gray-700 font-semibold mb-2">Harga</label>
            <input type="number" id="price" name="price" step="0.01" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Masukkan harga kelas">
        </div>

        <div class="col-span-1">
            <label for="discount" class="block text-gray-700 font-semibold mb-2">Diskon (%)</label>
            <input type="number" id="discount" name="discount" step="0.01" max="100" class="w-full p-3 border border-gray-300 rounded-lg" placeholder="Masukkan diskon kelas">
        </div>

        <div class="col-span-1">
            <label for="preview_video" class="block text-gray-700 font-semibold mb-2">Video Preview</label>
            <input type="file" id="preview_video" name="preview_video" class="w-full p-3 border border-gray-300 rounded-lg">
        </div>

        <div class="col-span-1">
            <label for="videos" class="block text-gray-700 font-semibold mb-2">Videos</label>
            <input type="file" id="videos" name="videos[]" class="w-full p-3 border border-gray-300 rounded-lg" multiple>
        </div>

        <div class="col-span-1">
            <label for="pdfs" class="block text-gray-700 font-semibold mb-2">PDFs</label>
            <input type="file" id="pdfs" name="pdfs[]" class="w-full p-3 border border-gray-300 rounded-lg" multiple>
        </div>
    </div>

    <div class="mt-6">
        <button type="submit" class="bg-primary-green text-white px-6 py-3 rounded-lg font-semibold">Simpan</button>
        <a href="{{ route('tambah.kelas') }}" class="ml-4 text-gray-600 hover:underline">Batal</a>
    </div>
</form>

@endsection

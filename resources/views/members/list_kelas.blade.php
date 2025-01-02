@extends('layouts.member')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">List Kelas</h1>
    <table id="classTable" class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 p-2">Thumbnail</th>
                <th class="border border-gray-300 p-2">Nama Kelas</th>

                <th class="border border-gray-300 p-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($classes as $class)
            <tr>
                <td class="border border-gray-300 p-2">
                    <img src="{{ asset('storage/' . $class->thumbnail) }}" alt="{{ $class->name }}" class="w-20 h-20 object-cover">
                </td>
                <td class="border border-gray-300 p-2">{{ $class->name }}</td>


                <td class="border border-gray-300 p-2">
                    <a href="#" class="text-blue-500">Detail Kelas</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#classTable').DataTable();
    });
</script>
@endsection

<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()    {
        $user = Auth::user(); // Ambil data pengguna yang sedang login
        $nama = $user ? $user->name : 'Guest'; // Ganti 'Guest' jika tidak ada pengguna yang login

        return view('admin.index', compact('nama')); // Kirimkan nama pengguna ke view
    }


    function tambahKelas(){
        $user = Auth::user(); // Ambil data pengguna yang sedang login
        $nama = $user ? $user->name : 'Guest'; // Ganti 'Guest' jika tidak ada pengguna yang login

        return view('admin.tambahkelas', compact('nama')); // Kirimkan nama pengguna ke view
    }
    public function tambahKelasProses(Request $request)
    {
        // Validasi input
        $request->validate([
            'class_name' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'class_description' => 'required|string',
            'price' => 'nullable|numeric|min:0',
            'discount' => 'nullable|numeric|min:0|max:100',
            'preview_video' => 'nullable|mimes:mp4,mov,avi,wmv|max:20480',
            'videos.*' => 'nullable|mimes:mp4,mov,avi,wmv|max:20480',
            'pdfs.*' => 'nullable|mimes:pdf|max:10240',
        ]);

        // Upload files
        $thumbnailPath = $request->file('thumbnail') ? $request->file('thumbnail')->store('uploads/thumbnails', 'public') : null;
        $previewVideoPath = $request->file('preview_video') ? $request->file('preview_video')->store('uploads/previews', 'public') : null;

        $videos = [];
        if ($request->hasFile('videos')) {
            foreach ($request->file('videos') as $video) {
                $videos[] = $video->store('uploads/videos', 'public');
            }
        }

        $pdfs = [];
        if ($request->hasFile('pdfs')) {
            foreach ($request->file('pdfs') as $pdf) {
                $pdfs[] = $pdf->store('uploads/pdfs', 'public');
            }
        }

        // Simpan data ke database
        $class = new ClassModel();
        $class->name = $request->input('class_name');
        $class->thumbnail = $thumbnailPath;
        $class->description = $request->input('class_description');
        $class->price = $request->input('price');
        $class->discount = $request->input('discount');
        $class->preview_video = $previewVideoPath;
        $class->videos = json_encode($videos);
        $class->pdfs = json_encode($pdfs);

        if ($class->save()) {
            return redirect()->route('tambah.kelas')->with('success', 'Kelas berhasil ditambahkan.');
        } else {
            return back()->with('error', 'Terjadi kesalahan saat menyimpan data kelas.');
        }
    }

    function listKelasBiasa(){
        $classes = ClassModel::whereNull('deleted_at')->get();
        return view('admin.listKelasBiasa', compact('classes'));
    }


    }



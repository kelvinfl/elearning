<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use App\Models\ClassUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->with('error', 'Please login first.');
        }

        if ($user->level === 'admin') {
            return redirect()->route('admin.index');
        }

        $class_id = $request->query('class_id'); // Ambil class_id dari query string

        // Hitung total kelas yang terkait dengan user melalui ClassUser model
        $totalClasses = ClassUser::where('user_id', $user->id)->count();

        if ($class_id) {
            return redirect()->route('bayar.kelas', ['class_id' => $class_id]);
        }

        return view('members.index', [
            'name' => $user->name,
            'totalClasses' => $totalClasses // Pass totalClasses ke view
        ]);
    }



    public function video()
    {
        return view('members.detail');
    }

    public function verifikasiKelas($class_id){
                // Ambil user ID dari sesi login
                $user_id = auth()->id();

                // Cek apakah user sudah terdaftar di kelas
                $exists = ClassUser::where('user_id', $user_id)
                    ->where('class_id', $class_id)
                    ->exists();

                if ($exists) {
                    // Jika sudah terdaftar, arahkan ke member.index
                    return redirect()->route('member.index');
                } else {
                    // Jika belum, arahkan ke detail.kelas dengan parameter class_id
                    return redirect()->route('detail.kelas', ['class_id' => $class_id]);
                }
    }

    public function detailKelas($class_id)
    {
        $class = ClassModel::findOrFail($class_id);

        // Decode JSON strings untuk videos dan pdfs
        $class->videos = json_decode($class->videos) ?? [];
        $class->pdfs = json_decode($class->pdfs) ?? [];

        return view('members.detail_kelas', compact('class'));
    }

    public function bayarKelas($class_id)
    {
        $class = ClassModel::findOrFail($class_id);
        return view('members.bayar', compact('class'));
    }

    public function listKelas()
    {
        // Dapatkan nama pengguna yang sedang login
        $name = Auth::user()->name;

        // Ambil data kelas yang terkait dengan user_id melalui tabel pivot class_user
        $classUsers = ClassUser::where('user_id', Auth::id())->get();

        // Ambil detail kelas berdasarkan class_id yang terkait di tabel class_user
        $classes = ClassModel::whereIn('id', $classUsers->pluck('class_id'))->get();

        // Kirimkan data kelas dan nama pengguna ke view
        return view('members.list_kelas', compact('classes', 'name'));
    }




}



<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    public function index()
    {
        $user = Auth::user(); // Ambil data pengguna yang sedang login
        $name = $user ? $user->name : 'Guest'; // Ganti 'Guest' jika tidak ada pengguna yang login

        return view('members.index', compact('name')); // Kirimkan nama pengguna ke view
    }
    public function video()
    {
        return view('members.detail');
    }
}



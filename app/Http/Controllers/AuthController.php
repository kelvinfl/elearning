<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use App\Models\User;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    function home(){
        $classes = ClassModel::whereNull('deleted_at')->get();
        return view('welcome', compact('classes'));
    }

    public function loginProses(Request $request)
    {
        // Mendapatkan kredensial yang dikirimkan
        $credentials = $request->only('email', 'password');

        // Cek apakah login berhasil
        if (Auth::attempt($credentials)) {
            // Ambil data pengguna yang sedang login
            $user = Auth::user();

            // Pengecekan level user
            if ($user->level === 'member') {
                // Jika levelnya member, arahkan ke halaman member
                return redirect()->route('member.index');
            } elseif ($user->level === 'admin') {
                // Jika levelnya admin, arahkan ke halaman admin
                return redirect()->route('admin.index');
            }

            // Jika level tidak dikenali, logout dan kembalikan pesan kesalahan
            Auth::logout();
            return redirect()->route('login')->withErrors(['email' => 'Unrecognized user level']);
        }

        // Jika login gagal, kembalikan ke halaman login dengan pesan kesalahan
        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }
    public function register()
    {
        return view('auth.register');
    }

    public function registerProses(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        // Ambil level_id untuk 'member' dari tabel levels
        $level = Level::where('name', 'member')->first(); // Ganti sesuai dengan level yang diinginkan

        // Jika level ditemukan, buat user baru
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level_id' => $level ? $level->id : null, // Assign level_id
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }

    function logout(Request $request){
            // Logout pengguna
    Auth::logout();

    // Invalidate session dan regenerate token
    $request->session()->invalidate();
    $request->session()->regenerateToken();

    // Redirect ke halaman login
    return redirect()->route('login')->with('success', 'Logout berhasil.');
    }

}

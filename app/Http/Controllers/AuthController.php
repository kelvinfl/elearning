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
        $class_id = request('class_id'); // Ambil class_id dari request
        return view('auth.login', compact('class_id'));
    }


    function home(){
        $classes = ClassModel::whereNull('deleted_at')->get();
        return view('welcome', compact('classes'));
    }

    public function loginProses(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $class_id = $request->input('class_id'); // Ambil class_id dari form

            if ($user->level === 'member') {
                return $class_id
                    ? redirect()->route('bayar.kelas', ['class_id' => $class_id])
                    : redirect()->route('member.index');
            } elseif ($user->level === 'admin') {
                return redirect()->route('admin.index');
            }

            Auth::logout();
            return redirect()->route('login')->withErrors(['email' => 'Unrecognized user level']);
        }

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
    return redirect()->route('home')->with('success', 'Logout berhasil.');
    }

}

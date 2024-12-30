<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;

Route::get('/', [AuthController::class, 'home'])->name('home');

// Auth Routes
Route::get('/login/area', [AuthController::class, 'login'])->name('login');
Route::post('/login/proses', [AuthController::class, 'loginProses'])->name('login.proses');
Route::get('/register/area', [AuthController::class, 'register'])->name('register');
Route::post('/register/proses', [AuthController::class, 'registerProses'])->name('register.proses');

// Password Reset Routes
Route::get('password/reset', [AuthController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [AuthController::class, 'reset'])->name('password.update');

// Member Routes
Route::middleware(['auth.check'])->group(function () {
    Route::get('/member/area', [MemberController::class, 'index'])->name('member.index');
    Route::get('/admin/area', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/member/video', [MemberController::class, 'video'])->name('member.video');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/tambah/kelas', [AdminController::class, 'tambahKelas'])->name('tambah.kelas');
    Route::post('/tambah/kelas/proses', [AdminController::class, 'tambahKelasProses'])->name('tambah.kelas.proses');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PaymentController;

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
    Route::get('/detail-kelas/{class_id}', [MemberController::class, 'detailKelas'])->name('detail.kelas');
    Route::get('/list/kelas/biasa', [AdminController::class, 'listKelasBiasa'])->name('list.kelas.biasa');
    Route::get('/admin/area', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/member/video', [MemberController::class, 'video'])->name('member.video');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/tambah/kelas', [AdminController::class, 'tambahKelas'])->name('tambah.kelas');
    Route::post('/tambah/kelas/proses', [AdminController::class, 'tambahKelasProses'])->name('tambah.kelas.proses');
    Route::get('/verifikasi-kelas/{class_id}', [MemberController::class, 'verifikasiKelas'])->name('verifikasi.kelas');
    Route::get('/bayar/kelas/{class_id}', [MemberController::class, 'bayarKelas'])->name('bayar.kelas');

    Route::post('/bayar/{class_id}', [PaymentController::class, 'processPayment'])->name('proses.bayar');
    Route::post('/tambah-user-kelas/{class_id}', [PaymentController::class, 'tambahUserKelas'])->name('tambah.user.kelas');
    Route::get('/success', [PaymentController::class, 'success'])->name('success');
    Route::get('/list/kelas/saya', [MemberController::class, 'listKelas'])->name('list.kelas.member');





});

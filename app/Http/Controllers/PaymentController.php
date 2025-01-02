<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use Midtrans\Config;
use App\Models\ClassUser;
use App\Models\ClassModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function __construct()
    {
        // Set up Midtrans Config
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$clientKey = env('MIDTRANS_CLIENT_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION');
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    // Handle payment request and show the invoice page
    public function processPayment($class_id)
    {
        // Ambil data kelas berdasarkan class_id
        $class = ClassModel::find($class_id);

        // Periksa apakah kelas ditemukan
        if (!$class) {
            return back()->withErrors(['error' => 'Kelas tidak ditemukan.']);
        }

        // Periksa apakah harga dan nama kelas ada
        if (!$class->price || !$class->name) {
            return back()->withErrors(['error' => 'Harga atau Nama kelas tidak ditemukan.']);
        }

        // Konversi harga menjadi integer tanpa desimal (contoh: 2122222)
        $price = (int) str_replace(['.', ','], '', $class->price);

        // Create transaction details
        $transaction_details = [
            'order_id' => 'ORDER-' . uniqid(),
            'gross_amount' => $price,  // Amount in IDR
        ];

        // Set the items for payment
        $items = [
            [
                'id' => 'item1',
                'price' => $price,
                'quantity' => 1,
                'name' => $class->name,
            ],
        ];

        // Define the customer info
        $customer_details = [
            'first_name'    => 'Customer Name',
            'last_name'     => 'Last Name',
            'email'         => 'customer@example.com',
            'phone'         => '08123456789',
        ];

        // Create the Midtrans transaction data
        $transaction_data = [
            'payment_type' => 'credit_card',
            'transaction_details' => $transaction_details,
            'item_details' => $items,
            'customer_details' => $customer_details,
        ];

        // Get the payment URL from Midtrans
        try {
            // Get Snap token
            $snapToken = Snap::getSnapToken($transaction_data);

            return view('members.bayar_gateway', [
                'class' => $class,
                'snapToken' => $snapToken,
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    // Menambahkan user ke kelas
    public function tambahUserKelas($class_id)
    {
        // Ambil data kelas berdasarkan class_id
        $class = ClassModel::find($class_id);

        // Periksa apakah kelas ditemukan
        if (!$class) {
            return redirect()->route('home')->withErrors(['error' => 'Kelas tidak ditemukan.']);
        }

        // Dapatkan ID pengguna yang sedang login
        $user = Auth::user();

        // Simpan data ke tabel pivot 'class_user'
        ClassUser::create([
            'user_id' => $user->id,
            'class_id' => $class->id,
        ]);

        // Simpan data kelas dalam session dan redirect ke halaman sukses
        return redirect()->route('success')->with('class', $class);
    }

    public function success()
    {
        // Ambil data kelas dari session
        $class = session('class');

        // Pastikan data kelas tersedia
        if (!$class) {
            return redirect()->route('member.index')->withErrors(['error' => 'Data kelas tidak ditemukan.']);
        }

        // Kirim data kelas ke view success_page
        return view('members.success_page', compact('class'));
    }



}

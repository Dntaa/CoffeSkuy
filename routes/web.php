<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MenuController;
use App\Models\Order;
use App\Models\OrderItem;

/*
|--------------------------------------------------------------------------
| Halaman Utama & Menu
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

/*
|--------------------------------------------------------------------------
| Keranjang & Pesan Menu
|--------------------------------------------------------------------------
*/

// Tambah menu ke keranjang
Route::get('/pesan/{nama}', [MenuController::class, 'tambahKeKeranjang']);

// Tampilkan halaman keranjang
Route::get('/keranjang', function () {
    $cart = session('cart', []);
    return view('keranjang', compact('cart'));
});

// Hapus item dari keranjang berdasarkan nama menu
Route::get('/keranjang/hapus/{nama}', function ($nama) {
    $cart = session()->get('cart', []);
    $nama = urldecode($nama);
    unset($cart[$nama]);
    session()->put('cart', $cart);
    return back()->with('success', 'Item berhasil dihapus.');
});


/*
|--------------------------------------------------------------------------
| Checkout
|--------------------------------------------------------------------------
*/

// Tampilkan form checkout
Route::get('/checkout', function () {
    $cart = session('cart', []);
    return view('checkout', compact('cart'));
});

// Proses checkout
Route::post('/checkout', function (Request $request) {
    $request->validate([
        'nama' => 'required',
        'hp' => 'required',
        'alamat' => 'required',
    ]);

    $cart = session('cart', []);
    if (empty($cart)) {
        return redirect('/keranjang')->with('error', 'Keranjang kosong.');
    }

    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }

    // Simpan order utama
    $order = Order::create([
        'nama' => $request->nama,
        'hp' => $request->hp,
        'alamat' => $request->alamat,
        'total' => $total,
    ]);

    // Simpan detail pesanan (order item)
    foreach ($cart as $menu => $item) {
        OrderItem::create([
            'order_id' => $order->id,
            'menu' => $menu,
            'price' => $item['price'],
            'quantity' => $item['quantity'],
            'subtotal' => $item['price'] * $item['quantity'],
        ]);
    }

    session()->forget('cart');

    return redirect('/')->with('success', 'Pesanan berhasil dikirim!');
});

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function tambahKeKeranjang($menu)
{
    $menuList = [
        'Espresso' => 20000,
        'Cafe Latte' => 25000,
        'Cappuccino' => 25000,
        'Matcha Latte' => 28000,
        'Croissant' => 18000,
        'Chocolate Brownies' => 20000
    ];

    $decoded = urldecode($menu);
    $price = $menuList[$decoded] ?? null;

    if (!$price) {
        return redirect()->back()->with('error', 'Menu tidak ditemukan.');
    }

    $cart = session()->get('cart', []);

    if (isset($cart[$decoded])) {
        $cart[$decoded]['quantity']++;
    } else {
        $cart[$decoded] = [
            'price' => $price,
            'quantity' => 1
        ];
    }

    session()->put('cart', $cart);
    return redirect('/keranjang')->with('success', "$decoded berhasil ditambahkan ke keranjang!");
}

}

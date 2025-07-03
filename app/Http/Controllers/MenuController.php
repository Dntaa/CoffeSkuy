<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('menu', compact('menus'));
    }

    public function tambahKeKeranjang($nama)
{
    $menu = Menu::where('nama', urldecode($nama))->first();

    if (!$menu) {
        return redirect()->back()->with('error', 'Menu tidak ditemukan.');
    }

    $cart = session()->get('cart', []);

    if (isset($cart[$menu->nama])) {
        $cart[$menu->nama]['quantity']++;
    } else {
        $cart[$menu->nama] = [
            'nama' => $menu->nama, // ✅ Tambahkan key nama
            'price' => $menu->harga,
            'quantity' => 1,
        ];
    }

    session()->put('cart', $cart);
    return redirect('/keranjang')->with('success', "$menu->nama berhasil ditambahkan ke keranjang!");
}

}

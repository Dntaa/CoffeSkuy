<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('menus')->truncate(); // hapus semua data lama
        Menu::insert([
            [
                'nama' => 'Espresso',
                'harga' => 20000,
                'deskripsi' => 'A bold and rich classic coffee shot.',
                'gambar' => 'coffe.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Cafe Latte',
                'harga' => 25000,
                'deskripsi' => 'Smooth espresso mixed with steamed milk.',
                'gambar' => 'coffe.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Cappuccino',
                'harga' => 25000,
                'deskripsi' => 'Frothy milk meets rich espresso.',
                'gambar' => 'coffe.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Croissant',
                'harga' => 18000,
                'deskripsi' => 'Flaky and buttery French pastry.',
                'gambar' => 'croissant.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Sandwich',
                'harga' => 28000,
                'deskripsi' => 'Delicious sandwich with fresh ingredients.',
                'gambar' => 'sandwich.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nama' => 'Waffle Ice Cream',
                'harga' => 20000,
                'deskripsi' => 'Crispy waffle topped with creamy ice cream.',
                'gambar' => 'waffle-icecream.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

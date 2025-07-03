<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Checkout - CoffeSkuy</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Josefin Sans', sans-serif;
    }
  </style>
</head>
<body class="bg-[#1c1b19] text-gray-100">

  @include('layouts.navbar')

  <main class="max-w-4xl mx-auto mt-20 p-8 bg-[#ece0d1] text-[#1c1b19] rounded-2xl shadow-lg">
    <h1 class="text-3xl font-bold mb-6 border-b pb-2 border-amber-400">Checkout</h1>

    @if($errors->any())
      <div class="bg-red-100 text-red-800 p-4 rounded mb-6">
        <ul class="list-disc pl-5">
          @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="/checkout" method="POST" class="space-y-6">
      @csrf

      <!-- Data Pelanggan -->
      <div class="grid md:grid-cols-2 gap-6">
        <div>
          <label class="block mb-1 font-semibold">Nama Lengkap</label>
          <input type="text" name="nama" required
                 class="w-full px-4 py-3 rounded bg-[#fefefe] border border-gray-400 focus:outline-none focus:ring-2 focus:ring-amber-500 text-[#1c1b19]">
        </div>

        <div>
          <label class="block mb-1 font-semibold">Nomor HP</label>
          <input type="tel" name="hp" required
                 class="w-full px-4 py-3 rounded bg-[#fefefe] border border-gray-400 focus:outline-none focus:ring-2 focus:ring-amber-500 text-[#1c1b19]">
        </div>
      </div>

      <div>
        <label class="block mb-1 font-semibold">Alamat Lengkap</label>
        <textarea name="alamat" rows="3" required
                  class="w-full px-4 py-3 rounded bg-[#fefefe] border border-gray-400 focus:outline-none focus:ring-2 focus:ring-amber-500 text-[#1c1b19]"></textarea>
      </div>

      <!-- Ringkasan Pesanan -->
      <div class="bg-[#2d2b28] p-6 rounded-xl text-white">
        <h2 class="text-xl font-semibold mb-4 border-b border-amber-500 pb-2">Ringkasan Pesanan</h2>
        <ul class="space-y-3">
          @php $total = 0; @endphp
          @foreach($cart as $menu => $item)
            @php
              $subtotal = $item['price'] * $item['quantity'];
              $total += $subtotal;
            @endphp
            <li class="flex justify-between items-center">
              <span>{{ $menu }} x{{ $item['quantity'] }}</span>
              <span>Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
            </li>
          @endforeach
        </ul>
        <div class="border-t border-gray-600 mt-4 pt-4 text-right text-lg font-bold">
          Total: Rp {{ number_format($total, 0, ',', '.') }}
        </div>
      </div>

      <!-- Tombol Submit -->
      <div class="text-right">
        <button type="submit"
                class="bg-amber-600 text-white px-6 py-3 rounded-full hover:bg-amber-700 transition duration-200 shadow">
          Kirim Pesanan
        </button>
      </div>
    </form>
  </main>

</body>
</html>

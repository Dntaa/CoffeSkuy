<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Keranjang - CoffeSkuy</title>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Josefin Sans', sans-serif;
      padding-top: 80px;
    }
  </style>
</head>
<body class="bg-[#1c1b19] text-gray-100">

  @include('layouts.navbar')

  <main class="max-w-4xl mx-auto p-8 bg-[#ece0d1] text-[#1c1b19] rounded-xl shadow-lg">
    <h1 class="text-3xl font-bold mb-6">Keranjang Belanja</h1>

    @if(session('success'))
      <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
        {{ session('success') }}
      </div>
    @endif

    @if(count($cart) > 0)
      @php $grandTotal = 0; @endphp

      <div class="overflow-x-auto">
        <table class="w-full text-left border-separate border-spacing-y-2">
          <thead>
            <tr class="text-md font-semibold text-[#1c1b19] border-b border-amber-400">
              <th class="pb-2">Menu</th>
              <th class="pb-2">Harga</th>
              <th class="pb-2">Jumlah</th>
              <th class="pb-2">Total</th>
              <th class="pb-2">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach($cart as $menu => $item)
              @php
                $total = $item['price'] * $item['quantity'];
                $grandTotal += $total;
              @endphp
              <tr>
                <td>{{ $menu }}</td>
                <td>Rp {{ number_format($item['price'], 0, ',', '.') }}</td>
                <td>{{ $item['quantity'] }}</td>
                <td>Rp {{ number_format($total, 0, ',', '.') }}</td>
                <td>
                  <a href="{{ url('/keranjang/hapus/' . urlencode($menu)) }}" class="text-red-600 hover:text-red-800">Hapus</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>

      <div class="mt-8 text-right">
        <p class="text-xl font-bold mb-4">Total Bayar: Rp {{ number_format($grandTotal, 0, ',', '.') }}</p>
        <a href="/checkout" class="inline-block bg-amber-600 text-white px-5 py-3 rounded hover:bg-amber-700 transition duration-200">
          Lanjut ke Checkout
        </a>
      </div>
    @else
      <p class="text-gray-600 text-center">Keranjang masih kosong.</p>
    @endif
  </main>

</body>
</html>

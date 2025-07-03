<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menu - CoffeSkuy</title>
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

  <!-- Header -->
  <header class="bg-[#ece0d1] text-[#1c1b19] py-16 text-center">
    <h1 class="text-5xl font-bold tracking-wide">Our Signature Menu</h1>
    <p class="mt-2 text-lg">From fresh brew to sweet bites — we’ve got your cravings covered.</p>
  </header>

  <!-- Menu Grid -->
  <section class="py-20 px-4">
    <div class="max-w-screen-xl mx-auto">
      <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-10">

        @forelse ($menus as $menu)
          <div class="bg-[#2d2b28] rounded-2xl overflow-hidden shadow-lg hover:scale-105 transition duration-300 ease-in-out">
            <img src="{{ asset('img/' . $menu->gambar) }}" alt="{{ $menu->nama }}" class="w-full h-48 object-cover">
            <div class="p-6">
              <h2 class="text-xl font-semibold mb-1">{{ $menu->nama }}</h2>
              <p class="text-sm text-gray-400 mb-3">{{ $menu->deskripsi }}</p>
              <div class="flex items-center justify-between">
                <span class="text-amber-400 text-lg font-bold">Rp {{ number_format($menu->harga, 0, ',', '.') }}</span>
                <a href="{{ url('/pesan/' . urlencode($menu->nama)) }}" class="bg-amber-500 hover:bg-amber-700 text-white px-4 py-2 rounded-full text-sm transition">
                  Pesan
                </a>
              </div>
            </div>
          </div>
        @empty
          <div class="col-span-3 text-center text-gray-400 text-lg">Belum ada menu tersedia.</div>
        @endforelse

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-[#2d2b28] text-gray-300 py-10 px-4">
    <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6">
      <div class="text-center md:text-left">
        <h4 class="text-lg font-semibold">Coffeskuy</h4>
        <p class="text-sm">Brewed To Perfection, Served With Love</p>
      </div>
      <div class="text-center">
        <p class="text-sm">©2025 Coffeskuy. All Rights Reserved.</p>
      </div>
      <div class="text-center">
        <form class="flex items-center gap-2">
          <input type="email" placeholder="Enter your email" class="px-4 py-2 rounded-full bg-[#1c1b19] border border-gray-600 text-sm">
          <button class="px-4 py-2 bg-amber-500 text-white rounded-full text-sm hover:bg-amber-600">Subscribe</button>
        </form>
      </div>
    </div>
  </footer>

</body>
</html>

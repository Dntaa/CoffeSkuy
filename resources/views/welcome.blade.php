<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Coffeskuy</title>
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
  <!-- Header / Hero -->
  <header class="bg-[#ece0d1] text-[#1c1b19] py-20 px-4">
    <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8">
      <div class="md:w-1/2 text-center md:text-left">
        <h1 class="text-5xl font-bold mb-4">Brewed To Perfection, Served With Love</h1>
        <p class="mb-6 text-lg">Indulge in handcrafted coffee, freshly baked pastries, and a welcoming atmosphere designed to inspire and unwind.</p>
        <div class="flex justify-center md:justify-start gap-4">
          <a href="{{ route('menu') }}" class="bg-[#1c1b19] text-white px-5 py-2 rounded shadow hover:bg-[#3a3734]">Order Online</a>
          <a href="#" class="border border-[#1c1b19] px-5 py-2 rounded shadow hover:bg-[#d6c7b7]">Find a Location</a>
        </div>
      </div>
      <div class="md:w-1/2">
        <img src="/img/cff.jpg" alt="Coffee" class="rounded-full shadow-xl mx-auto w-64 h-64 object-cover" />
      </div>
    </div>
  </header>

  <!-- Info Cards -->
  <section class="bg-[#1c1b19] py-20 px-4">
  <div class="max-w-screen-xl mx-auto grid md:grid-cols-2 gap-16">

    <!-- Kartu Kiri -->
    <div class="flex flex-col md:flex-row items-center gap-6 bg-[#2d2b28] p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300">
      <img src="/img/99.jpg" class="w-48 h-48 object-cover rounded-xl shadow" alt="Beans" />
      <div class="text-center md:text-left">
        <h2 class="text-2xl font-semibold text-amber-400 mb-2">Handmade Just For You</h2>
        <p class="mb-4 text-gray-300 text-sm leading-relaxed">
          Our organically grown coffee beans are roasted over an open flame in a one-of-a-kind, brick roaster.
          There’s nothing quite like a cup of Coffeskuy coffee.
        </p>
        <a href="{{ route('menu') }}" class="text-sm text-amber-500 hover:text-amber-400 underline transition">View our menu →</a>
      </div>
    </div>

    <!-- Kartu Kanan -->
    <div class="flex flex-col md:flex-row-reverse items-center gap-6 bg-[#2d2b28] p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300">
      <img src="/img/gal0.jpg" class="w-48 h-48 object-cover rounded-xl shadow" alt="Interior" />
      <div class="text-center md:text-left">
        <h2 class="text-2xl font-semibold text-amber-400 mb-2">Made In Medan</h2>
        <p class="mb-4 text-gray-300 text-sm leading-relaxed">
          Coffeskuy lahir dari semangat anak muda lokal Medan. Kami percaya setiap tegukan kopi membawa cerita dan menciptakan koneksi.
        </p>
        <a href="{{ route('about') }}" class="text-sm text-amber-500 hover:text-amber-400 underline transition">Learn more →</a>
      </div>
    </div>

  </div>
</section>


  <!-- Social & Gallery -->
  <section class="bg-[#2d2b28] py-12 px-4">
    <div class="max-w-screen-xl mx-auto text-center">
      <div class="mb-6">
        <p class="text-lg mb-2">#CoffeskuyVibes</p>
        <p class="text-sm text-gray-400">Follow Us @coffeskuy.id</p>
      </div>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <img src="/img/gal1.jpg" class="rounded-lg shadow-md" alt="Gallery 1">
        <img src="/img/gal2.jpg" class="rounded-lg shadow-md" alt="Gallery 2">
        <img src="/img/gal3.jpg" class="rounded-lg shadow-md" alt="Gallery 3">
        <img src="/img/gal4.jpg" class="rounded-lg shadow-md" alt="Gallery 4">
      </div>
    </div>
  </section>

  <!-- Locations -->
  <section class="bg-[#1c1b19] py-16 px-4">
    <div class="max-w-screen-xl mx-auto">
      <h2 class="text-3xl font-bold text-center mb-10">Locations</h2>
      <div class="grid md:grid-cols-3 gap-8 text-center">
        <div>
          <h3 class="text-xl font-semibold mb-2">Medan</h3>
          <p class="text-gray-400">Jl. Setia Budi No. 45, Medan</p>
        </div>
        <div>
          <h3 class="text-xl font-semibold mb-2">Binjai</h3>
          <p class="text-gray-400">Jl. Jendral Sudirman No. 10, Binjai</p>
        </div>
        <div>
          <h3 class="text-xl font-semibold mb-2">Deli Serdang</h3>
          <p class="text-gray-400">Jl. Gatot Subroto No. 12, Deli Serdang</p>
        </div>
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

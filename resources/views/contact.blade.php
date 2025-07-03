<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Kontak - CoffeSkuy</title>
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
    <h1 class="text-4xl font-bold">Hubungi Kami</h1>
    <p class="mt-2 text-lg">Punya pertanyaan? Saran? Atau sekadar ingin menyapa?</p>
  </header>

  <!-- Kontak Form -->
  <section class="py-16 px-6">
    <div class="max-w-4xl mx-auto bg-[#2d2b28] p-8 rounded-xl shadow-lg">
      <h2 class="text-2xl font-semibold text-amber-400 mb-6">Kirim Pesan</h2>
      <form action="#" method="POST" class="grid gap-6">

        <div>
          <label for="nama" class="block mb-2 text-sm text-gray-300">Nama Lengkap</label>
          <input type="text" id="nama" name="nama" required
            class="w-full p-3 rounded bg-[#1c1b19] border border-gray-600 text-white focus:outline-none focus:border-amber-500">
        </div>

        <div>
          <label for="email" class="block mb-2 text-sm text-gray-300">Email</label>
          <input type="email" id="email" name="email" required
            class="w-full p-3 rounded bg-[#1c1b19] border border-gray-600 text-white focus:outline-none focus:border-amber-500">
        </div>

        <div>
          <label for="pesan" class="block mb-2 text-sm text-gray-300">Pesan</label>
          <textarea id="pesan" name="pesan" rows="5" required
            class="w-full p-3 rounded bg-[#1c1b19] border border-gray-600 text-white focus:outline-none focus:border-amber-500"></textarea>
        </div>

        <button type="submit"
          class="w-full bg-amber-500 text-white py-3 rounded hover:bg-amber-600 transition duration-200">
          Kirim Pesan
        </button>
      </form>
    </div>
  </section>

  <!-- Info Kontak -->
  <section class="py-10 px-6 text-center">
    <h3 class="text-2xl font-semibold text-amber-400 mb-4">Atau Kunjungi Kami</h3>
    <p class="text-gray-400 mb-2">📍 Jl. Kopi No.10, Medan, Sumatera Utara</p>
    <p class="text-gray-400 mb-2">📞 0812-3456-7890</p>
    <p class="text-gray-400">📧 hello@coffeskuy.com</p>
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
          <button class="px-4 py-2 bg-amber-500 text-white rounded-full text-sm hover:bg-amber-600">Subscri

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us - CoffeSkuy</title>
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
  <header class="bg-[#ece0d1] text-[#1c1b19] py-20 text-center">
    <h1 class="text-4xl font-bold tracking-wide">Tentang CoffeSkuy</h1>
    <p class="mt-3 text-lg">Lebih dari sekadar kopi, ini tentang rasa, cerita, dan koneksi.</p>
  </header>

  <!-- Content -->
  <section class="py-16 px-6">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-12 items-center">

      <!-- Gambar -->
      <img src="/img/gal0.jpg" alt="Tentang Kami" class="w-full h-80 object-cover rounded-xl shadow-lg">

      <!-- Teks -->
      <div>
        <h2 class="text-3xl text-amber-400 font-semibold mb-4">Cerita Kami</h2>
        <p class="text-gray-300 leading-relaxed mb-4 text-sm">
          CoffeSkuy dimulai dari mimpi sederhana: menciptakan tempat di mana setiap orang merasa diterima, nyaman, dan bisa menikmati secangkir kopi terbaik.
          Dari bahan lokal Medan hingga racikan khas barista kami, setiap tegukan menghadirkan cerita dan kehangatan.
        </p>
        <p class="text-gray-400 leading-relaxed text-sm">
          Kami percaya kopi adalah jembatan. Menghubungkan percakapan, mempererat relasi, dan menyatukan semangat anak muda lokal untuk berkarya.
        </p>
      </div>
    </div>
  </section>

  <!-- Visi Misi -->
  <section class="py-16 px-6 bg-[#2d2b28]">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl text-amber-400 font-semibold mb-6">Visi & Misi Kami</h2>
      <p class="text-gray-300 mb-3 text-sm">☕ Menyediakan kopi berkualitas tinggi dengan pelayanan terbaik</p>
      <p class="text-gray-300 mb-3 text-sm">💡 Menjadi wadah kreativitas & inovasi anak muda lokal</p>
      <p class="text-gray-300 text-sm">🌱 Menumbuhkan budaya ngopi yang ramah, inklusif, dan berkelanjutan</p>
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

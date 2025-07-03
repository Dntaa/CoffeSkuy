<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navbar CoffeSkuy</title>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Josefin Sans', sans-serif;
      padding-top: 72px; /* agar konten tidak ketimpa navbar */
    }
  </style>
</head>
<body class="bg-[#1c1b19] dark:bg-gray-900 text-gray-900 dark:text-white">

<!-- Navbar -->
<nav class="bg-[#1c1b19] dark:bg-orange-500 fixed top-0 left-0 w-full z-50 shadow">
  <div class="max-w-screen-xl mx-auto flex flex-wrap items-center justify-between p-4">

    <!-- Logo -->
    <a href="/" class="flex items-center space-x-2">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-amber-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17h8a4 4 0 004-4V7H4v6a4 4 0 004 4z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V5m4 2V5m4 2V5" />
      </svg>
      <span class="text-2xl font-bold text-amber-800 font-poppins tracking-wide">CoffeSkuy</span>
    </a>

    <!-- Tombol Aksi + Toggle -->
    <div class="flex items-center md:order-2 space-x-2">
      <button class="flex items-center gap-2 bg-amber-500 hover:bg-amber-600 text-white px-4 py-2 rounded-lg text-sm transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7" />
        </svg>
        Log out
      </button>
      <button id="nav-toggle" class="md:hidden text-gray-700 dark:text-white hover:text-amber-500 focus:outline-none">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>

    <!-- Menu -->
    <div id="mobile-menu" class="hidden w-full md:flex md:items-center md:w-auto md:order-1 mt-4 md:mt-0">
      <ul class="flex flex-col md:flex-row md:space-x-8 text-sm md:text-base font-medium">
        <li><a href="{{ route('home') }}" class="block px-3 py-2 rounded-md hover:text-amber-500 transition">Home</a></li>
        <li><a href="{{ route('menu') }}" class="block px-3 py-2 rounded-md hover:text-amber-500 transition">Menu</a></li>
        <li><a href="/keranjang" class="block px-3 py-2 rounded-md hover:text-amber-500 transition">Keranjang</a></li>
        <li><a href="{{ route('about') }}" class="block px-3 py-2 rounded-md hover:text-amber-500 transition">About</a></li>
        <li><a href="{{ route('contact') }}" class="block px-3 py-2 rounded-md hover:text-amber-500 transition">Kontak</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Script Toggle Mobile -->
<script>
  const toggle = document.getElementById('nav-toggle');
  const menu = document.getElementById('mobile-menu');

  toggle.addEventListener('click', () => {
    menu.classList.toggle('hidden');
  });
</script>

</body>
</html>

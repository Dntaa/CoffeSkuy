<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesan Menu - CoffeSkuy</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-amber-50 dark:bg-gray-900 text-gray-900 dark:text-white">

  @include('layouts.navbar')

  <div class="max-w-2xl mx-auto mt-20 bg-white dark:bg-amber-900 p-8 rounded shadow">
    <h1 class="text-3xl font-bold mb-6">Pesan Menu</h1>

    <form action="/pesan/kirim" method="POST" class="space-y-6">
      @csrf
      <div>
        <label class="block mb-2 font-semibold">Menu yang dipilih</label>
        <input type="text" name="menu" readonly value="{{ $menu }}" class="w-full p-3 border rounded bg-gray-100 dark:bg-gray-800 dark:border-gray-700">
      </div>

      <div>
        <label class="block mb-2 font-semibold">Jumlah</label>
        <input type="number" name="jumlah" min="1" value="1" class="w-full p-3 border rounded bg-white dark:bg-gray-800 dark:border-gray-700" required>
      </div>

      <div>
        <label class="block mb-2 font-semibold">Nama Pemesan</label>
        <input type="text" name="nama" class="w-full p-3 border rounded bg-white dark:bg-gray-800 dark:border-gray-700" required>
      </div>

      <div>
        <label class="block mb-2 font-semibold">Nomor HP</label>
        <input type="tel" name="hp" class="w-full p-3 border rounded bg-white dark:bg-gray-800 dark:border-gray-700" required>
      </div>

      <div>
        <label class="block mb-2 font-semibold">Catatan Tambahan</label>
        <textarea name="catatan" rows="3" class="w-full p-3 border rounded bg-white dark:bg-gray-800 dark:border-gray-700"></textarea>
      </div>

      <button type="submit" class="bg-amber-600 text-white px-6 py-3 rounded hover:bg-amber-700 transition">
        Kirim Pesanan
      </button>
    </form>
  </div>

</body>
</html>

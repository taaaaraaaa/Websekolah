Update Formulir di index.html
Ubah form agar mengarah ke daftar.php

<form action="daftar.php" method="POST" class="bg-white p-6 rounded-lg shadow space-y-4">
  <input name="nama" type="text" placeholder="Nama Lengkap" class="w-full border p-2 rounded" required />
  <input name="email" type="email" placeholder="Email" class="w-full border p-2 rounded" required />
  <input name="telepon" type="tel" placeholder="No. Telepon" class="w-full border p-2 rounded" required />
  <textarea name="pesan" placeholder="Pesan / Pertanyaan" class="w-full border p-2 rounded"></textarea>
  <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Kirim</button>
</form>

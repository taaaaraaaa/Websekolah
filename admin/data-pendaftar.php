<?php
include '../db/koneksi.php';
$result = mysqli_query($koneksi, "SELECT * FROM pendaftaran ORDER BY tanggal_daftar DESC");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Data Pendaftar</title>
  <link href="https://cdn.tailwindcss.com" rel="stylesheet">
</head>
<body class="p-6 bg-gray-100">
  <h2 class="text-2xl font-bold mb-4">Data Pendaftar</h2>
  <table class="w-full border bg-white shadow">
    <thead class="bg-blue-200">
      <tr>
        <th class="p-2 border">No</th>
        <th class="p-2 border">Nama</th>
        <th class="p-2 border">Email</th>
        <th class="p-2 border">Telepon</th>
        <th class="p-2 border">Pesan</th>
        <th class="p-2 border">Tanggal</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td class="p-2 border"><?php echo $no++; ?></td>
          <td class="p-2 border"><?php echo $row['nama']; ?></td>
          <td class="p-2 border"><?php echo $row['email']; ?></td>
          <td class="p-2 border"><?php echo $row['telepon']; ?></td>
          <td class="p-2 border"><?php echo $row['pesan']; ?></td>
          <td class="p-2 border"><?php echo $row['tanggal_daftar']; ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>
</html>

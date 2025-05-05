<?php
include 'db/koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$telepon = $_POST['telepon'];
$pesan = $_POST['pesan'];

$sql = "INSERT INTO pendaftaran (nama, email, telepon, pesan)
        VALUES ('$nama', '$email', '$telepon', '$pesan')";

if (mysqli_query($koneksi, $sql)) {
    echo "<script>alert('Pendaftaran berhasil!'); window.location.href='index.html';</script>";
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>

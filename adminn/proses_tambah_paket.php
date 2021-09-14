<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../koneksi.php';

// membuat variabel untuk menampung data dari form
$judul   = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$harga    = $_POST['harga'];
$no_wa    = $_POST['no_wa'];


$result = mysqli_query($koneksi, "INSERT INTO paket_wisata VALUES ('','$judul','$deskripsi','$harga','$no_wa')");

// Re direct to  homepa ge to display updated user in list
echo "<script>alert('Data berhasil ditambah.');window.location='paket_wisata.php';</script>";

<?php
// include database connection file
include "../koneksi.php";

// Check if form is submitted for user update, then redirect to homepage after update
$id_paket = $_POST['id_paket'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$no_wa = $_POST['no_wa'];


// update user data
$result = mysqli_query($koneksi, "UPDATE paket_wisata SET judul='$judul',deskripsi='$deskripsi',harga='$harga',no_wa='$no_wa' WHERE id_paket='$id_paket'");

// Redirect to homepage to display updated user in list
echo "<script>alert('Data berhasil diubah.');window.location='paket_wisata.php';</script>";

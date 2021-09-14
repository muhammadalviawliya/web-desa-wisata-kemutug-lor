<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../koneksi.php';

// membuat variabel untuk menampung data dari form
$nama   = $_POST['nama'];
$email = $_POST['email'];
$password    = $_POST['password'];



$result = mysqli_query($koneksi, "INSERT INTO admin VALUES ('','$nama','$email','$password')");

// Re direct to  homepa ge to display updated user in list
echo "<script>alert('Data berhasil ditambah.');window.location='admin.php';</script>";

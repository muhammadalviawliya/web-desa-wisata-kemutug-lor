<?php

include "../koneksi.php";

$wisata = $_POST['wisata'];
$deskripsi = $_POST['deskripsi'];
$jenis_wisata = $_POST['jenis_wisata'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
$ex = explode('.', $gambar);
$nama_baru = 'gambar_' . time() . '.' . strtolower($ex[1]);

$daftar_extensi = ['jpg', 'png', 'jpeg'];
$extensi = strtolower(end($ex));

if (in_array($extensi, $daftar_extensi) === true) {
    $pindah = move_uploaded_file($tmp, '../images/' . $nama_baru);
    $query = $koneksi->query("INSERT INTO wisata VALUES(NULL,'$wisata','$deskripsi','$jenis_wisata','$nama_baru')");
    header('location:wisata.php');
} else {
    header('location:tambah_wisata.php');
}

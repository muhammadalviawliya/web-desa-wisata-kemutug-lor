<?php

include "../koneksi.php";

$paragraf1 = $_POST['paragraf1'];
$paragraf2 = $_POST['paragraf2'];
$youtube = $_POST['youtube'];
$map = $_POST['map'];
$gambar = $_FILES['gambar']['name'];
$gambar_lama = $_POST['gambar_lama'];
$tmp = $_FILES['gambar']['tmp_name'];
$ex = explode('.', $gambar);
$nama_baru = 'gambar_' . time() . '.' . strtolower($ex[1]);

$daftar_extensi = ['jpg', 'png', 'jpeg'];
$extensi = strtolower(end($ex));

if (in_array($extensi, $daftar_extensi) === true) {
    $pindah = move_uploaded_file($tmp, '../images/' . $nama_baru);
    $query = $koneksi->query("UPDATE info_desa SET gambar='$nama_baru',paragraf1='$paragraf1',paragraf2='$paragraf2',youtube='$youtube',map='$map'  WHERE id='1'");
    if (file_exists('../images/' . $gambar_lama)) {
        unlink('../images/' . $gambar_lama);
    }
    header('location:info_desa.php');
} else {
    echo "Type File Salah !!! ";
}

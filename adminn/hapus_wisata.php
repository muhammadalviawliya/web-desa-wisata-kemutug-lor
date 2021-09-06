<?php

include "../koneksi.php";

$id = $_GET['id_wisata'];

$query = $koneksi->query("SELECT * FROM wisata WHERE id_wisata='$id'");
$data = $query->fetch_assoc();

$query_hapus = $koneksi->query("DELETE FROM wisata WHERE id_wisata='$id'");

if (file_exists('../images/' . $data['gambar'])) {
    unlink('../images/' . $data['gambar']);
}

header('location:wisata.php');

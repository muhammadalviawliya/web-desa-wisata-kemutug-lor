<?php
// include database connection file
include "../koneksi.php";

// Check if form is submitted for user update, then redirect to homepage after update
if (isset($_POST['ubah'])) {
    $nama_desa = $_POST['nama_desa'];
    $kode = $_POST['kode'];
    $facebook = $_POST['facebook'];
    $instagram = $_POST['instagram'];

    // update user data
    $result = mysqli_query($koneksi, "UPDATE pengaturan SET nama_desa='$nama_desa',kode='$kode',facebook='$facebook',instagram='$instagram' WHERE id='1'");

    // Redirect to homepage to display updated user in list
    header("Location: pengaturan.php");
}
